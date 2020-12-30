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
        return redirect()->route('role.list')->with('add','Thêm mới thành công');
    }
    public function edit($id){
        $role = $this->roleRepository->findById($id);
        return view('role.edit',compact('role'));
    }
    public function update(RoleRequests $requets, $id){
        $role = $this->roleRepository->findById($id);
        $this->roleRepository->update($requets, $role);
        return redirect()->route('role.list')->with('update','Cập nhật thành công');
    }
    public function delete($id){
        $this->roleRepository->delete($id);
        return redirect()->route('role.list')->with('delete','Xóa thành công');
    }
}
