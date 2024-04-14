<!DOCTYPE html>
<html lang="en">


<head>
    <title>Available Books</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kitab rental">
    <meta name="keyword" content="kitab rental">
    <!-- FAV ICON(BROWSER TAB ICON) -->
   
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
   @include('admin.adminRightHeader')
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Donation Message</h4>
                                    <p>this is donation Messgae</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        
                                        <table class="table ">
                                            <thead>    
                                                <tr>
                                                    <th scope ="col">Request ID</th>
                                                    <th scope ="col">User ID</th>
                                                    <th scope ="col">Books Name</th>
													<th scope ="col">Books Image</th>
                                                    <th scope ="col">Author</th>
													<th scope ="col">Genre</th>
                                                    <th scope ="col">Date_Of_Publication</th>
                                                    <th scope ="col">Donation Date</th>
													
													
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- @if(!empty($stores)) -->
                                                    @foreach($stores as $texts)
                                                <tr>
                                                    <th>{{$texts->id}}</th>
                                                    <th>{{$texts->user_id}}</th>
                                                    <th>{{$texts->BooksName}}</th>
                                                    <td><img src="{{ asset($texts->BooksImage) }}" alt="Book Image"  width="80" height="60"></td>
                                                    <td>{{$texts->Author}}</td>
                                                    <td>{{$texts->Genre}}</td>
                                                    <td>{{$texts->DateOfPublication}}</td>
                                                    <td>{{$texts->DonationDate}}</td>
													
                                                    <td>{{$texts->created_at}}</td>
													<td><a href="edit_records/{{$texts->id}}"  class="btn btn-primary">Edit</a></td>
                                                    <td><a href="deleteDonation/{{$texts->id}}"><button class="btn btn-danger">Delete</button></a></td>
                                                </tr>
                                                
                                                    @endforeach
                                                <!-- @else -->
                                                <!-- <tr><td>Not added.</td> </tr> -->
                                                <!-- @endif -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>