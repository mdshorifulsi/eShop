<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
Session_start();

class CategoryController extends Controller
{
    public function index(){
    	return view('admin.category.add_category');
    }


    public function save_category(Request $request){


        $validatedData = $request->validate([
        'category_name' => 'required|unique:tbl_categorys|max:25|min:3',
        'category_description' => 'required|unique:tbl_categorys|max:255|min:4',
    ]);


    	$data=array();
    		$data['category_name']=$request->category_name;
    		$data['category_description']=$request->category_description;
    		$data['publication_status']=$request->publication_status;


    		DB::table('tbl_categorys')->insert($data);

    		Session::put('msg','<div class="alert alert-success">
							<strong>success!! </strong>Insert category successfully completed!
							</div>');

    		return Redirect('add-category');

    }


    public function all_category(){


             $all_category=DB::table('tbl_categorys')->get();
            $manage_category=view('admin.category.all_category')
                            ->with('all_category',$all_category);
            return view('admin_layout')
                            ->with('admin.category.all_category',$manage_category);

      
    }




    public function delete_category($category_id){


            DB::table('tbl_categorys')
            ->where('category_id',$category_id)
            ->delete();

            return Redirect('all-category');



    }

    public function unactive_category($category_id){

        DB::table('tbl_categorys')
            ->where('category_id',$category_id)
            ->update(['publication_status'=>0]);


            return Redirect('all-category');



    }

    public function active_category($category_id){

         DB::table('tbl_categorys')
            ->where('category_id',$category_id)
            ->update(['publication_status'=>1]);


            return Redirect('all-category');


    }


    public function edit_category($category_id){

        $edit_category=DB::table('tbl_categorys')
                    ->where('category_id',$category_id)
                    ->first();

        $manage_category=view('admin.category.edit_category')
                        ->with('edit_category',$edit_category);

        return view('admin_layout')
                        ->with('admin.category.edit_category',$manage_category);

                        

    }

    public function update_category(Request $request,$category_id){



        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
            
        DB::table('tbl_categorys')
        ->where('category_id',$category_id)
        ->update($data);


                    return Redirect('all-category');
    }



}
