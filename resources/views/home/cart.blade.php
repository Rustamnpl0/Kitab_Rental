<!DOCTYPE html>
<html lang="en">


<head>
    <title>Cart</title>
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
   @include('home.header')
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="{{route('homepage')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                       
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4> Details</h4>
                                
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        
                                        <table class="table ">
                                            <thead>    
                                                <tr>
                                                    <th scope ="col">Cart ID</th>
                                                    <th scope ="col">Books Image</th>
                                                    <th scope ="col">User Name </th>
                                                    <th scope ="col">Phone</th>
													<th scope ="col">Email</th>
                                                    <th scope ="col">Address</th>
													<th scope ="col">Book Name</th>
                                                    <th scope ="col">Price</th>
													<th scope ="col">Created At</th>
													
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach($carts as $cart)
                                                <tr>
                                                    <th>{{$cart->id}}</th>
                                                    <td><img src="{{$cart->image}}" alt="Book Image"  width="80" height="60"></td>
                                                    <td>{{$cart->firstname}}</td>
                                                    <td>{{$cart->email}}</td>
                                                    <td>{{$cart->phone}}</td>
                                                    <td>{{$cart->address}}</td>
                                                    <td>{{$cart->BooksName}}</td>
													<td>{{$cart->price}}</td>
            
                                                    <td>{{$cart->created_at}}</td>
													
                                                    <td><a href="deletecart/{{$cart->id}}"><button class="btn btn-danger">Delete</button></a></td>
                                                    <td><a href="{{$cart->id}}"><button class="btn btn-success">Borrow</button></a></td>

                                                </tr>
                                                
                                             @endforeach
                                                
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