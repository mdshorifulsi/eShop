<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class manufactureController extends Controller
{
    public function index(){

    	return view('admin.manufacture.add_manufacture');
    }

    public function save_manufacture(Request $request){

         $validatedData = $request->validate([
        'manufacture_name' => 'required|unique:tbl_manufactures|max:25|min:3',
        'manufacture_description' => 'required|unique:tbl_manufactures|max:255|min:4',
    ]);

    		$data=array();
    		$data['manufacture_name']=$request->manufacture_name;
    		$data['manufacture_description']=$request->manufacture_description;
    		$data['publication_status']=$request->publication_status;

    		DB::table('tbl_manufactures')->insert($data);

    			Session::put('msg','<div class="alert alert-success">
							<strong>success!! </strong>Insert Manufacture successfully completed!
							</div>');

    		return Redirect('add-manufacture');

    }


    public function all_manufacture(){

        $all_manufacture=DB::table('tbl_manufactures')->get();
        $manage_manufacture=view('admin.manufacture.all_manufacture')
                            ->with('all_manufacture',$all_manufacture);
        return view('admin_layout')
                    ->with('admin.manufacture.all_manufacture',$manage_manufacture);
    
}


    public function delete_manufacture($manufacture_id){


            DB::table('tbl_manufactures')
            ->where('manufacture_id',$manufacture_id)
            ->delete();

            return Redirect('all-manufacture');

    }


    public function unactive_manufacture($manufacture_id){


            DB::table('tbl_manufactures')
            ->where('manufacture_id',$manufacture_id)
            ->update(['publication_status'=>0]);

            return Redirect('all-manufacture');

    }

    public function active_manufacture($manufacture_id){

                DB::table('tbl_manufactures')
            ->where('manufacture_id',$manufacture_id)
            ->update(['publication_status'=>1]);

            return Redirect('all-manufacture');


    }

    public function edit_manufacture($manufacture_id){


            $edit_manufacture=DB::table('tbl_manufactures')
                    ->where('manufacture_id',$manufacture_id)
                    ->first();
            $manage=view('admin.manufacture.edit_manufacture')
                    ->with('edit_manufacture',$edit_manufacture);
                    return view('admin_layout')
                            ->with('admin.manufacture.edit_manufacture',$manage);

    }


    public function update_manufacture(Request $request,$manufacture_id){


            $data=array();

            $data['manufacture_name']=$request->manufacture_name;
            $data['manufacture_description']=$request->manufacture_description;

            DB::table('tbl_manufactures')
            ->where('manufacture_id',$manufacture_id)
            ->update($data);

            return Redirect('all-manufacture');


    }

}
