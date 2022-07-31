<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Redirect;

use Session;
Session_start();

class ProductController extends Controller
{
    public function index(){

    		return view('admin.product.add_product');

    }

    public function save_product(Request $request){

    	$data=array();

    		$data['product_name']=$request->product_name;
    		$data['category_id']=$request->category_id;
    		$data['manufacture_id']=$request->manufacture_id;
    		$data['product_description']=$request->product_description;
    		$data['product_weight']=[0][0];
    		$data['product_price']=$request->product_price;
    		$data['publication_status']=$request->publication_status;

    		$image=$request->file('product_image');

    		if($image){

    			$image_name=hexdec(uniqid());
    			$ext=strtolower($image->getClientOriginalExtension());
    			$full_name=$image_name.'.'.$ext;
    			$path='images/';
    			$img_url=$path.$full_name;
    			$success=$image->move($path,$full_name);

    			if($success){
    				$data['product_image']=$img_url;
    				DB::table('tbl_products')->insert($data);
    				Session::put('msg','<div class="alert alert-success">
                            <strong>success!! </strong>Product Insert successfully!
                            </div>');
                        return Redirect::to('add-product');
    			}


    		}



    }


public function all_product(){


    $all_product=DB::table('tbl_products')
    ->join('tbl_categorys','tbl_products.category_id','=','tbl_categorys.category_id')
->join('tbl_manufactures','tbl_products.manufacture_id','=','tbl_manufactures.manufacture_id')
->select('tbl_products.*','tbl_categorys.category_name','tbl_manufactures.manufacture_name')

        ->get();


            $manage=view('admin.product.all_product')
            ->with('all_product',$all_product);
            return view('admin_layout')
            ->with('admin.product.all_product',$manage);



}


public function delete_product($product_id){

    $pro=DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->first();
            $image=$pro->product_image;

            // return response()->json($image);



        DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->delete();
            unlink($image);
            
            Session::put('msg','<div class="alert alert-danger">
  <strong>Delete! </strong>Data insert successfully !!
</div>');
            return Redirect::to('all-product');
    
}

public function unactive_product($product_id){

        DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->update(['publication_status'=>0]);

        return Redirect::to('all-product');

}

public function active_product($product_id){

         DB::table('tbl_products')
            ->where('product_id',$product_id)
            ->update(['publication_status'=>1]);

        return Redirect::to('all-product');


}


public function edit_product($product_id){

    $category=DB::table('tbl_categorys')->get();
    $manufacture=DB::table('tbl_manufactures')->get();

    $edit_product=DB::table('tbl_products')
        ->where('product_id',$product_id)
        ->join('tbl_categorys','tbl_products.category_id','=','tbl_categorys.category_id')
        ->join('tbl_manufactures','tbl_products.manufacture_id','=','tbl_manufactures.manufacture_id')
        ->select('tbl_products.*','tbl_categorys.category_name','tbl_manufactures.manufacture_name')
            ->first();


            $manage=view('admin.product.edit_product')
                ->with('edit_product',$edit_product);
            return view('admin_layout')
                ->with('admin.product.edit_product',$manage)
                ->with(compact('category','edit_product','manufacture'));

                return Redirect('all-product');



}

public function update_product(Request $request,$product_id){

    $data=array();

            $data['product_name']=$request->product_name;
            $data['category_id']=$request->category_id;
            $data['manufacture_id']=$request->manufacture_id;
            $data['product_description']=$request->product_description;
            $data['product_weight']=[0][0];
            $data['product_price']=$request->product_price;
           

            $image=$request->file('product_image');

            if($image){

                $image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                $full_name=$image_name.'.'.$ext;
                $path='images/';
                $img_url=$path.$full_name;
                $success=$image->move($path,$full_name);

                if($success){
                    $data['product_image']=$img_url;
                    DB::table('tbl_products')

                    ->where('product_id',$product_id)
                        ->update($data);
                        
                    Session::put('msg','<div class="alert alert-success">
                            <strong>success!! </strong>Product Insert successfully!
                            </div>');
                        return Redirect::to('add-product');
                }


            }



}


}
