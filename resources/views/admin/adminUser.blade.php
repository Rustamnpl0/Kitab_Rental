<!DOCTYPE html>
<html lang="en">


<head>
    <title>All User</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
                        <li class="active-bre"><a href="#"> Users()</a>
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
                                    <h4>User Details</h4>
                                    <p>All about User like name, student id, phone, email, country, city and more</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Id</th>
                                                    <th>Date of birth</th>
													<th>Status</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>united states</td>
                                                    <td>ST17241</td>
													<td>03 Jun 1990</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="{{route('adminUserDetails')}}" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>lucas@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST10231</td>
													<td>16 Feb 1987</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="{{route('adminUserDetails')}}" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="{{route('adminUserDetails')}}" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="{{route('adminUserDetails')}}" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>united states</td>
                                                    <td>ST17241</td>
													<td>03 Jun 1990</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="{{route('adminUserDetails')}}" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>lucas@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST10231</td>
													<td>16 Feb 1987</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="{{route('adminUserDetails')}}" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="{{route('adminUserDetails')}}" class="ad-st-view">View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
													<td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="{{route('adminUserDetails')}}" class="ad-st-view">View</a></td>
                                                </tr>
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
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>