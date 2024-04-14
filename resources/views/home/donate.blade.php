<!DOCTYPE html>
<html lang="en">


<head>
    <title>Donate Books</title>
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
<section>
     @include('home.header')
    <!--END HEADER SECTION-->

    <!-- SLIDER -->
    <section>->
    <section class="c-all h-quote">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2>Request to Donate Books</h2>
                    <p>Note : You can Donate the book after the Approved by the company.This is the form to request to donate books. You need to visit the company to submit Books and collect fund </p>
                    <p></p>
                    <p class="help-line">Help Line <span>+977 9842182***</span> </p> <span class="help-arrow pulse"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                    <form class="form-horizontal"  method="POST" action="{{route("store")}}" enctype="multipart/form-data" id="AddForm" name="DonateForm" >
                         @csrf
                    
                         <div class="form-group">
                                    <label class="control-label col-sm-3">Books Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="BooksName" placeholder="Enter book name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Books Image:</label>
                                    <div class="input-field col-sm-9">
                                        <input type="file" id="image" name="BooksImage" value=""/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Author:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="Author" placeholder="Enter author name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Date Of Publication:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="DateOfPublication" placeholder="Enter date of publication">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">Genre:</label>
                                    <div class="col-sm-9">
                                        <select name="Genre">
                                            <option value="">-- Select Books Types --</option>
                                            <option value="Aerospace Engineering">Aerospace Engineering</option>
                                            <option value="Agriculture Courses">Agriculture Courses</option>
                                            <option value="Fashion Technology">Fashion Technology</option>
                                            <option value="Marine Engineering">Marine Engineering</option>
                                            <option value="Building, Construction Management">Building, Construction Management</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Accountant course">Accountant course</option>
                                            <option value="Dot Net Development">Dot Net Development</option>
                                            <option value="Java Development">Java Development</option>
                                            <option value="Chemical Engineering">Chemical Engineering</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="APPLY NOW" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


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