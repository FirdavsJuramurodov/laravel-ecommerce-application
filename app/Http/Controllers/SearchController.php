<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search (Request $request) {
       if($request->isMethod('post')){
           $inputname = $request->get('searcher');
           $inputCity = $request->get('cityChoice');
           if ($inputCity != 'Select a city'){
           $products = Product::where('name', 'LIKE', '%'. $inputname . '%' )->where('city', '=', $inputCity)->paginate(5);
           }  else {
            $products = Product::where('name', 'LIKE', '%'. $inputname . '%' )->paginate(5);
           }
       }
        return view('site.pages.searcher', compact('products'));
    }
}
