@extends('layout')
@section('title','payment')
@section('content')

   
<div class="row mb-5">
          <div class="col-md-9 order-2">

           
            <div class="row mb-5">

            

            


            <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">

<?php

	$contents=Cart::content();
	// echo "<pre>";
	// print_r($contents);
	// echo "</pre>";
	// exit();

 ?>

              <table class="table table-bordered">


                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Name</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <!-- <th class="product-remove">Action</th> -->
                  </tr>
                </thead>
              

                	<?php
  	foreach ($contents as $v_contents ) {
  		
  

  	?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="{{URL::to($v_contents->options->image)}}" alt="Image" class="img-fluid">
                    </td>
                    <td>{{$v_contents->name}}</td>
                    <td>{{$v_contents->price}}</td>
                    <td>{{$v_contents->qty}}</td>
                    

                <!--  <td class="cart_description"> 
                  		
                  			<form action="{{('/update-cart/'.$v_contents->rowId)}}" method="post" >
                  				{{ csrf_field()}}

                  				<input class="cart_quantity_input" type="text" name="qty" value="{{($v_contents->qty)}}" autocomplete="off" size="3">

                  				<input type="hidden" name="rowId" value="{{$v_contents->rowId}}">
                  				<input type="submit" name="submit" value="Update">
                  			</form>
                        
                  </td> -->


                    <td>{{$v_contents->total}}Tk</td>

                    <!-- <td><a href="{{('/delete-cart/'.$v_contents->rowId)}}" class="btn btn-danger btn-sm">X</a></td>
                  </tr> -->


                  <?php } ?>
                 
               




              </table>



            </div>
          </form>


          <div class="row">
       
          <div class="col-md-12">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 border-bottom mb-5">
                    <h3 align="center">Totals</h3>
                  </div>
                </div>
             


                

               
                <hr>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">{{Cart::total()}} Tk</strong>
                  </div>
                </div>

               <!--  <div class="row">
                  <div class="col-md-3">
                    <button class="btn btn-danger center"><a href="{{URL::to('/login-check')}}"><h6>Checkout</h6></button>
                  </div>
                </div> -->
              </div>
            </div>
          </div>


             <div class="col-md-6">
             	<br>
             	

            <div class="row mb-5" align="">

              <div class="headingWrap">
								
						</div>

						<form action="{{url('/order-place')}}" method="post">
							{{ csrf_field() }}
						<h4 class="headingTop text-center">Select Your Payment</h4><br>	
								
						<input type="radio" name="payment_method" value="handcash"> Hand Cash <br/> 
						
						<input type="radio" name="payment_method" value="bkash"> B-kash <br/> 
					
						<input type="radio" name="payment_method" value="cart"> Debit Cart<br/> 
						<br>
						
						

						<input type="submit" name="" value="Done">
					</form>

          


            
            </div>
         
          </div>


        </div>
        </div>






              


            

            


            </div>
          
          </div>


    

@endsection