<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', 'HomeController@index')->name('home');
 Route::get('/contact', 'HomeController@contact_page')->name('contact');
 Route::get('/about', 'HomeController@about_page')->name('about');
 Route::get('/constitutions', 'HomeController@constitutions_page')->name('constitutions');
 Route::get('/services', 'HomeController@services_page')->name('services');
 Route::get('/service-details', 'HomeController@service_details_page')->name('service.details');
 Route::get('/gallery', 'HomeController@gallery_page')->name('gallery');
 Route::get('/blog', 'HomeController@blog_page')->name('blog');
 Route::get('/blog-details', 'HomeController@blog_details_page')->name('blog.details');
 Route::get('/donate', 'HomeController@donate_page')->name('donate');
 Route::get('/member-list', 'HomeController@member_list_page')->name('member.list');
 Route::get('/member-list1', 'HomeController@member_list_page1')->name('member.list1');
 Route::get('/doctor', 'HomeController@doctor_page')->name('doctor');
 Route::get('/doctor-details', 'HomeController@doctor_details_page')->name('doctor.details');
 Route::get('/staff', 'HomeController@staff_page')->name('staff');
 Route::post('/appoinment', 'HomeController@appoinment')->name('appoinment');
 Route::get('/carrer', 'HomeController@carrer')->name('carrer');
 Route::get('/membership-form', 'HomeController@membershipForm')->name('membership.form');


//Backend Route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    // Route::get('profile','DashboardController@profile')->name('profile');
    // Route::get('change-password','DashboardController@change_password')->name('change_password');
    // Route::post('change-password/update','DashboardController@change_password_update')->name('change_password.update');
    // Route::get('profile-edit/{id}','DashboardController@edit')->name('edit');
    // Route::post('user-update/{id}','DashboardController@update')->name('profile.update');
    // Route::post('get-upazila', 'DashboardController@get_upazila_list')->name('upazila');

     Route::resource('department','DepartmentController');
     Route::resource('degree','DegreeController');
     Route::resource('designation','DesignationController');
     Route::resource('specialist','SpecialistController');
     Route::resource('doctor','DoctorController');
     Route::resource('staff','StaffController');
     Route::resource('category','CategoryController');
     Route::resource('tag','TagController');
     Route::resource('post','PostController');
     Route::resource('gallery','GalleryController');
     Route::resource('slider','SliderController');
     Route::resource('service','ServiceController');
    // Route::post('get-subcategory', 'ProductController@get_subcategory_list')->name('subcategory');
    // Route::post('get-tag', 'ProductController@get_tag_list')->name('tag');
    // Route::get('product/restore/{id}','ProductController@product_restore')->name('product.restore');
    // Route::post('product/permanent-delete/{id}','ProductController@product_permanent_delete')->name('product.permanent.delete');
    // Route::resource('fontAwesome','FontAwesomeController');
    // Route::resource('service','ServiceController');
    // Route::resource('about','AboutController');
    // Route::resource('testimonial','TestimonialController');
    // Route::resource('client','ClientController');
    // Route::resource('whychooseus','WhyChooseUsController');
    // Route::resource('slider','SliderController');
    // Route::resource('coupon', 'CouponController');
    // Route::resource('sale', 'SaleController');
    // Route::get('sale/details/{id}','SaleController@order_details')->name('sale.details');
    // Route::post('/size/update', 'SaleController@size_update')->name('size_update');
    // Route::post('/order-confirm/{id}', 'SaleController@order_confirm')->name('order_confirm');
    // Route::post('/order-paid/{id}', 'SaleController@order_paid')->name('order_paid');
    // Route::get('/subscriber','SubscriberController@index')->name('subscriber');
    // Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');

});

Auth::routes();
