@extends('layout')
@section('title','Manufacture by Product')
@section('content')


<div class="row mb-5">
          <div class="col-md-9 order-2">

           
            <div class="row mb-5">

            

            


               <?php 
              
                  foreach($product_show_manufacture as $v_product_show){

?>

              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="{{URL::to('/view-product/'.$v_product_show->product_id)}}"><img src="{{URL::to($v_product_show->product_image)}}" alt="Image placeholder"  class="img-fluid" style="width: 150px; height: 150px"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="{{URL::to('/view-product/'.$v_product_show->product_id)}}">{{$v_product_show->product_name}}</a></h3>
                    <!-- <p class="mb-0">Finding perfect products</p> -->
                    <p class="text-primary font-weight-bold">TK.{{$v_product_show->product_price}}</p>
                    <h5><a href="{{URL::to('/view-product/'.$v_product_show->product_id)}}" title="add to cart"> Add to Cart </a></h5>
                    <a href="{{URL::to('/view-product/'.$v_product_show->product_id)}}">View product</a>
                  </div>
                </div>
              </div>
              <?php } ?>


            

            


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
              
              </div>
            </div>
          </div>


@endsection


