<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('frontend/https://fonts.googleapis.com/css?family=Mukta:300,400,700')}}"> 
    <link rel="stylesheet" href="{{asset('frontend/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="c{{asset('frontend/ss/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">


    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="{{URL::to('/')}}" class="js-logo-clone">eShop</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>

                <!--  <li><a href="#">profile <span class="icon icon-person"> </span></a></li>
                 -->

                  <!-- <li>Wishlist <a href="#"><span class="icon icon-heart-o"> </span></a></li>

                  <li> -->

                    <?php
                      $customer_id=Session::get('customer_id');
                      if($customer_id!==Null){?>

                    
                    <li><a href="{{URL::to('/customer-logout')}}">Logout <span class="icon icon-lock"> </span> </a></li>

                    <?php
                  } else{

                    ?>
      <li><a href="{{URL::to('/login-check')}}">login <span class="icon icon-lock"> </span> </a></li>

        <?php } ?>


                     <?php
                      $customer_id=Session::get('customer_id');
                      $shipping_id=Session::get('shipping_id');
                      // print_r($customer_id);
                      // print_r($shipping_id);
                      if($customer_id!=NULL && $shipping_id==NULL){?>

                        <li><a href="{{URL::to('/checkout')}}"><span class="icon icon-heart-o"></span>Checkout</a></li>
                        
                      <?php } if($customer_id!=NULL && $shipping_id !=NULL){?> 

                        <li><a href="{{URL::to('/payment')}}"><span class="icon icon-heart-o"></span>Checkout</a></li> 

                      <?php
                  } else{

                    ?>
                    <li><a href="{{URL::to('/login-check')}}"><span class="icon icon-heart-o"></span>Checkout</a></li>

                  <?php } ?>
                  
                     <a href="{{URL::to('/show-cart')}}" class="site-cart">Cart 
                      <span class="icon icon-shopping_cart"></span>
                    </a>

                  </li> 

                   


                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="icon-home">
              <a href="{{URL::to('/')}}">Home</a>
           
            </li>
            <li class="has-children">
              <a href="about.html">Stock</a>
              <ul class="dropdown">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li class="active"><a href="shop.html">Shop</a></li>
            <li><a href="#">Catalogue</a></li>
            <li><a href="#">New Arrivals</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>


    <div class="site-section">
      <div class="container">

        @yield('content')

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">
                <?php
                    $all_published_category=DB::table('tbl_categorys')
                        ->where('publication_status',1)
                        ->limit(8)
                        ->get();

                        foreach($all_published_category as $v_category ){

                                    ?>
                <a href="{{URL::to('/show-category/'.$v_category->category_id)}}" class="d-flex color-item align-items-center" >
                  <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">{{$v_category->category_name }}</span>
                </a>

             <?php } ?>


              </ul>
            </div>

            <div class="border p-4 rounded mb-4">


            

             

              <div class="mb-4">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">Brand</h3>
                <?php
                    $all_published_manufacture=DB::table('tbl_manufactures')
                        ->where('publication_status',1)
                        ->limit(8)
                        ->get();

                        foreach($all_published_manufacture as $v_manufacture ){

                                    ?>
                <a href="{{URL::to('/show-manufacture/'.$v_manufacture->manufacture_id)}}" class="d-flex color-item align-items-center" >
                  <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">{{$v_manufacture->manufacture_name }}</span>
                </a>
                <?php } ?>
              


              
              </div>

            </div>
          </div>
        </div>

        
      </div>
    </div>

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="{{asset('frontend/images/hero_1.jpg')}}" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Shoes</h3>
              <p>Promo from  nuary 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="{{asset('frontend//cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery-ui.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/js/aos.js')}}"></script>

  <script src="{{asset('frontend/js/main.js')}}"></script>
    
  </body>
</html>