<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;
Session_start();

use Cart;

class CartController extends Controller
{
    public function add_to_cart(Request $request){


    	$qty=$request->qty;
    	$product_id=$request->product_id;

    	$product_info=DB::table('tbl_products')
    			->where('product_id',$product_id)
    			->first();

    			// print_r($product_info);


    			$data['qty']=$qty;
    				$data['id']=$product_info->product_id;
    				$data['name']=$product_info->product_name;
    				$data['price']=$product_info->product_price;
    				$data['weight']=[0][0];
    				$data['options']['image']=$product_info->product_image;
    				
    				Cart::add($data);
    				return Redirect('/show-cart');

    }


     public function show_cart(){

    	$all_published_category=DB::table('tbl_categorys')
    						->where('publication_status',1)
    						->get();

    		$manage_product_category=view('pages.add_to_cart')
			->with('all_published_category',$all_published_category);
			return view('layout')
			->with('pages.add_to_cart',$manage_product_category);

    }

    public function delete_cart($rowId){

    	Cart::update($rowId,0);
    	return Redirect('/show-cart');



    }

// public function update_cart($rowId){


//     $qty=$request->qty;
        
     

//      echo $qty;
//      echo $rowId;
//     Cart::update($qty,$rowId);

//         return Redirect()->route('show_cart');


// }



}
