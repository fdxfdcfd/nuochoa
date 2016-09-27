<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function ProductList(){
        $data= array(array('name'=>'PC'));
        return view('product.v_product_list')->with('productlist',$data);
    }
}
