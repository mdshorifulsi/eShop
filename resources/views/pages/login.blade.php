@extends('layout')
@section('title','login')
@section('content')


<div class="row mb-5">
          <div class="col-md-9 order-2">

           
            <div class="row mb-5">

            

            


              
              <div class="col-sm-6" data-aos="fade-up">
               
                  
    
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    

<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">

				<form action="{{url('/customer-login')}}" method="post">

					{{csrf_field()}}

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="customer_email" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="customer_password" class="form-control input_pass" value="" placeholder="password">
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="submit" class="btn login_btn">Log in</button>
				   </div>
				   
					</form>
				</div>
		
				
			</div>
		</div>
	</div>
</body>
</html>



              </div>






                 <div class="col-sm-6" data-aos="fade-up">
               
                    
          
          <!DOCTYPE html>
<html>
    

<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">



					<form action="{{url('/customer-registration')}}" method="post">
						{{ csrf_field()}}
						


						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="customer_name" class="form-control input_user" value="" placeholder="FullName">
						</div>

						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="customer_email" class="form-control input_user" value="" placeholder="mail">
						</div>

						

						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="customer_password" class="form-control input_pass" value="" placeholder="password">
						</div>


						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="customer_Contract" class="form-control input_user" value="" placeholder="Contract Number">
						</div>

						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="submit" class="btn login_btn">Sign Up</button>
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