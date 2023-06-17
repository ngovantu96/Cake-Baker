<?php

namespace App\Http\Controllers;


class AppController extends Controller {

    public function index(){
        $a = 10;
        return $a;
    }
    public function create(){
        echo '456heh';
    }
}