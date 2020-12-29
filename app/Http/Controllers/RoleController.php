<?php

namespace App\Http\Controllers;

use App\Http\Repositories\RoleRepo\RoleRepositoryInterface;
use App\Http\Requests\RoleRequests;
use Illuminate\Http\Requests;

class RoleController extends Controller
{
    private $roleRepository;
    public function __construct(RoleRepositoryInterface $roleRepository){
        $this->roleRepository = $roleRepository;
    }
    public function index(){
        $roles = $this->roleRepository->getAll();
        return view('admin.role.list',compact('roles'));
    }
    public function store(RoleRequests $requets){
        $this->roleRepository->create($requets);
        $notification = [
            'message'=>'Thêm mới thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('role.list')->with($notification);
    }
    public function edit($id){
        $role = $this->roleRepository->findById($id);
        return view('role.edit',compact('role'));
    }
    public function update(RoleRequests $requets, $id){
        $role = $this->roleRepository->findById($id);
        $this->roleRepository->update($requets, $role);
        $notification = [
            'message'=>'Cập nhật thành công',
            'alert-type'=>'Thành công'
        ];
        return redirect()->route('role.list')->with($notification);
    }
    public function delete($id){
        $this->roleRepository->delete($id);
        $notification = [
            'message'=>'Xóa thành công',
            'alert-type'=>'Thành công'
        ];
        return redirect()->route('role.list')->with($notification);
    }
}
