<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home_controller;

use App\Http\Controllers\Auth\AdminLoginController;

use App\Http\Controllers\Auth\Admin_controller;



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

Route::get('/',[home_controller::class , 'index']);

Route::get('/about_us',[home_controller::class , 'about_us']);

Route::get('/service',[home_controller::class , 'service']);

Route::get('/package',[home_controller::class , 'package']);

Route::get('/gallary',[home_controller::class , 'gallary']);

Route::get('/contact',[home_controller::class , 'contact']);

Route::get('/package_detail/{id}',[home_controller::class , 'package_detail']);

Route::post('/inquiry',[home_controller::class , 'inquiry']);

Route::post('/find_tour',[home_controller::class , 'find_tour']);







Route::group(['prefix'=>'admin'],function(){

    Route::get('/admin_login',[AdminLoginController::class,'admin_login']);

    Route::get('/logout',[AdminLoginController::class,'logout']);

    Route::post('/authenticate',[AdminLoginController::class,'authenticate']);

    Route::get('/home',[Admin_controller::class,'home']);

    Route::get('/register',[AdminLoginController::class,'register']);

    Route::post('/register_data',[AdminLoginController::class,'register_data']);


    Route::get('/forget_password',[AdminLoginController::class,'forget_password']);

    Route::post('/send_mail',[AdminLoginController::class,'send_mail']);

    Route::get('/confirm_otp/{id}',[AdminLoginController::class,'confirm_otp']);

    Route::post('/verify_otp/{id}',[AdminLoginController::class,'verify_otp']);

    Route::get('/reset_password/{id}',[AdminLoginController::class,'reset_password']);

    Route::post('/store_password/{id}',[AdminLoginController::class,'store_password']);

    Route::get('/edit_profile',[Admin_controller::class,'edit_profile']);

    Route::post('/store_update_profile/{id}',[Admin_controller::class,'store_update_profile']);

    Route::post('/store_change_password/{id}',[Admin_controller::class,'store_change_password']);



    Route::get('/banner',[Admin_controller::class,'banner']);

    Route::get('/add_banner_info',[Admin_controller::class,'add_banner_info']);

    Route::post('/store_add_banner_info',[Admin_controller::class,'store_add_banner_info']);

    Route::get('/delete_banner_data/{id}',[Admin_controller::class,'delete_banner_data']);
    
    Route::get('/update_banner_data/{id}',[Admin_controller::class,'update_banner_data']);

    Route::post('/store_update_banner_data/{id}',[Admin_controller::class,'store_update_banner_data']);




    Route::get('/about',[Admin_controller::class,'about']);

    Route::get('/add_about_info',[Admin_controller::class,'add_about_info']);

    Route::post('/store_add_about_info',[Admin_controller::class,'store_add_about_info']);

    Route::get('/delete_about_data/{id}',[Admin_controller::class,'delete_about_data']);
    
    Route::get('/update_about_data/{id}',[Admin_controller::class,'update_about_data']);

    Route::post('/store_update_about_data/{id}',[Admin_controller::class,'store_update_about_data']);



    Route::get('/service',[Admin_controller::class,'service']);

    Route::get('/add_service_info',[Admin_controller::class,'add_service_info']);

    Route::post('/store_add_service_info',[Admin_controller::class,'store_add_service_info']);

    Route::get('/delete_service_data/{id}',[Admin_controller::class,'delete_service_data']);
    
    Route::get('/update_service_data/{id}',[Admin_controller::class,'update_service_data']);

    Route::post('/store_update_service_data/{id}',[Admin_controller::class,'store_update_service_data']);


    Route::get('/update_service_description_data/{id}',[Admin_controller::class,'update_service_description_data']);

    Route::post('/store_update_service_description_data/{id}',[Admin_controller::class,'store_update_service_description_data']);




    Route::get('/choose_image',[Admin_controller::class,'choose_image']);

    Route::get('/add_choose_image_info',[Admin_controller::class,'add_choose_image_info']);

    Route::post('/store_add_choose_image_info',[Admin_controller::class,'store_add_choose_image_info']);

    Route::get('/delete_choose_image_data/{id}',[Admin_controller::class,'delete_choose_image_data']);
    
    Route::get('/update_choose_image_data/{id}',[Admin_controller::class,'update_choose_image_data']);

    Route::post('/store_update_choose_image_data/{id}',[Admin_controller::class,'store_update_choose_image_data']);




    Route::get('/choose',[Admin_controller::class,'choose']);

    Route::get('/add_choose_info',[Admin_controller::class,'add_choose_info']);

    Route::post('/store_add_choose_info',[Admin_controller::class,'store_add_choose_info']);

    Route::get('/delete_choose_data/{id}',[Admin_controller::class,'delete_choose_data']);
    
    Route::get('/update_choose_data/{id}',[Admin_controller::class,'update_choose_data']);

    Route::post('/store_update_choose_data/{id}',[Admin_controller::class,'store_update_choose_data']);



    Route::get('/reviews',[Admin_controller::class,'reviews']);

    Route::get('/add_reviews_info',[Admin_controller::class,'add_reviews_info']);

    Route::post('/store_add_reviews_info',[Admin_controller::class,'store_add_reviews_info']);

    Route::get('/delete_reviews_data/{id}',[Admin_controller::class,'delete_reviews_data']);
    
    Route::get('/update_reviews_data/{id}',[Admin_controller::class,'update_reviews_data']);

    Route::post('/store_update_reviews_data/{id}',[Admin_controller::class,'store_update_reviews_data']);



    Route::get('/package',[Admin_controller::class,'package']);

    Route::get('/add_package_info',[Admin_controller::class,'add_package_info']);

    Route::post('/store_add_package_info',[Admin_controller::class,'store_add_package_info']);

    Route::get('/delete_package_data/{id}',[Admin_controller::class,'delete_package_data']);
    
    Route::get('/update_package_data/{id}',[Admin_controller::class,'update_package_data']);

    Route::post('/store_update_package_data/{id}',[Admin_controller::class,'store_update_package_data']);

    Route::get('/delete_package_image/{id}',[Admin_controller::class,'delete_package_image']);
    
    Route::get('/update_package_image/{id}',[Admin_controller::class,'update_package_image']);

    Route::post('/store_update_package_image/{id}',[Admin_controller::class,'store_update_package_image']);



    Route::get('/tour_type',[Admin_controller::class,'tour_type']);

    Route::get('/add_tour_type_info',[Admin_controller::class,'add_tour_type_info']);

    Route::post('/store_add_tour_type_info',[Admin_controller::class,'store_add_tour_type_info']);

    Route::get('/delete_tour_type_data/{id}',[Admin_controller::class,'delete_tour_type_data']);
    
    Route::get('/update_tour_type_data/{id}',[Admin_controller::class,'update_tour_type_data']);

    Route::post('/store_update_tour_type_data/{id}',[Admin_controller::class,'store_update_tour_type_data']);



    Route::get('/add_section',[Admin_controller::class,'add_section']);

    Route::get('/remove_section',[Admin_controller::class,'remove_section']);



    Route::get('/aboutus_about',[Admin_controller::class,'aboutus_about']);

    Route::get('/add_aboutus_about_info',[Admin_controller::class,'add_aboutus_about_info']);

    Route::post('/store_add_aboutus_about_info',[Admin_controller::class,'store_add_aboutus_about_info']);

    Route::get('/delete_aboutus_about_data/{id}',[Admin_controller::class,'delete_aboutus_about_data']);
    
    Route::get('/update_aboutus_about_data/{id}',[Admin_controller::class,'update_aboutus_about_data']);

    Route::post('/store_update_aboutus_about_data/{id}',[Admin_controller::class,'store_update_aboutus_about_data']);



    Route::get('/aboutus_video',[Admin_controller::class,'aboutus_video']);

    Route::get('/add_aboutus_video_info',[Admin_controller::class,'add_aboutus_video_info']);

    Route::post('/store_add_aboutus_video_info',[Admin_controller::class,'store_add_aboutus_video_info']);

    Route::get('/delete_aboutus_video_data/{id}',[Admin_controller::class,'delete_aboutus_video_data']);
    
    Route::get('/update_aboutus_video_data/{id}',[Admin_controller::class,'update_aboutus_video_data']);

    Route::post('/store_update_aboutus_video_data/{id}',[Admin_controller::class,'store_update_aboutus_video_data']);



    Route::get('/aboutus_detail',[Admin_controller::class,'aboutus_detail']);

    Route::get('/add_aboutus_detail_info',[Admin_controller::class,'add_aboutus_detail_info']);

    Route::post('/store_add_aboutus_detail_info',[Admin_controller::class,'store_add_aboutus_detail_info']);

    Route::get('/delete_aboutus_detail_data/{id}',[Admin_controller::class,'delete_aboutus_detail_data']);
    
    Route::get('/update_aboutus_detail_data/{id}',[Admin_controller::class,'update_aboutus_detail_data']);

    Route::post('/store_update_aboutus_detail_data/{id}',[Admin_controller::class,'store_update_aboutus_detail_data']);



    Route::get('/aboutus_question',[Admin_controller::class,'aboutus_question']);

    Route::get('/add_aboutus_question_info',[Admin_controller::class,'add_aboutus_question_info']);

    Route::post('/store_add_aboutus_question_info',[Admin_controller::class,'store_add_aboutus_question_info']);

    Route::get('/delete_aboutus_question_data/{id}',[Admin_controller::class,'delete_aboutus_question_data']);
    
    Route::get('/update_aboutus_question_data/{id}',[Admin_controller::class,'update_aboutus_question_data']);

    Route::post('/store_update_aboutus_question_data/{id}',[Admin_controller::class,'store_update_aboutus_question_data']);



    Route::get('/gallary',[Admin_controller::class,'gallary']);

    Route::get('/add_gallary_info',[Admin_controller::class,'add_gallary_info']);

    Route::post('/store_add_gallary_info',[Admin_controller::class,'store_add_gallary_info']);

    Route::get('/delete_gallary_data/{id}',[Admin_controller::class,'delete_gallary_data']);
    
    Route::get('/update_gallary_data/{id}',[Admin_controller::class,'update_gallary_data']);

    Route::post('/store_update_gallary_data/{id}',[Admin_controller::class,'store_update_gallary_data']);



    Route::get('/footer_description',[Admin_controller::class,'footer_description']);

    Route::get('/update_footer_description_data/{id}',[Admin_controller::class,'update_footer_description_data']);

    Route::post('/store_update_footer_description_data/{id}',[Admin_controller::class,'store_update_footer_description_data']);


    Route::get('/customer_response',[Admin_controller::class,'customer_response']);

    Route::get('/package_inquiry',[Admin_controller::class,'package_inquiry']);

    Route::get('/page_banner',[Admin_controller::class,'page_banner']);

    Route::get('/update_page_banner_data/{id}',[Admin_controller::class,'update_page_banner_data']);

    Route::post('/store_update_page_banner_data/{id}',[Admin_controller::class,'store_update_page_banner_data']);

    Route::get('/delete_selected_data',[Admin_controller::class,'delete_selected_data']);

});

