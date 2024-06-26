<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Books;
use App\Models\Donations;
use App\Models\Contact;
use App\Models\reviews;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class booksController extends Controller
{
    public function books(){
        $url = url('/add');
        $title ="Register";
        $bookData = compact('url','title');
        return view('admin.adminAddBooks')->with($bookData);
        
        
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
        // dd($request->all());

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

       $query =DB::table('books')->insert([
         
      
        'image' => 'images/'.$imageName,
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
    public function store() {
      
         $stores = Books::all();
    return view('admin.adminBooks',compact('stores'));

        
     }
    // public function edit_records(){
    //    $data= Books::find($id);
    //    return view('admin.adminEditBooks',compact('data'));
    // }
    public function edit_records($id){
        $stores= Books::find($id);
        if (is_null($stores)){
 
         return redirect('stores');
        }
        else{
            $title ="Update Books";
            $url=url('/update').'/'.$id;
         $bookData=compact('stores','url','title');
         return view('admin.adminAddBooks')->with($bookData);
        }
    }
    
    public function update(Request $request, $id){
      $data= Books::find($id);
      $data->image = $request->file('image')->store('images');
      $data ->BooksName=$request['BooksName'];
      $data ->genre=$request['genre'];
      $data ->author=$request['author'];
      $data ->date_of_publication>$request['date_of_publication'];
      $data ->description=$request['description'];
      $data ->amount=$request['amount'];
      $data ->isAvailable=$request['isAvailable'];
      $data->save();
      return view('admin.adminBooks');
      

    }
    public function delete_record($id){
        Books::destroy($id);
        return back();

    }
    

    // public function booksDetails() {
    //     // Assuming $booksDetails is a collection of book details from your database
    //     $booksDetail = Books::all(); // Example: Retrieve all books from the database
    
    //     // Pass the $booksDetails variable to the view
    //     return view('booksDetails', compact('booksDetail'));
    // }

   public function adminreviews(){
    
    $stores = reviews::all();
    return view('admin.adminreviews',compact('stores'));

        
   }




   public function adminDonate(){
    $stores = Donations::all();
    // return view('admin.adminreviews',compact('stores'));
    return view('admin.adminDonate' , compact('stores'));
} 
public function deleteDonation($id){
    Donations::destroy($id);
    return back();
}


// public function adminContact(){
//     $storesContact = Contact::all();
//     return view('admin.adminContact' , compact('storesContact'));
// } 
// public function showNotifications()
// {
//     // Retrieve the count of donations
//     $donationCount = Donations::count();

//     // Pass the count to the view
//     return view('notifications', ['donationCount' => $donationCount]);
// }
}
