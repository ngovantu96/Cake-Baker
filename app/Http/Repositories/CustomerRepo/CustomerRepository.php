<?php
namespace App\Http\Repositories\CustomerRepo;


use App\Models\Customer;
use http\Env\Request;
use Illuminate\Cache\Repository;
use Illuminate\Contracts\Cache\Store;

class CustomerRepository extends Repository implements CustomerRepositoryInterface
{
    public function __construct(Customer $model)
    {
        parent::__construct($model);
    }
    public function store($request)
    {
        $this->model->name = $request->name;
        $this->model->phone = $request->phone;
        $this->model->address = $request->address;
        $this->model->email = $request->email;

    }
    public function update($request , $obj)
    {
        $obj->model->name = $request->name;
        $obj->model->phone = $request->phone;
        $obj->model->address = $request->address;
        $obj->model->email = $request->email;
    }
}
