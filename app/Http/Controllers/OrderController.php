<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('admin.order.list',compact('orders'));
    }
    public function orderDetails($id)
    {
        $orderDetails = DB::table('order_details')->join('products','products.id','=','order_details.product_id')
            ->join('orders','orders.id','=','order_details.order_id')
            ->select('products.name','order_detail.quantity','order_details.price','order_details.total');
        return view('admin.order.order-details',compact('orderDetails'));
    }
    public function deleteOrderDetails($id)
    {
        DB::table('order_details')->where('order_id', '=', $id)->delete();
        return redirect()->route('order.detail');
    }
    public function orderDelete($id){
        $orderDelete = Order::FindOrFail($id);
        $orderDelete->delete();
        return redirect()->route('order.index');
    }

}
