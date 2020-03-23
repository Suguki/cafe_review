<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;

class CafeController extends Controller
{
    public function index()
    {
        return view('cafe/index');
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
}
