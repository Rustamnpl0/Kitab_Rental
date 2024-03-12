<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\reviews;
use App\Models\Books;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        if (Auth::id())
        {
            $type=Auth()->user()->type;
            if ($type=='user')
            {
                $books = Books::paginate(6);
                return view('home.homepage',compact('books'));
            }

            else if ($type=='admin'){
                return view('admin.adminhome');
            }

            else{
                return redirect()->back();
            }
        }
    }
   
    
    // public function homepage(){
    //     $books = Books::all();
    //     return view('home.homepage',compact('books'));
    // } 

    public function aboutUs(){
        return view('home.aboutus');
    } 
    public function allBooks(){
        $Books = Books::paginate(8);
        return view('home.allBooks',compact('Books'));
    } 
    public function donate(){
        return view('home.donate');
    } 
     public function review(){
        // $url = url('/addreview');
        $reviewstores = reviews::all();
        return view('home.reviewform',compact('reviewstores'));
     }
    public function addreview(Request $request)
    {
        // Validate the form data
        $request->validate([
            'Email' => 'required|email',
            'comment' => 'required',
            'rating' => 'required|numeric|min:0|max:5' // Assuming the rating is between 0 and 5
        ], [
            'Email.required' => 'Email is required.',
            'Email.email' => 'Invalid email format.',
            'comment.required' => 'Comment is required.',
            'rating.required' => 'Rating is required.',
            'rating.numeric' => 'Rating must be a number.',
            'rating.min' => 'Rating must be at least 0.',
            'rating.max' => 'Rating must be at most 5.'
        ]);
        try{
        $query =DB::table('reviews')->insert([
         
      
            
            'Email'=>$request->input('Email'),
            'comment'=>$request->input('comment'),
            'rating'=>$request->input('rating'),
           
           ]);
           return redirect()->back()->with('status', 'Rating added successfully.');
        } catch (\Exception $e) {
            // Log the error
            \Log::error($e);
    
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    // Your other methods...

    public function storereview() {
      
        $stores = reviews::all();
   return view('admin.review',compact('stores'));

       
    }

    public function userProfile(){
        return view('home.userProfile');
    } 
    public function booksDetails($id){
        $books = Books::find($id);
        return view('home.booksDetails',compact('books'));
    } 
    public function categories($genre){
        // Assuming you have a 'genre' column in your 'books' table
        $books = Books::where('genre', $genre)->get();
    
        // Check if any books were found for the given genre
        if($books->isEmpty()) {
            // If no books found for the genre, you may want to handle this case
            return redirect()->back()->with('error', 'No books found for the selected genre.');
        }
    
        return view('home.category', compact('books', 'genre'));
    }
    public function search(Request $request){
        $searchTerm = $request->input('search'); // Get the search term from the request
    
        // Check if search term exists
        if ($searchTerm) {
            // Use where() method to filter Books by the search term
            $searchPro = Books::where('BooksName', 'LIKE', '%'.$searchTerm.'%')->get();
    
            // Return the view with the search results
            return view('home.search', compact('searchPro'));
        } else {
            // If search term is empty, redirect back with a message
            return redirect()->back()->with('message', 'Empty search');
        }
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




