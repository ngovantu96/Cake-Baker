<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UserRepo\UserRepository;
use App\Http\Repositories\UserRepo\UserRepositoryInterface;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index(){
        $users = $this->userRepository->getAll();
        return view('admin.user.list',compact('users'));
    }
    public function showCreate(){
        $roles = Role::all();
        return view('admin.user.create',compact('roles'));
    }
    public function store(Request $request){
        $this->userRepository->create($request);
        $message = [
            'message'=>'Thêm mới thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('user.list')->with($message);
    }
    public function edit($id){
        $user = $this->userRepository->findById($id);
        $roles = Role::all();
        return view('admin.user.edit',compact('user','roles'));
    }
    public function update(Request $request, $id){
        $user = $this->userRepository->findById($id);
        $this->userRepository->update($request, $user);
        $message = [
            'message'=>'Cập nhật thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('user.list')->with($message);
    }
    public function delete($id){
        $this->userRepository->delete($id);
        $message = [
            'message'=>'xóa thành công',
            'alert-type'=>'thành công'
        ];
        return redirect()->route('user.list')->with($message);

    }
}
