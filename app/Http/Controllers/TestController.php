<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

    $value = session('name');

    return view('welcome', compact('value'));

    // $value = session()->all();
    // echo "<pre>";
    // print_r($value);
    // echo "</pre>";

    // $value = session()->get('name');

    // $value = session('name');
    // echo $value;

    }

    // public function storeSession(){

    // session(['name' => 'Azan']);
    // session() ->put("class","btech");

    // return redirect('/');
    // }

    public function storeSession(Request $request){

    session(['name' => 'Azan']);
    $request->session()->put("class","btech");

    session()->increment('count');

    session()->regenerate();

    return redirect('/');

    }

    public function deleteSession(){

    // session()->forget('class');
    session()->flush();

    return redirect('/');
    }
}
