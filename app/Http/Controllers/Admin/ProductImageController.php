<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Contracts\ProductContract;
use App\Http\Controllers\Controller;
use App\Models\Models\ProductImage as ModelsProductImage;

class ProductImageController extends Controller
{
    public function store (Request $request) {
       $data = $request->validate ([
           'product_id' => 'required'
       ]);

       $new_product_image = ProductImage::create($data);

       if($request->has('images')){
           foreach($request->file('images') as $image){
               $imageName = $data['product_id'] . '-image-' . time().rand(1, 1000). '.' .$image->extension();
               $image->move(public_path('product_images'), $imageName);
           }
       }
    }
}
