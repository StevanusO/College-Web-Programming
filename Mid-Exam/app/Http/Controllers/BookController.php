<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategories;
use App\Models\Categories;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book_data = Book::paginate(6);
        return view('Homepage', compact('book_data'));
    }

    public function getBookDetail(Request $req)
    {
        $book_data = Book::find($req->id);
        return view('DetailBook', compact('book_data'));
    }

    public function getBookCategory(Request $req)
    {
        $categories = Categories::find($req->id);
        $temp = $categories->BookCategories;

        return view('CategoryPage', compact('temp', 'categories'));
    }
}
