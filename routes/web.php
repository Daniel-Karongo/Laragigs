<?php

// use Illuminate\Http\Request;

use App\Http\Controllers\ListingContoller;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/hello', function () {
//     return response('<h1>Hello World</h1>')
//         ->header('Content-Type', 'text/plain')
//         ->header('xyz', '123');
// });

// Route::get('/posts/{id}', function ($id) {
//     // For Debugging
//     dd($id);
//     return response('Post ' . $id);

//     // To Establish constraints
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     // dd($request);
//     return $request->name . ' - ' . $request-> city;
// });


// All Listings
Route::get('/', [ListingContoller::class, 'index']);

// Single Listing
// Route::get('/listings/{id}', function($id) {
//     $listing = Listing::find($id);
//     if($listing) {
//         return view('listing', ['listing' => $listing]);
//     } else {
//         abort('404');
//     }
// });


// Achieving the same functionality using eloquent Models
Route::get('/listings/{listing}', [ListingContoller::class, 'show']);


// Common Resource Routes:      Naming Conventions
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  