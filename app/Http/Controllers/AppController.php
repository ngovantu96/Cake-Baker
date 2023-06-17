<?php

namespace App\Http\Controllers;


class AppController extends Controller {

    public function index(){
        $a = 10;
        $c = 50;
        $f =30;
        $d = $a + $c + $f;
        return $d;
    }
    public function create(){
        echo '456heh';
    }
}