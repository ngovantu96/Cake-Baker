<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request, $id){
        $product = Product::findOrFail($id);
        if($product != null){
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
            $request->session()->put('Cart',$newCart);
        }
        return redirect()->back()->with('them thanh cong');
    }
    public function minusCart(Request $request, $id){
        $product = Product::findOrFail($id);
        if($product != null){
            $oldCart = session('Cart') ? session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->MinusCart($product, $id);
            $request->session()->put('Cart',$newCart);
        }
        return redirect()->back()->with('them thanh cong');
    }

    public function showCart(){
        $cart = session('Cart');
        return view('Cakebaker.cart',compact('cart'));
    }
    public function removeCart(Request $request, $id){
        $oldCart = session('Cart') ? session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteCart($id);
        if(Count($newCart->products) > 0){
            $request->session()->put('Cart',$newCart);
        }else{
            $request->session()->forget('Cart');
        }

        return redirect()->back();
    }
}
