<?php

namespace App\Controllers;

use App\DB;
use App\Models\User;

class PublicController {
    public function home() {
        $db = new DB;
        $result = User::all();
        var_dump($result);

        die();
        $name = "Kapar";
        $num = rand(0,20);
        view('home', compact('name','num'));
    }
    public function about() {
        view('about');
    }
    public function test() {
        var_dump($_POST);
        view('/form');
    }
    public function testAns() {
        var_dump($_POST);
    }
}