<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\CafeImages;
use App\Models\Review;
use Illuminate\Support\Facades\Storage;

class CafeController extends Controller
{
    public function index(Request $request)
    {
        $searchedCafe = $request->get('searchedCafe');

        $evaluation = $request->get('evaluation');
        $cafes = Cafe::with(['images', 'reviews']);
        if(strlen($searchedCafe) > 0) {
            $cafes = $cafes->where('name', 'LIKE', "%{$searchedCafe}%");
        }
        $cafes = $cafes->get();
        if ($request->get('sortBy') == 'asc') {
            $cafes = $cafes->sortBy($evaluation);
        } elseif ($request->get('sortBy') == 'desc') {
            $cafes = $cafes->sortByDesc($evaluation);
        }

        return view('cafe/index', ['cafes' => $cafes]);
    }

    public function show($id)
    {
        $cafe = Cafe::with(['images', 'reviews.user'])->find($id);
        if ($cafe === null) {
            return view('cafe/error', [
                'errorMessage' => 'このカフェは存在しません。'
            ]);
        }
        return view('cafe/show', [
            'cafe' => $cafe,

        ]);
    }

    public function create()
    {
        return view('cafe/create');
    }

    public function store(Request $request)
    {
        $cafe = new Cafe();
        $cafe->name = $request->get('name');
        $cafe->place = $request->get('place');
        $cafe->save();
        return redirect(route('cafe.index'));
    }

    public function edit($id)
    {
        $cafe = Cafe::find($id);
        return view('cafe/edit', [
            'cafe' => $cafe
        ]);
    }

    public function update($id, Request $request)
    {
        $cafe = Cafe::find($id);
        $cafe->name = $request->get('name');
        $cafe->place = $request->get('place');
        $cafe->save();
        return redirect(route('cafe.index'));
    }

    public function delete($id)
    {
        $cafe = Cafe::find($id);
        $cafe->delete();
        return redirect(route('cafe.index'));
    }

    public function upload($id, Request $request) //1
    {
        if ($request->file('imageFile')->isValid()) {
            $path = $request->file('imageFile')->store('public/images'); //2,3,4
            $cafe_images = new CafeImages();
            $cafe_images->cafe_id = $id;
            $cafe_images->file_name = Storage::url($path); //5
            $cafe_images->save();
            return redirect(route('cafe.edit', ['id' => $id]))->with('success', '保存しました。');
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }
    }
}
