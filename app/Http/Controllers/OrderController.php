<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
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
        $orders =  Order::where('id',$id)->get();
       $orderDetails = DB::table('order_details')
           ->join('products','products.id','=','order_details.product_id')
           ->select('order_details.quantity','order_details.price','order_details.total','products.name')
           ->where('order_details.order_id',$id)
           ->get();
        return view('admin.order.order-detail',compact('orders','orderDetails'));
    }
    public function orderDelete($id)
    {
        DB::table('order_details')->where('order_id', '=', $id)->delete();
        $orderDelete = Order::FindOrFail($id);
        $orderDelete->delete();
        return redirect()->route('order.list')->with('delete','xóa thành công.');
    }


}
