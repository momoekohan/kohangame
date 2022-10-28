<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test($user){
        // $hensu = "変数です";
        // echo $hensu;
        // echo "Hello!" . $user;
        return view('top');
    }

    public function prologue($number){
        if ($number == 1) {
            $bunsho = "１つめです";
        } else if ($number == 2) {
            $bunsho = "２つめです";
        }
        return view('prologue', compact('bunsho'));
    }
}
