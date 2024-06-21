<?php
namespace App\Http\Controllers;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $lst2=Product::all();
        return view('/User/Product-List',compact('lst2'));
    }
}
