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

        return $request->input();
        // $request->validate([
        //     'booksName'=>'required',
        //         'genre'=>'required',
        //         'author'=>'required',
        //         'date_of_publication'=>'required',
        //         'description'=>'required',
        //         'amount'=>'required',
        //         'isAvailable'=>'isAvailable',
                
        // ]);
    //    $query =DB::table('books')->insert([
         
    //     'booksName'=>$request->input('booksName'),
    //     'genre'=>$request->input('genre'),
    //     'author'=>$request->input('author'),
    //     'date_of_publication'=>$request->input('date_of_publication'),
    //     'description'=>$request->input('description'),
    //    ' amount'=>$request->input('amount'),
    //     'isAvailable'=>$request->input('isAvailable'),
    //    ]);
    //    if($query){
    //     return redirect('/adminAddBooks')->with('status','books added sucessfully');
    //    }
    //    else{
    //     return back()->with('something wrong');
    //    }
    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destory(){

    }
    

    // public function insertBooks(Request $request){
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
