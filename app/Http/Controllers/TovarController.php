<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;


class TovarController extends Controller
{
   public function getAll(){
   	$cats = Category::all();
   	return view('categories', compact('cats'));
   }
}
