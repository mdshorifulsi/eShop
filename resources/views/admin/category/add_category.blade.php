@extends('admin_layout')
@section('title','add category')
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
                           <h4>Add Category</h4> 
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
                            
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                                     <form action="{{url('/save-category')}}" method="post" role="form" enctype="multipart/form-data">
                                     	{{ csrf_field()}}

                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input type="text" name="category_name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Category Description</label>
                                            <textarea class="form-control" rows="3" name="category_description"></textarea>
                                        </div>



                                         <!-- <div class="form-group">
                                            <label>Slider Image</label>
                                            <input type="file" name="image">
                                        </div> -->


                                       <div class="checkbox">
                        <label>
                            <input type="checkbox" name="publication_status" value="1">Publication Status
                        </label>
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