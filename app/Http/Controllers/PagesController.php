<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function getHomePage()
    {
    return view('home');
    }


public function getAboutPage()
  {
  return view('about');

} //end of get home page


public function getContactPage()
  {
  return view('contact');

} //end of get contact page
}//end og class PagesController
