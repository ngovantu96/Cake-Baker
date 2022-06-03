<?php

namespace App\Http\Controllers;


use App\Models\User;

class DemoController extends Controller
{
    public function index(){
        $i = 0;
        $number = $i + 1;
    }
    public function destroy()
    {
        return "hello mọi người";
    }

    public function create()
    {
        $user = new User();
    }
    public function update($id)
    {
        return $id;
    }

    public function detail($id)
    {
        return $id;

    }


    public function show(){

    }
}
