<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Redirect;

use Session;
Session_start();

class OrderController extends Controller
{
      public function manage_order(){


	$all_order=DB::table('tbl_orders')
	->join('tbl_customers','tbl_orders.customer_id','=','tbl_customers.customer_id')
   
    ->select('tbl_orders.*','tbl_customers.customer_name')


      ->get();
	$manage=view('admin.order.manage_order')
			->with('all_order',$all_order);
			return view('admin_layout')
			->with('admin.order.manage_order',$manage);

        
    }

}
