<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $values = Test::all();
        $count = Test::count();
        $first = Test::first();
        $wherebbb = Test::where('text', '=', 'bbb')->get();

        dd($values, $count, $first, $wherebbb);

        return view('tests.index', compact('values'));
    }
}
