<?php

namespace App\Http\Controllers;


class AppController extends Controller {

    public function index(){
        $a = 10;
        $b = 30;
        $c = $a + $b;
        return $c;
    }
    public function create(){
        echo '456heh';
    }
}