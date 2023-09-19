<?php

namespace App\Controllers;

use App\DB;
use App\Models\Article;

class PublicController {
    public function home() {
        $articles = Article::all();
        view('home', compact('articles'));
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