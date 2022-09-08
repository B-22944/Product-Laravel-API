<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function listProduct(){
        return Product::all();
    }

    public function listProductID($id){
        return Product::find($id);
    }
}
