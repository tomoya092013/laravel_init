<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        //Eloquant(エロクアント)
        // $values = Test::all();
        // $count = Test::count();
        // $first = Test::first();
        // $wherebbb = Test::where('text', '=', 'bbb')->get();

        //クエリビルダ
        $tests = DB::table('tests')->get();
        $bbb = DB::table('tests')->where('text', '=', 'bbb')->get();

        // dd($values, $count, $first, $wherebbb);
        dd($tests, $bbb);

        // return view('tests.index', compact('values'));
    }
}
