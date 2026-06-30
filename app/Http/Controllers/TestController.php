<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

    $value = session()->all();
    echo "<pre>";
    print_r($value);
    echo "</pre>";

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

    $request(['name' => 'Azan']);
    $request() ->put("class","btech");

    return redirect('/');

    }

    public function deleteSession(){

    session()->forget('class');

    return redirect('/');
    }
}
