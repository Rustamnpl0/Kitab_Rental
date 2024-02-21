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
                                    <h4>Books Details</h4>
                                    <p>All about Books  and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                <tr>
                                                    <th>Book_ID</th>
                                                    <th>Image</th>
                                                    <th>Books Name</th>
													<th>Genre</th>
                                                    <th>Author</th>
													<th>Is_Available</th>
                                                    <th>Date_Of_Publication</th>
                                                    <th>Description</th>
													<th>Status</th>
													<th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Aerospace Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Engineering</td>
                                                    <td>ram</td>
                                                    <td>true</td>
                                                    <td>12 Aug 2018</td>
													<td>this is engineering books</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Fashion Technology</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>fashion </td>
                                                    <td>ram</td>
                                                    <td>true</td>
                                                    <td>12 Aug 2018</td>
													<td>this is fashion books</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
													<td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                <td>3</td>
                                                    <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Agriculture Courses</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Agriculture</td>
                                                    <td>ram</td>
                                                    <td>true</td>
                                                    <td>12 Aug 2018</td>
													<td>this is agriculture books</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                <td>4</td>
                                                    <td><span class="list-img"><img src="images/course/sm-3.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Marine Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Ocean / Marine</td>
                                                    <td>ram</td>
                                                    <td>true</td>
                                                    <td>12 Aug 2018</td>
													<td>this is marine books</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                <td>5</td>
                                                    <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Building, Construction Management</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Construction</td>
                                                    <td>ram</td>
                                                    <td>true</td>
                                                    <td>12 Aug 2018</td>
													<td>this is civil engineering books</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                <td>6</td>
                                                    <td><span class="list-img"><img src="images/course/sm-1.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Aerospace Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Engineering</td>
                                                    <td>ram</td>
                                                    <td>true</td>
                                                    <td>12 Aug 2018</td>
													<td>this is  aerospace engineering books</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                <td>7</td>
                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Fashion Technology</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Fashion</td>
                                                    <td>30 Days(420hrs)</td>
                                                    <td>01 Nov 2018</td>
                                                    <td>01 Dec 2018</td>
													<td>30</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                <td>8</td>
                                                    <td><span class="list-img"><img src="images/course/sm-2.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Agriculture Courses</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Agriculture</td>
                                                    <td>25 Days(420hrs)</td>
                                                    <td>05 Jan 2018</td>
                                                    <td>25 Jan 2018</td>
													<td>25</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-3.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Marine Engineering</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Ocean / Marine</td>
                                                    <td>06 Months</td>
                                                    <td>12 Feb 2018</td>
                                                    <td>14 Aug 2018</td>
													<td>68</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-4.jpg" alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span class="list-enq-name">Building, Construction Management</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>Construction</td>
                                                    <td>1 Year</td>
                                                    <td>05 Mar 2018</td>
                                                    <td>16 Mar 2018</td>
													<td>72</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
													<td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Delete</a></td>
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