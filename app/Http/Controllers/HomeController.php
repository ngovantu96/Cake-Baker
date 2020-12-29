<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ProductRepo\ProductRepository;
use App\Http\Repositories\ProductRepo\ProductRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $homePoductRepository;
    public function __construct(ProductRepositoryInterface $homeProductRepository)
    {
        $this->homePoductRepository = $this->homePoductRepository;
    }
    public function index()
    {
        return view('page.index');
    }
}
