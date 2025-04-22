<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class HomepageController extends Controller
{
    //fungsi untuk menampilkan halaman homepage 
    public function index() 
    {  
        $title = 'Homepage'; 
        $products = Products::all();

        return view('web.homepage', ['title' => $title, 'products' => $products]); 
    } 

    public function product() 
    {
        $title = 'Product'; 
        return view('web.product', ['title' => $title]); 
    } 
 
}
