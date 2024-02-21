<!DOCTYPE html>
<html lang="en">


<head>
    <title>Available Books</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
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

    <!-- MOBILE MENU -->
    @include('home.header')

    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>All <span>Books</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-1.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Aerospace Engineering</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{{route('booksDetails')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-2.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{route('booksDetails')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-3.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{route('booksDetails')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-4.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{route('booksDetails')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-5.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Fashion Technology</h3>
                                </a>
                                <h4>Technology / Trends / Fashion</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{route('booksDetails')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-6.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Agriculture Courses</h3>
                                </a>
                                <h4>Technology / Space / Aerospace</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{route('booksDetails')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>40 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 320</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-7.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Marine Engineering</h3>
                                </a>
                                <h4>Technology / Ocean / Marine</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{route('booksDetails')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>04 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 1020</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="images/course/sm-8.jpg" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details.html">
                                    <h3>Building, Construction Management</h3>
                                </a>
                                <h4>Technology / Construction / Building</h4>
                                <p>Classes started from coming friday(21 jun 2017),total seats 72 and available seats 10</p> <span class="home-top-cour-rat">4.2</span>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="{route('booksDetails')}}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-eye" aria-hidden="true"></i>32 Aavailable</a> </li>
                                        <li><a href="course-details.html"><i class="fa fa-share-alt" aria-hidden="true"></i> 124</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION START-->
    <section>
        @include('home.footer')
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>