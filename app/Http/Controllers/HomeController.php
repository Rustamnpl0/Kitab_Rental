<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
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
                $user=auth()->user();
                $count=Cart::where('phone',$user->phone)->count();
                return view('home.homepage',compact('books','count'));
            }

            else if ($type=='admin'){
                return view('admin.adminhome');
            }

            else{
                return redirect()->back();
            }
        }
    }
   
    
     public function messagePage(){
     
        return view('admin.messagepage');
     } 

    public function aboutUs(){
        return view('home.aboutus');
    } 
    public function allBooks(){
        $Books = Books::paginate(8);
        return view('home.allBooks',compact('Books'));
    } 




    public function addCart(Request $request, $id){
        if (Auth::id()){
            $user=auth()->user();
            $books=Books::find($id);

            $user = User::firstOrCreate(
                ['email' => $user->email],
                [
                    'firstname' => $user->firstname,
                    'phone' => $user->phone,
                    'address' => $user->address,
                    // Add any other user details you want to save
                ]
            );


            $cart=new cart;
            $cart->firstname=$user->firstname;
           
            $cart->phone=$user->phone;
            $cart->email=$user->email;
            $cart->address=$user->address;
            $cart->BooksName=$books->BooksName;
            $cart->image=$books->image;
            $cart->price=$books->amount;
            $cart->save();
            return redirect()->back();
            

    }
    else{
        return redirect('login');
    }
    } 


    public function storeCart(){
        if (Auth::check()) { // Check if user is authenticated
        $user = auth()->user();
        $carts = Cart::where('email', $user->email)->get(); // Retrieve only the user's cart items

        return view('home.cart', compact('carts'));
    } else {
        return redirect('login');
    }
    }
    public function deletecart($id){
        if (Auth::check()) { // Check if user is authenticated
            $user = auth()->user();
            $cart = Cart::where('email', $user->email)->findOrFail($id); // Find the cart item belonging to the user
            $cart->delete();
    
            return redirect()->back()->with('success', 'Item removed from cart.');
        } else {
            return redirect('login');
        }
}








    public function donate(){
        return view('home.donate');
    } 




     public function review(){
        // $url = url('/addreview');
        $reviewstores = reviews::all();
        return view('home.reviewform',compact('reviewstores'));
     }





    public function addreview(Request $request,$Books_id)
    {
        $userId = Auth::id();
        // Validate the form data
        $request->validate([
            'Email' => 'required|email',
            'Comment' => 'required',
            // Assuming the rating is between 0 and 5
        ]);
        $currentDate = Carbon::now();
        $query =DB::table('reviews')->insert([
            'Books_id' => $Books_id,
            'user_id' => $userId,
            'Email'=>$request->input('Email'),
            'Comment'=>$request->input('Comment'),
            'rating' => 3,
            'Date_of_rating' => $currentDate,
           ]);
           if($query){
            return back()->with('status','review added sucessfully');
           }
           else{
            return back()->with('something wrong');
           }
    }

    // Your other methods...

    // public function storereview($Books_id) {
    //     $stores = reviews::
    //                 Where('Books_id', $Books_id)
    //                 ->get();

    // // Pass the reviews to the view
    // return view('home.booksDetails', ['stores' => $stores,'Books_id' => $Books_id]);
       
    // }

    public function storereview() {
    $stores = DB::table('reviews')->get();
    return view('admin.review', ['stores' => $stores]);
}

    public function userProfile(){
        $user=Auth::User();
        return view('home.userProfile',compact('user'));
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




