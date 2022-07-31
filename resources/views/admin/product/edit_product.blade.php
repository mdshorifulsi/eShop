@extends('admin_layout')
@section('title','Edit Product')
@section('admin_content')
<div id="page-wrapper">
            <div class="row">
               
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4>Edit Product</h4> 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

                                	<p class="alert-success"><?php
							$msg=Session::get('msg');
						if($msg){
							echo $msg;
							Session::put('msg',null);
						}else{

						}
						?>
						</p>
 

                                     <form action="{{url('/update-product',$edit_product->product_id)}}" method="post" role="form" enctype="multipart/form-data">
                                     	{{ csrf_field()}}

                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" name="product_name" value="{{$edit_product->product_name}}" class="form-control">
                                        </div>



                                         <div class="form-group">
                                <label>product Category</label>
                                
                                  <select class="form-control" name="category_id" value={{$edit_product->category_name}}>
                                    <option>Select Category</option>
                                

                                                            <?php
                                    $all_published_category=DB::table('tbl_categorys')
                                        ->where('publication_status',1)
                                        ->get();

                                        foreach($all_published_category as $v_category ){

                                    ?>
                                    <option value="{{$v_category->category_id}}"
                                        <?php

                                        if($v_category->category_id==$edit_product->category_id)
                                            echo "selected";

                                        ?>

                                        >{{$v_category->category_name }}</option>
                                <?php } ?>
                                      
                                  </select>
                                </div>



                                 <div class="form-group">
                                <label>product Manufacture</label>
                                
                                  <select class="form-control" name="manufacture_id">
                                    <option>Select Manufacture</option>
                                

                                                            <?php
                                    $all_published_manufacture=DB::table('tbl_manufactures')
                                        ->where('publication_status',1)
                                        ->get();

                                        foreach($all_published_manufacture as $v_manufacture ){

                                    ?>
                                    <option value="{{$v_manufacture->manufacture_id}}"
                                        <?php
                                            if($v_manufacture->manufacture_id==$edit_product->manufacture_id)
                                                echo "selected";

                                        ?>

                                        >{{$v_manufacture->manufacture_name }}</option>
                                <?php } ?>
                                      
                                  </select>
                                </div>


                             


                              

                                        <div class="form-group">
                                            <label>Product Description</label>
                                            <textarea class="form-control" rows="3" name="product_description">{{$edit_product->product_description}}
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Product price</label>
                                            <input type="text" name="product_price" value="{{$edit_product->product_price}}" class="form-control">
                                        </div>

                                         <div class="form-group">
                                            <label>product Image</label>
                                            <input type="file" name="product_image">
                                            <img src="{{URL::to($edit_product->product_image)}}"style="width: 150px;height: 100px;">
                                            <input type="hidden" name="old_image" value="{{$edit_product->product_image}}">
                                        </div>


                               
                                        
                                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>


                                     


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>


@endsection