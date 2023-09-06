<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
   public function register(Request $request)
   {
     return view("admin.auth.registrion");
   }
   public function login(Request $request)
   {
     return view("admin.auth.login");
   }
   public function post_register(Request $request)
   {
       
   }
   public function post_login(Request $request)
   {
    
   }
}
