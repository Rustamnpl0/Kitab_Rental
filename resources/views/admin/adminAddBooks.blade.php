<!DOCTYPE html>
<html lang="en">


<head>
    <title>Add Books</title>
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
                        <li class="active-bre"><a href="#"> Add new course</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
				<div class="sb2-2-add-blog sb2-2-1">
                    {{$title}}
                    <hr>
                    @if (Session::get('sucess'))
                    <div class="alert alert-sucess">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::get('fail'))
                    <div class="laert alert-danger">
                        {{Session::get(' not success  ')}}
                    </div>
                    @endif

                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                        </li>
                       
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade active in">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Books Information</h4>
                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                                <div class="bor">
      <form method="POST" action="{{$url}}" enctype="multipart/form-data" id="AddForm" name="AddForm">
            @csrf

            <div class="row">
        <div class="input-field col s12">
            <input type="file" id="image" name="image" value="{{ isset($stores) ? $stores->image : '' }}"/>
            <label for="list-image">Image</label>
        </div>
  
 
        <div class="input-field col s12">
            <input id="list-title" type="text" class="validate" name="BooksName" value="{{ isset($stores) ? $stores->BooksName : '' }}"">
            <label for="list-title">Books Name</label>
        </div>
        
        <div class="input-field col s12">
            <input id="list-genre" type="text" class="validate" name="genre" value="{{ isset($stores) ? $stores->genre : '' }}">
            <label for="list-genre">Genre</label>
        </div>
    </div>
    
        <div class="input-field col s12">
            <input id="list-author" type="text" class="validate" name="author"value="{{ isset($stores) ? $stores->author : '' }}">
            <label for="list-author">Author</label>
        </div>
       
        <div class="input-field col s12">
            <input id="list-publication" type="text" class="validate" name="date_of_publication" value="{{ isset($stores) ? $stores->date_of_publication : '' }}">
            <label for="list-publication">Date of Publication</label>
        </div>
    
    
        <div class="input-field col s12">
            <textarea id="list-description" class="materialize-textarea" name="description" >{{ isset($stores) ? $stores->description : '' }}</textarea>
            <label for="list-description">Description</label>
        </div>
    
    <div class="row">
        <div class="input-field col s12">
            <input id="list-amount" class="materialize-textarea" name="amount" value="{{ isset($stores) ? $stores->amount : '' }}">
            <label for="list-amount">Amount</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <select id="list-status" name="isAvailable">
                <option value="" disabled selected>Select Status</option>
                <option value="Active"  {{ isset($stores) && $stores->isAvailable == "Active" ? "selected" : "" }}><label for="Active">Active</label></option>
               
                <option value="De-Active" {{ isset($stores) && $stores->isAvailable == "De-Active" ? "checked" : "" }}>De-Active</option>
            </select>
            <label for="list-status">Status</label>
        </div>
    </div>
   
    <div class="row">
        <div class="input-field col s12">
            <button type="submit" class="waves-effect waves-light btn-large">Submit</button>
        </div>
    </div>
</form>
                                </div>
                            </div>
                        </div>
                       
                        
                        
                       
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