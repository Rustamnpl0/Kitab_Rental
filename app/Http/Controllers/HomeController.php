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
        return view('home.allBooks');
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
    public function adminUser(){
        return view('admin.adminUser');
    } 
    public function adminUserDetails(){
        return view('admin.adminUserDetails');
    } 
    public function adminAddUser(){
        return view('admin.adminAddUser');
    } 
    // public function adminAddBooks(Request $request){
    //     $books = new Books();
    //     if ($request->hasfile('image'))
    //     {
    //         $file =$request->file('image');
    //         $ext =$file->getClientOriginalExtension();
    //         $filename=time().'.'.$ext;
    //         $file->move('images/bg'.$filename);
    //         $books->image =$filename;

    //     }
    //     $books->name=$request->input('booksName');
    //     $books->name=$request->input('genre');
    //     $books->name=$request->input('author');
    //     $books->name=$request->input('date_of_publication');
    //     $books->name=$request->input('description');
    //     $books->name=$request->input('amount');
    //     $books->name=$request->input('isAvailable')==TRUE?'1':'0';
    //     $books->save();
    //     return redirect('/adminAddBooks')->with('status','books added sucessfully');

    // } 
  



}




