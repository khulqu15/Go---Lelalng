<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function products(Request $request)
    {
        $query = Product::query();
        if($request->get('name')) {
            $products = $query->where('name', 'LIKE', '%'.$request->get('name').'%');
        }
        if($request->get('category')) {
            $products = $query->where('category_id', $request->get('category'));
        }
        $products = $query->paginate(6);
        return view('page.products', compact('products'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('page.product', compact('product'));
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register';)
    }
}
