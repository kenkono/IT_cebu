<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {

        $blogs = Blog::all();

        return view('hellolaravel', compact('blogs'));
    }

    public function showBooks() {
        return view('books');
    }

    public function createBooks() {
        return view('createPage' ,["message" => "This is parameter"]);
    }
}
