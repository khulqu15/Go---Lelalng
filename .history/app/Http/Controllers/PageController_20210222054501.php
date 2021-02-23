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
            $product = $query->where('name', 'LIKE', '%'.$request->get('name').'%');
        }
        if($request->get('category')) {
            $product = $query->where('category_id', $request->get('category'));
        }
        $product = $query->paginate(6);
        return view('page.products');
    }
}
