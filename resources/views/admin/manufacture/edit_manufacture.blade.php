@extends('admin_layout')
@section('title','edit Manufacture')
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
                           <h4>Edit Manufacture</h4> 
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
 

                                     <form action="{{url('/update-manufacture',$edit_manufacture->manufacture_id)}}"
                                      method="post" role="form" enctype="multipart/form-data">
                                     	{{ csrf_field()}}
                                       
                                        <div class="form-group">
                                            <label>Manufacture Name</label>
                                            <input type="text" name="manufacture_name" value="{{$edit_manufacture->manufacture_name}}" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Manufacture Description</label>
                                            <textarea class="form-control" rows="3" name="manufacture_description">{{$edit_manufacture->manufacture_description}}</textarea>

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