<?php



namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Donations;
class DonationController extends Controller
{
    public function index()
    {
      $Donation = Donations::all();
      return view('home.donate', compact('Donation'));
    }
    
    public function store(Request $request)


    { $user_id = Auth::id();
     
      // Get the current date and time
      $currentDate = Carbon::now();
  
      // Validate the request data
      $request->validate([
          'BooksName' => 'required|max:255',
          'BooksImage' => 'required|image',
          'Author' => 'required',
          'DateOfPublication' => 'required',
          'Genre' => 'required',
          // You can't directly compare dates like this in validation rules.
          // Instead, validate that DonationDate is a date and optionally after the current date.
          // 'DonationDate' => $currentDate,
      ]);
     // Handle file upload
    if ($request->hasFile('BooksImage')) {
      $imageName = time() . '.' . $request->file('BooksImage')->extension();
      $request->file('BooksImage')->move(public_path('images'), $imageName);
  } else {
      // Handle case where no file is uploaded
      return redirect()->back()->with('error', 'No image uploaded.');
  }

      // Create a new Donations instance with the validated data
      $donation = new Donations();
      $donation->user_id = $user_id;
      $donation->BooksName = $request->input('BooksName');
      $donation->BooksImage = 'images/' . $imageName;
      $donation->Author = $request->input('Author');
      $donation->DateOfPublication = $request->input('DateOfPublication');
      $donation->Genre = $request->input('Genre');
      
      $donation->ApprovedDate = $currentDate; // Assuming DonationDate is also being sent via the form.
      $donation->DonationDate = $currentDate; // Assuming DonationDate is also being sent via the form.
  
      // Save the Donations instance to the database
      $donation->save();
  
      // Redirect back with a success message
      return view('home.donate')->with('success', 'Request created successfully.');
  }
    // {
    //     $user_id = Auth::id();
    //     $currentDate = Carbon::now();
    //   $request->validate([
    //     'BooksName' => 'required|max:255',
    //     'BooksImage' => 'required',
    //     'Author' => 'required',
    //     'DateOfPublication' => 'required',
    //     'Genre' => 'required',
    //     'DonationDate' => $currentDate,
        
    //   ]);
    // //   $request->merge(['DonationDate' => $currentDate]);
    //   Donations::create($request->all());
    //   return redirect()->route('home.donate')
    //     ->with('success', 'request created successfully.');
    // }
 

    public function delete_record($id){
        Donations::destroy($id);
        return back();

    }
    
    public function show($id)
    {
      $post = Donations::find($id);
      return view('admin.request', compact('post'));
    }
  
    
}
