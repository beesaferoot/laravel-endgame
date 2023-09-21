<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //here, we create a coonsume method to make an HTTP request to the API and display the data we want
    public function consume(){

        $response = Http::get('https://cryptocointracker.com/api/nomics/all-endpoints');
        $products = $response->json();

        return view('products', ['products' => $products]);

    }
}
