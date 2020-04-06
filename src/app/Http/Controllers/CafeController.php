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

    public function index()
    {
        $cafes = Cafe::all();
        return view('cafe/index', [
            'cafes' => $cafes,
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
