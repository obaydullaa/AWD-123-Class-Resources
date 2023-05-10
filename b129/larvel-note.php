<?php 

// php Artisant command list
//=========================================
// 1. php artisan create-project laravel/laravel my-pp
// 2. php artisan make:controller StudentController
// 2. php artisan make:controller StaffConroller --resource  // create all features





//Laravel part 03 (  MVC )
//================================

// Model: This component represents the data and the business logic of the application. It is responsible for handling database operations, data validation, and any other business logic related to the data.

// View: This component represents the user interface of the application. It is responsible for rendering the HTML, CSS, and JavaScript that is sent to the user's browser.

// Controller: This component acts as an intermediary between the Model and the View. It is responsible for handling user input, making calls to the Model to fetch or manipulate data, and passing that data to the View to render the appropriate response.


//Laravel part 04 ( project structure )
//=================================================

// Discus laravel project structure

// simple route create 

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // // single route
    // Route::get('/hello', function () {
    //     return view('hello.hello');
    // });


// Laravel part 06 ( prefix route _ group route )
//=================================================

// Route::prefix('student')->group(function(){

//     Route::get("name", function() {
//         echo "My name is Obaydulla";
//     });
//     Route::get("create", function() {
//         echo "Create a student.";
//     });
//     Route::get("roll", function() {
//         echo "My roll no is 05.";
//     });
    
// });


// Route::get()      //  When get some data
// Route::post()      // when data push data pase from data
// Route::put()      //   when data update or eddit we need put/patch
// Route::patch()      // when data update or eddit we need put/patch
// Route::delete()      //  when delte data
// Route::resource()      //  all rout in here

// Name Route
// Route::get('all', function(){
//     echo "All Product is here";
// })-> name('all product');


//All route
//========================

// Route::get('/', function () {
//     return view('welcome');
// });

// // single route
// Route::get('/hello', function () {
//     return view('hello.hello');
// });

// Route::prefix('student')->group(function(){

//     Route::get("name", function() {
//         echo "My name is Obaydulla";
//     });
//     Route::get("create", function() {
//         echo "Create a student.";
//     });
//     Route::get("roll", function() {
//         echo "My roll no is 05.";
//     });

// });

// Route::prefix('product')->group(function(){
//     Route::get('item-name', function(){
//         echo "Item name is fashions";
//     });
//     Route::get('quantity', function(){
//         echo 50;
//     });

//     Route::get('all', function(){
//         echo "All Product is here";
//     })-> name('all product');
// });



// create controller and resource controller


// Laravel part 09 ( Route with controller  )
//=================================================

// Route::get('student', 'App\Http\Controllers\studentController@ageCal');
 
// Route::namespace('App\Http\Controllers') -> prefix('b129') -> group(function() {
//     Route::get('student/{name}/{year}', 'studentController@ageCal');
// });




