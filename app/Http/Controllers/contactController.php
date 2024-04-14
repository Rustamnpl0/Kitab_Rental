<?php




namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Donations;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\approvednotification;
class contactController extends Controller
{
    public function index()
    {
      $Contact = Contact::all();
      return view('home.aboutUs', compact('Contact'));
    }
    
    public function storeContact(Request $request)


    { $user_id = Auth::id();
     
      
      $request->validate([
          'Name' => 'required|max:255',
          'Phone' => 'required',
          'Email' => 'required',
          'Address' => 'required',
          'Message' => 'required',
          
      ]);
     
     

      // Create a new Donations instance with the validated data
      $contact = new Contact();
      $contact->user_id = $user_id;
      $contact->Name = $request->input('Name');
      $contact->Phone = $request->input('Phone');
      $contact->Email = $request->input('Email');
      $contact->Address = $request->input('Address');
      $contact->Message = $request->input('Message');
      
  
      $contact->save();
  
     
      return view('home.aboutUs')->with('success', 'Request created successfully.');
  }
   
 
    // public function deleteContact($id){
    //     Donations::destroy($id);
    //     return back();

    // }
  
    
    public function adminContact()
    {
      $post = Contact::all();
      return view('admin.adminContact', compact('post'));
    }
  

    public function notify(){
      if (auth()->user()){
      $user = User::first();
      auth()->user()->notify(New approvednotification($user));
      }
      dd('done');
    }


}

    //

