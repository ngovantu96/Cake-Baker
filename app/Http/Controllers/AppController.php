<?php

namespace App\Http\Controllers;


class AppController extends Controller {

    public function index(){
        $a = 10;
        $c = 50;
        $f =30;
        $b = $c;
        return $a;
    }
    public function create(){
        echo '456heh';
    }

    private function edit($id) {
        echo $id;
    }
}