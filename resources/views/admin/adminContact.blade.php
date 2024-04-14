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
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
        /* Style for the popup window */
        .popup {
            width: 1200px;
            height: 700px;
            position: fixed;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none; /* Hidden by default */
        }
    </style>
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
                                    <h4>Enquiry Message</h4>
                                    <p> User Enquiry Of the system or Books  </p>
                                </div>
                                <section class="section-50">
                                    <div class="container">
                                        <h3 class="m-b-50 heading-line">Notifications <i class="fa fa-bell text-muted"></i></h3>
                                        <div class="notification-ui_dd-content">
                                        @foreach($post as $notification)
                                        <div class="notification-list notification-list--unread">
                                            <div class="notification-list_content">
                                            <div class="notification-list_img"> <img src="images/users/user1.jpg" alt="user"> </div>
                                            <div class="notification-list_detail">
                                                <p><b>{{ $notification->Name }}</b> </p>
                                                <p class="text-muted">{{ $notification->Email }}</p>
                                                <p class="text-muted">{{ $notification->Message}}</p>
                                                <p class="text-muted"><small>{{ $notification->created_at }}</small></p>
                                            </div>
                                            </div>
                                            <div class=""><button id="openPopupButton" class="btn btn-primary" >Open Message Popup</button> </div>
                                            <div id="messagePopup" class="popup">
        <!-- Load message page content using an iframe -->
        <iframe src="{{ route('messagePage') }}" frameborder="0" style="width: 100%; height: 100%;"></iframe>
    </div>
                                        </div>
                                        @endforeach
                                        
                                </section>
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
    <script>
        document.getElementById('openPopupButton').addEventListener('click', function() {
            // Display the popup window
            document.getElementById('messagePopup').style.display = 'block';
        });
    </script>
</body>


</html>