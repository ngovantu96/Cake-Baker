<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProductRepo\ProductRepositoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function index(){
        $products = $this->productRepository->getAll();
        return view('admin.product.list',compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $this->productRepository->store($request);
        $message = [
            'message'=>'Thêm mới thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('product.list')->with($message);
    }
    public function edit($id)
    {
        $categories = Category::all();
        $product = $this->productRepository->findById($id);
        return view('admin.product.edit',compact('product','categories'));
    }
    public function update($request, $id)
    {
        $product = $this->productRepository->findById($id);
        $this->productRepository->update($product);
        $message = [
            'message'=>'Thêm mới thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('product.list')->with($message);;
    }
    public function delete($id){
        $this->productRepository->delete($id);
        $message = [
            'message'=>'Thêm mới thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('product.list')->with($message);;
    }

    public function getCakeBaker(){
        $cakeBakers= $this->productRepository->getCakeBaker();
        return view('Cakebaker.index',compact('cakeBakers'));
    }
    public function productDetail($id){
        $product = $this->productRepository->findById($id);
        $cakeBakers= $this->productRepository->getCakeBaker();
        return view('Cakebaker.product-detail',compact('product','cakeBakers'));
    }

}
