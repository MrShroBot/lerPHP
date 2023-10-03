<?php

namespace App\Controllers;

use App\Models\User;

class UserController {
    public function index(){
        $user = User::all();
        view('users/index', compact('user'));
    }
    public function store(){
        var_dump($_POST);
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
        header('Location: /admin/user');
    }
    public function show(){
        $id = $_GET['id'];
        $user = User::find($id);
        view('users/viwe', compact('user'));
    }
    public function delete(){
        $id = $_GET['id'];
        $user = User::find($id);
        $user->delete();
        header('Location: /admin/users');
    }
}