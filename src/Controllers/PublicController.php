<?php

namespace App\Controllers;

use DeflateContext;

class PublicController {
    public function home() {
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