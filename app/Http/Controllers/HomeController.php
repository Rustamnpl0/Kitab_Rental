<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Books;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if (Auth::id())
        {
            $type=Auth()->user()->type;
            if ($type=='user')
            {
                return view('home.homepage');
            }

            else if ($type=='admin'){
                return view('admin.adminhome');
            }

            else{
                return redirect()->back();
            }
        }
    }
   
    
    public function homepage(){
        return view('home.homepage');
    } 

    public function aboutUs(){
        return view('home.aboutus');
    } 
    public function allBooks(){
        $books = Books::all();
        return view('home.allBooks',compact('books'));
    } 
    public function donate(){
        return view('home.donate');
    } 

    public function userProfile(){
        return view('home.userProfile');
    } 
    public function booksDetails(){
        return view('home.booksDetails');
    } 







    
// Admin controller

    public function adminBooks(){
        return view('admin.adminBooks');
    } 
    public function adminEditBooks(){
        return view('admin.adminEditBooks');
    } 
    public function adminUser(){
       $users =User::all();
       return view('admin.adminUser', compact('users'));
    } 
    public function adminUserDetails(){
        return view('admin.adminUserDetails');
    } 
    public function adminAddUser(){
        return view('admin.adminAddUser');
    } 
    
  



}




