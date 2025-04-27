<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use App\Libraries\Core\File;

class ProductController extends Controller
{
    function index()
        {
            $products=DB::table("products")->get();
            return view("product.index",["products"=>$products]);
        }
    function create()
        {
            return view('product.create');
        }
    function store(Request $request)
        {
            echo $request->name;
            return redirect()->route("products.index")->with('success','Success.');
        }

    function show($id)
        {
            $product=Product::find($id);
            return view("product.show",["product"=>$product]);
        }
    function edit($id)
        {
            return view("product.edit");
        }
    function update($id,Request $request)
        {
            echo $request->name;
            echo $id;
        }
    function confirm($id)
        {
            return view("product.confirm", ["id"=>$id]);
        }
    function destroy($id)
        {
            echo "delete=".$id;
        }
}