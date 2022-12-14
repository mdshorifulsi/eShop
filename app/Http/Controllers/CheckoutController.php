<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Redirect;

use Session;
Session_start();
use Cart;

class CheckoutController extends Controller
{



    public function login_check(){


    	return view('pages.login');


    }


    public function customer_registration(Request $request){

    		$data=array();
    		$data['customer_name']=$request->customer_name;
    		$data['customer_email']=$request->customer_email;
    		$data['customer_password']=$request->customer_password;
    		$data['customer_Contract']=$request->customer_Contract;

    		$customer_id=DB::table('tbl_customers')
    			->insertGetId($data);
    			Session::put('customer_id',$customer_id);
    			Session::put('customer_name',$request->customer_name);
                return Redirect('/checkout');


    }




    public function checkout(){


    	return view('pages.checkout');
    }

    public function save_shipping_details(Request $request){

        $data=array();
        $data['shipping_Name']=$request->shipping_Name;
        $data['shipping_address']=$request->shipping_address;
        $data['shipping_Contract']=$request->shipping_Contract;
        $data['shipping_email']=$request->shipping_email;

       $shipping_id= DB::table('tbl_shippings')
                    ->insertGetId($data);
                    Session::put('shipping_id',$shipping_id);
                    return Redirect('/payment');
        // print_r($data);


    }

    public function customer_login(Request $request){

        $customer_password= $request->customer_password;
        $customer_email=$request->customer_email;

        $result=DB::table('tbl_customers')
                ->where('customer_email',$customer_email)
                ->where('customer_password',$customer_password)
                ->first();
                //
                print_r($result);


                if($result){
                    
                    Session::put('customer_id',$result->customer_id);
                    return Redirect('/checkout');
                }else{
                    return Redirect('login-check');
                }



    }


    public function customer_logout(){

            Session::flush();
    return Redirect('/');
    }


    public function payment(){


        return view('pages.payment');
    }


    public function order_place(Request $request){

            $payment_method=$request->payment_method;


           

      $pdata=array();
$pdata['payment_method']=$payment_method;
$pdata['payment_status']='pending';
$payment_id=DB::table('tbl_payments')
            ->insertGetId($pdata);


$odata=array();
$odata['customer_id']=Session::get('customer_id');
$odata['shipping_id']=Session::get('shipping_id');
$odata['payment_id']=$payment_id;
$odata['order_total']=Cart::total();
$odata['order_status']='pending';

$order_id=DB::table('tbl_orders')
            ->insertGetId($odata);




$content=Cart::content();

$oddata=array();

foreach ($content as $v_content) {

    $oddata['order_id']=$order_id;
    $oddata['product_id']=$v_content->id;
    $oddata['product_name']=$v_content->name;
    $oddata['product_price']=$v_content->price;
    $oddata['product_sales_quantity']=$v_content->qty;


            DB::table('tbl_order_details')
            ->insert($oddata);
    
}




if($payment_method=='handcash'){

    
    Cart::destroy();
    return view('pages.handcash');

}

elseif($payment_method=='bkash'){
    echo "Bkash";
}
elseif($payment_method=='cart'){
    echo "cart";
}
else{
    echo "not select";
}


    }



  

}


