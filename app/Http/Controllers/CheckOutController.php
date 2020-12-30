<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function showChckOut(){
        $cart = session('Cart');
        return view('Cakebaker.check-out',compact('cart'));
    }
}
