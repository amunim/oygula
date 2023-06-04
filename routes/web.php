<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/','mainController@index')->name("index");
Route::post('/message','mainController@message')->name("message");
Route::post('/save-job-request','mainController@save_request_human')->name("save.request.human");

Route::get('/posts','mainController@posts')->name("posts");
Route::get('/conditions','mainController@conditions')->name("conditions");
Route::get('/policy','mainController@policy')->name("policy");
Route::get('/posts/{title}','mainController@post_details')->name("post.details");
Route::get('/contact-us','mainController@contact')->name("contact");
Route::get('/our-business','mainController@works')->name("works");
Route::get('/our-business/{slug}','mainController@work_details')->name("work.details");

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/','adminController@main');


     /*********************mosts***************/
     Route::get("/addmost","adminController@addmost")->name("addmost");
     Route::post("/savemost","adminController@savemost")->name("savemost");
     Route::put("/updatemost/{id}","adminController@updatemost")->name("updatemost");
     Route::delete("/deletemost/{id}","adminController@deletemost")->name("deletemost");
     /*********************mosts***************/

     /*********************category***************/
     Route::get("/addcategory","adminController@addcategory")->name("addcategory");
     Route::post("/savecategory","adminController@savecategory")->name("savecategory");
     Route::put("/updatecategory/{id}","adminController@updatecategory")->name("updatecategory");
     Route::delete("/deletecategory/{id}","adminController@deletecategory")->name("deletecategory");
     /*********************category***************/


        /**************post************/
    Route::get('/add-post','adminController@addpost')->name("addpost");
    Route::post('/save-post','adminController@savepost')->name("savepost");
    Route::get('/edit-post/{id}','adminController@editpost')->name("editpost");
    Route::put('/update-post/{id}','adminController@updatepost')->name("updatepost");
    Route::delete('/delete-post/{id}','adminController@deletepost')->name("deletepost");
    /**************post************/

    /**************work************/
    Route::get('/add-work','adminController@addwork')->name("addwork");
    Route::post('/save-work','adminController@savework')->name("savework");
    Route::get('/edit-work/{id}','adminController@editwork')->name("editwork");
    Route::put('/update-work/{id}','adminController@updatework')->name("updatework");
    Route::delete('/delete-work/{id}','adminController@deletework')->name("deletework");
    /**************work************/


       /**************contacts************/
       Route::get('/contacts','adminController@contacts')->name("contacts");
       Route::post('/save-item','itemController@saveitem')->name("saveitem");
       Route::get('/edit-item/{id}','adminController@edititem')->name("edititem");
       Route::put('/update-item/{id}','itemController@updateitem')->name("updateitem");
       Route::delete('/delete-item/{id}','adminController@deleteitem')->name("deleteitem");
       /**************contacts************/

          /**************contacts************/
          Route::get('/text-condictions','adminController@textc')->name("textc");
          Route::get('/text-policy','adminController@textp')->name("textp");
          Route::put('/text-conditions-update','adminController@textc_update')->name("textc.update");
          Route::put('/text-policy-update','adminController@textp_update')->name("textp.update");
         
          /**************contacts************/

});