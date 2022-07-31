<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Redirect;

use Session;
Session_start();

class HomeController extends Controller
{
    public function index(){



   $all_product_view=DB::table('tbl_products')
    ->join('tbl_categorys','tbl_products.category_id','=','tbl_categorys.category_id')
->join('tbl_manufactures','tbl_products.manufacture_id','=','tbl_manufactures.manufacture_id')
->select('tbl_products.*','tbl_categorys.category_name','tbl_manufactures.manufacture_name')

->limit(9)

        ->get();


            $manage=view('pages.home_content')
            ->with('all_product_view',$all_product_view);
            return view('layout')
            ->with('pages.home_content',$manage);



    }


    public function show_category($category_id){


   $product_show=DB::table('tbl_products')
    ->join('tbl_categorys','tbl_products.category_id','=','tbl_categorys.category_id')
	->select('tbl_products.*','tbl_categorys.category_name')
	->where('tbl_categorys.category_id',$category_id)
	->where('tbl_products.publication_status',1)
	->limit(9)

        ->get();


            $manage=view('pages.show_category')
            ->with('product_show',$product_show);
            return view('layout')
            ->with('pages.show_category',$manage);


    }


    public function show_manufacture($manufacture_id){



    	  $product_show_manufacture=DB::table('tbl_products')
    ->join('tbl_manufactures','tbl_products.manufacture_id','=','tbl_manufactures.manufacture_id')
	->select('tbl_products.*','tbl_manufactures.manufacture_name')
	->where('tbl_manufactures.manufacture_id',$manufacture_id)
	->where('tbl_products.publication_status',1)
	->limit(9)

        ->get();


            $manage=view('pages.show_manufacture')
            ->with('product_show_manufacture',$product_show_manufacture);
            return view('layout')
            ->with('pages.show_manufacture',$manage);



    }


    public function view_product($product_id){


           $view_product=DB::table('tbl_products')
    ->join('tbl_categorys','tbl_products.category_id','=','tbl_categorys.category_id')
->join('tbl_manufactures','tbl_products.manufacture_id','=','tbl_manufactures.manufacture_id')
->select('tbl_products.*','tbl_categorys.category_name','tbl_manufactures.manufacture_name')

->where('tbl_products.product_id',$product_id)
        ->first();


            $manage=view('pages.product_details')
            ->with('view_product',$view_product);
            return view('layout')
            ->with('pages.product_details',$manage);




    }
}
