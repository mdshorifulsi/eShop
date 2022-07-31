@extends('layout')
@section('title','checkout')
@section('content')


<div class="row mb-5">
          <div class="col-md-9 order-2">

           
            <div class="row mb-5">

            

            


              
   






                 <div class="col-sm-6" data-aos="fade-up">
               
                <h4 align="center">Shipping Details</h4>    
          
          <!DOCTYPE html>
<html>
    

<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<!-- <div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div> -->
				</div>
			
				
				<div class="d-flex justify-content-center form_container">



					<form action="{{url('/save-shipping-details')}}" method="post">
						{{ csrf_field()}}
						
					

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="shipping_Name" class="form-control input_user" value="" placeholder="Name">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="shipping_address" class="form-control input_user" value="" placeholder="Address">
						</div>

					

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="shipping_Contract" class="form-control input_user" value="" placeholder="Contract Number">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="shipping_email" class="form-control input_user" value="" placeholder="E-mail">
						</div>

					



						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="submit" class="btn login_btn">Done</button>
				   </div>

				   


					</form>
				</div>
		
				
			</div>
		</div>
	</div>
</body>
</html>


            

          </div>
              
              


            

            


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
              
              </div>
            </div>
          </div>


@endsection