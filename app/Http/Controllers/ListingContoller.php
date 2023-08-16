<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingContoller extends Controller
{
    // To Show All The Listings
    public function index() {
        return view('listings.index', [
            // 'listings' => Listing::latest()->get()
            // 'listings' => Listing::all()
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // To Show A Single Listing
    public function show(Listing $listing) {
        return view('listings.show', ['listing' => $listing]);
    }
}
