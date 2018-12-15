<?php

namespace FaheemLaravel\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index()
    {
    	return view('welcome');
    }
    
    public function about()
    {
    	return view('about');
    }
    
}
