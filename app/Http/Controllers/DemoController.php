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

    }

    public function create()
    {
        $user = new User();
    }
    public function update()
    {

    }

    public function detail($id)
    {
        return $id;

    }
}
