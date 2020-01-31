<?php

namespace App\Http\Controllers;
use App\Books;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $data = Books::all();
        return view('books',compact('data'));
    }
    public function show($id)
    {
        $data = Books::findOrFail($id);
        return view('cari-books',compact('data'));
    }
}
