@extends('layout')
@section('title','product Details')
@section('content')
   
<div class="row mb-5">
          <div class="col-md-9 order-2">

           
            <div class="row mb-5">

            

            


              
              <div class="col-sm-6" data-aos="fade-up">
               
                  <figure class="block-4-image">
                    <a href=""><img src="{{URL::to($view_product->product_image)}}" alt="Image placeholder"  class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href=""></a></h3>
                    <!-- <p class="mb-0">Finding perfect products</p> -->
                    <p class="text-primary font-weight-bold"></p>
                   
                   
                  
                </div>
              </div>






                 <div class="col-sm-6" data-aos="fade-up">
               
                    
          
            <h2 class="text-black">{{$view_product->product_name}}</h2>
            <p>{{$view_product->product_description}}
            <p><strong class="text-primary h4">Tk.{{$view_product->product_price}}</strong></p>


            <form action="{{url('/add-to-cart')}}" method="post">
              {{ csrf_field() }}
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
             <!--  <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div> -->
              
              <input name="qty" type="number" value="1">
                    <input type="hidden" name="product_id" value="{{$view_product->product_id}}">

             <!--  <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div> -->

            </div>

            </div>
            <button type="submit" class="buy-now btn btn-sm btn-primary"><i class="fa fa-shopping-cart"></i> add to cart</button>

          
            </form>


            

          </div>
              
              


            

            


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
              
              </div>
            </div>
          </div>


    
@endsection