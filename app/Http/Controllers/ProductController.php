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
            return view("pages.product.index",["products"=>$products]);
        }
    function create()
        {
            return view('pages.product.create');
        }
    function store(Request $request)
        {
            echo $request->name;
            return redirect()->route("pages.products.index")->with('success','Success.');
        }

    function show($id)
        {
            $product=Product::find($id);
            return view("pages.product.show",["product"=>$product]);
        }
    function edit($id)
        {
            return view("pages.product.edit");
        }
    function update($id,Request $request)
        {
            echo $request->name;
            echo $id;
        }
    function confirm($id)
        {
            return view("pages.product.confirm", ["id"=>$id]);
        }
    function destroy($id)
        {
            echo "delete=".$id;
        }
}