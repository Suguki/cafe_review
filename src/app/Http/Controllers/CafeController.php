<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $evaluation = $request->get('evaluation');
        $cafes = Cafe::all();
        if($request->get('sortBy') == 'asc'){
            $cafes = $cafes->sortBy($evaluation);
        } elseif($request->get('sortBy') == 'desc') {
            $cafes = $cafes->sortByDesc($evaluation);
        }
        return view('cafe/index', ['cafes' => $cafes]);

    }

    public function show($id)
    {
        $cafe = Cafe::find($id);

        if ($cafe === null) {
            // 渡された$idでカフェを取得できなかったときは、カフェが存在しないことをページに表示して、ユーザーにお知らせする。
            return view('cafe/error', [
                'errorMessage' => 'このカフェは存在しません。'
            ]);
        }

        // 渡された$idでカフェを取得することができた場合、詳細ページを表示する。これは表示系なので、bladeへ変数を渡す。
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
            'cafe' => $cafe,
        ]);
    }

    public function update($id, Request $request)
    {
        $cafe = Cafe::find($id);
        $cafe->name = $request->get('name');
        $cafe->place = $request->get('place');
        $cafe->food_evaluation = $request->get('food_evaluation');
        $cafe->access_evaluation = $request->get('access_evaluation');
        $cafe->feeling_evaluation = $request->get('feeling_evaluation');
        $cafe->save();
        return redirect(route('cafe.index'));
    }

    public function delete($id)
    {
        $cafe = Cafe::find($id);
        $cafe->delete();
        return redirect(route('cafe.index'));
    }
}
