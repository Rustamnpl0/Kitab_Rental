<!DOCTYPE html>
<html lang="en">



<head>
    <title>About Us</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
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
    <section>
    @include('home.header')
    <!--END HEADER SECTION-->

    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Contact <span> Us</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>Educate <span>Master</span></h2>
                            <p>We deliver the books on eastern region of nepal with limited time span</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.html" alt="">
                            <h4>Address</h4>
                            <p>Itahari-20, tarahara  EkataMarga-21B
                                <br>Landmark : Next To Hotel Solti Westend</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.html" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel://0099999999" class="contact-icon">Phone: +977 9842182***</a>
                                <br> <a href="tel://0099999999" class="contact-icon">Mobile: +977 9842192***</a>
                                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: KitabRental@gmail.com</a> </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.html" alt="">
                            <h4>Website</h4>
                            <p> <a href="#">Website: www.mycompany.com</a>
                                <br> <a href="#">Facebook: www.facebook/my</a>
                                <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    <section id="map">
        <div class="row contact-map">
            <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57043.28997064727!2d87.223914260639!3d26.673905433345908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6c66e80fbfa9%3A0x38094d1a7c974283!2sItahari!5e0!3m2!1sen!2snp!4v1708078058811!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="container">
                <div class="overlay-contact footer-part footer-part-form">
                    <div class="map-head">
                        <p>Send Us Now</p>
                        <h2>GetIn Touch</h2> <span class="footer-ser-re">Service Request Form</span> </div>
                    <!-- ENQUIRY FORM -->
                    <form id="contact_form" name="contact_form" action="">
                        <ul>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f1" value="" name="f1" placeholder="Name" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f2" value="" name="f2" placeholder="Phone" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f3" value="" name="f3" placeholder="City" required=""> </li>
                            <li class="col-md-6 col-sm-6 col-xs-12 contact-input-spac">
                                <input type="text" id="f4" value="" name="f4" placeholder="Country" required=""> </li>
                            <li class="col-md-12 col-sm-12 col-xs-12 contact-input-spac">
                                <textarea id="f5" name="f5" required=""></textarea>
                            </li>
                            <li class="col-md-6">
                                <input type="submit" value="SUBMIT"> </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION START-->
    <section>

        @include('home.review')
        @include('home.footer')
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>