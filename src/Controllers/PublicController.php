<?php

namespace App\Controllers;

class PublicController {
    public function home() {
        $name = "Kapar";
        $num = rand(0,20);
        view('home', compact('name','num'));
    }
    public function about() {
        view('about');
    }
}