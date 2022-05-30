<?php

namespace App\Http\Controllers;


class DemoController extends Controller
{
    public function index(){
        $i = 0;
        $number = $i + 1;
    }
    public function destroy()
    {

    }

    public function create()
    {

    }
    public function update()
    {

    }

    public function detail($id)
    {
        return $id;

    }
}
