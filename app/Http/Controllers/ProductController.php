<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $lst2=Product::all();
        $lst1=Category::whereNull('parent_id')->with('children')->get();
        return view('/User/Home',compact('lst2','lst1'));
    }
}
