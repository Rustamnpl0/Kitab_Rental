<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Books;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class booksController extends Controller
{
    public function books(){
        return view('admin.adminAddBooks');
        
        
    }
    public function add(Request $request){

        // return $request->input();
        $request->validate([
            'image'=>'required|image',
            'BooksName'=>'required',
                'genre'=>'required',
                'author'=>'required',
                'date_of_publication'=>'required',
                'description'=>'required',
                'amount'=>'required',
                'isAvailable'=>'required',
                
        ]);
        $image=$request->file('image')->getClientOriginalName();
        
       $query =DB::table('books')->insert([
         
      
        'image'=>$image,
        'BooksName'=>$request->input('BooksName'),
        'genre'=>$request->input('genre'),
        'author'=>$request->input('author'),
        'date_of_publication'=>$request->input('date_of_publication'),
        'description'=>$request->input('description'),
        'amount'=>$request->input('amount'),
        'isAvailable'=>$request->input('isAvailable'),
       ]);
       if($query){
        return back()->with('status','books added sucessfully');
       }
       else{
        return back()->with('something wrong');
       }
    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destory(){

    }
    

   
}
