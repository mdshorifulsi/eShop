<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Redirect;

use Session;
Session_start();


class AdminController extends Controller
{
    public function index(){

    	return view('admin_login');
    }


    public function show_dashboard(){


    	return view('admin.dashboard');
    }


    public function admin_dashboard(Request $request){


    		$admin_email=$request->admin_email;
    		$admin_password=$request->admin_password;

    		$result=DB::table('tbl_admin')
    				->where('admin_email',$admin_email)
    				->where('admin_password',$admin_password)
    				->first();
    				// print_r($result);

    				if($result){
    					Session::put('admin_name',$request->admin_name);
    					Session::put('admin_id',$request->admin_id);
    					return Redirect('dashboard');

    				}else{
    					Session::put('msg','<div class="alert alert-danger">
							<strong>Error! </strong>Place Insert Your Email & password!!
							</div>');
    					return Redirect('admin');

    				}


    }
}
