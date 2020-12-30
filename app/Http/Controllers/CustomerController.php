<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CustomerRepo\CustomerRepository;
use App\Http\Repositories\CustomerRepo\CustomerRepositoryInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $customerRepository;
    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }
    public function index()
    {
        $customers = $this->customerRepository->getAll();
        return view('admin.customer.list',compact('customers'));
    }
    public function store(Request $request)
    {
        $this->customerRepository->create($request);
        $message = [
            'message'=>'Thêm mới thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('customer.list')->with($message);
    }
    public function edit($id)
    {
        $customer = $this->customerRepository->findById($id);
        return view('admin.customer.edit',compact('customer');
    }
    public function update(Request $request, $id)
    {
        $customer = $this->customerRepository->findById($id);
        $this->customerRepository->update($request, $customer);
        $message = [
            'message'=>'Cập nhật thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('customer.list')->with($message);
    }
    public function delete($id)
    {
        $customer = $this->customerRepository->findById($id);
        $this->customerRepository->delete($customer);
        $message = [
            'message'=>'Cập nhật thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('customer.list')->with($message);
    }
}
