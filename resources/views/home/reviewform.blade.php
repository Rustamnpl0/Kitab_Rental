<!DOCTYPE html>
<html lang="en">


<head>
    <title>review form</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
 
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
    <!-- RateYo! CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- RateYo! JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</head>

<body>

    <!-- MOBILE MENU -->
  
      


    <section class="c-all p-semi p-event">
        <div class="semi-inn">
            <div class="semi-com semi-right">
                <div class="n-form-com semi-form">
                    @foreach($reviewstores as $review)
                    <div class="col s12">
                        <form class="form-horizontal" name="reviewform" id="reviewform" action="{{ route('addreview') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" placeholder="Email id" id="Email" name="Email" value="{{ $review->Email }}" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="comment" id="comment" name="comment" value="{{ $review->comment }}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <h4>Rate US</h4>
                                <div class="col-md-12">
                                    <div id="star-rating"></div>
                                    <!-- Hidden input field to store the selected rating -->
                                    <input type="hidden" name="rating" id="rating">
                                </div>
                            </div>
                            <div class="form-group mar-bot-0">
                                <div class="col-md-12">
                                    <button type="button" id="submitForm" class="waves-effect waves-light light-btn waves-input-wrapper">APPLY NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION END -->

  

   
    <script>
        $(document).ready(function() {
            $("#star-rating").rateYo({
                rating: 0, // Default rating
                fullStar: true,
                onSet: function(rating, rateYoInstance) {
                    // Set the selected rating in the hidden input field
                    $("#rating").val(rating);
                }
            });
            $("#reviewform").submit(function(event) {
            event.preventDefault(); // Prevent the default form submission

            var formData = $(this).serialize(); // Serialize form data

            $.post($(this).attr("action"), formData)
                .done(function(response) {
                    // Handle successful response, e.g., show a success message
                    alert("Review added successfully!");
                    // You might want to update the UI here, like showing the new review or refreshing the page
                })
                .fail(function(error) {
                    // Handle errors, e.g., show an error message
                    alert("Failed to add review: " + error.responseText);
                });
        });
            
        });
    </script>
    </body>
</html>


