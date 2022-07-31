<?php



//Frontend route

Route::get('/','HomeController@index');


// show category wise product route............

Route::get('/show-category/{category_id}','HomeController@show_category');


// show manufacture wise product route............

Route::get('/show-manufacture/{manufacture_id}','HomeController@show_manufacture');


// view product.......................................

Route::get('/view-product/{product_id}','HomeController@view_product');


//cart Route.............
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-cart/{rowId}','CartController@delete_cart');


// Route::post('/update-cart/{rowId}','CartController@update_cart');






// checkout route...............
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer-registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');

//customer login logout............................

Route::post('/customer-login','CheckoutController@customer_login');
Route::get('/customer-logout','CheckoutController@customer_logout');



//payment route.....................................

Route::get('/payment','CheckoutController@payment');

Route::post('order-place','CheckoutController@order_place');



//manage-order..........

Route::get('/manage-order','OrderController@manage_order');






//Backend Route


Route::get('/logout','SuperAdminController@logout');
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/admin-dashboard','AdminController@admin_dashboard');



//category route

Route::get('/add-category','CategoryController@index');
Route::post('/save-category','CategoryController@save_category');
Route::get('/all-category','CategoryController@all_category');
Route::get('/delete-category/{category_id}','CategoryController@delete_category');
Route::get('/unactive-category/{category_id}','CategoryController@unactive_category');
Route::get('/active-category/{category_id}','CategoryController@active_category');
Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::post('/update-category/{category_id}','CategoryController@update_category');





//manufacture route
Route::get('/add-manufacture','manufactureController@index');
Route::post('/save-manufacture','manufactureController@save_manufacture');
Route::get('/all-manufacture','manufactureController@all_manufacture');
Route::get('/delete-manufacture/{manufacture_id}','manufactureController@delete_manufacture');
Route::get('/unactive-manufacture/{manufacture_id}','manufactureController@unactive_manufacture');
Route::get('/active-manufacture/{manufacture_id}','manufactureController@active_manufacture');
Route::get('/edit-manufacture/{manufacture_id}','manufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}','manufactureController@update_manufacture');


//product route...................

Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::post('/update-product/{product_id}','ProductController@update_product');


