
@extends('admin_layout')
@section('title','add category')
@section('admin_content')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><h4>All Category</h4></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       <!-- <a class="btn btn-info" href="#">Add User</a> -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th> 
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                   
                             @foreach($all_category as $v_category)
                         
                                       
                                    <tr class="odd gradeX">
                                        <td>{{$v_category->category_id}}</td>
                                        <td>{{$v_category->category_name}}</td>
                                        <td>{{$v_category->category_description}}</td>
                                       <!--  <td class=""><img src=""style="width:200px;height:100px;"></td> -->
                                        <td>
                                        @if($v_category->publication_status==1)
                                        <span class="label label-success">Active</span>
                                       @else
                                        <span class="label label-danger">Unactive</span>
                                    @endif
                                        </td>
                                           

                            <td>
                           @if($v_category->publication_status==1)
                            <a class="btn btn-success" href="{{URL::to('/unactive-category/'.$v_category->category_id)}}">
                                <i class="glyphicon glyphicon-thumbs-down"></i>
                             
                            </a>
                           
                              @else
                        
                            <a class="btn btn-danger" href="{{URL::to('/active-category/'.$v_category->category_id)}}">
                                <i class="glyphicon glyphicon-thumbs-up"></i>
                             
                            </a>
                            @endif

           




            <a class="btn btn-warning" href="{{URL::to('/edit-category/'.$v_category->category_id)}}">
                <i class="glyphicon glyphicon-edit icon-white"></i>
             
            </a>

            <a class="btn btn-danger" href="{{URL::to('/delete-category/'.$v_category->category_id)}}">
                                                
                <i class="glyphicon glyphicon-trash icon-white"></i>
               

            </a>

</td>
                                       

                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            

    @endsection