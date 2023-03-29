<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public  function index()
   {
    return view('pages.index');
   }
   public  function about()
   {
       $title = "About us page";
      return view('Pages.about');
   // return $title;
   }
}
