<div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                         
                           
                            <h4>User Account</h4>
                            <ul>
                                <li><a href="{{route('login')}}" >Sign In</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                            </ul>
                            <!-- <h4>All Pages</h4> -->
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('aboutUs')}}">About us</a></li>
                                <li><a href="admission.html">Our Services</a></li>
                                <li><a href="{{route('allBooks')}}">Available Books</a></li>
                                <li><a href="course-details.html">Donate Books</a></li>
                                <li><a href="awards.html">Profile</a></li>
                             
                            </ul>
                            <h4>User Profile</h4>
                            <ul>
                                <li><a href="dashboard.html">User profile</a></li>
                                <li><a href="db-courses.html">Bookings</a></li>
                                
                                <li><a href="db-time-line.html">Time line</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                        
                            <ul>
                                <li><a href="#">Contact: Itahari -20 Tarahara, Nepal</a>
                                </li>
                                <li><a href="#">Phone: +977 9842182***</a>
                                </li>
                            </ul>
                        
                        </div>
                        <div class="ed-com-t1-right">
    <ul>
        <!-- Logout link with red color -->
        <li class="highlight-red" style="background-color: inherit;">
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="ho-dr-con-last waves-effect" style="color: yellow;">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo"> 

                                <img src="images/logo.png" style="width: 200px; height: 100px" alt="" ></img>
                                
                            </a>
                        </div>
                        <div class="main-menu ">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="{{route("aboutUs")}}" class="mm-arr">About us</a>
                                    
                                </li>
                                <li class="admi-menu">
                                    <a href="#" class="mm-arr">Our Services</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="about.html">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Academics</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="about.html" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="admission.html">
                                                            <img src="images/h-adm1.jpg" alt="">
                                                            <span>rent & return</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="admission.html" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="awards.html">
                                                            <img src="images/h-cam1.jpg" alt="">
                                                            <span>History & awards</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="awards.html" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="seminar.html">
                                                            <img src="images/h-res1.jpg" alt="">
                                                            <span>Seminar 2018</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="seminar.html" class="mm-r-m-btn">Read more</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{route('allBooks')}}">Available Books</a></li>
                                <li><a class='dropdown-button ed-sub-menu' href='{{route('donate')}}' data-activates='dropdown1'>Donate Books</a></li>
                               
                                <li><a href="{{route('userProfile')}}">Profile</a>
                                </li>
                                <!-- <li><a href="contact-us.html">Contact us</a> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search new and most rated Books">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Books">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>