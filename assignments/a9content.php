<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../css/animate.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <script type='text/javascript' src="http://livevalidation.com/javascripts/src/1.3/livevalidation_standalone.compressed.js"></script>
    </head>

<body>
<center>
<h1>Assigment 8 </h1>

<div class="container">
  <div class="row">
    <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
    <?php
    if(isset($_GET["submitted"])){
      echo '<h2 style="color: green">Thanks for the Feedback!</h2><br>';
    }
    ?>
      <h2>Admin Feedback Form</h2><br>
      <hr>
      <form method="POST" class="form-horizontal" role="form" action="feedback.php">
         <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="inputUsername" placeholder="Name"><br>
        <label for="email">Email</label>
        <input class="form-control" name="email" id="inputEmail" placeholder="Email"><br>
        <label for="comment">Comment</label>
        <textarea type="textarea" name="comment" class="form-control" id="inputPassword" placeholder="Comment"></textarea><br>
        <hr>
        <button type="submit" class="btn btn-blue">Submit</button>
    </div>
  </div>
</div>
<div class="container">
  <img src="wordcloud.png">
</div>
<!-- client side script for live form validation -->
<script type='text/javascript'>
//onclick append
$("#create").on('click', function () {
    var size = $("#size").val();
    var randomstring = Math.random().toString(36).slice(-Math.abs( size));
    $("#random").val(randomstring);
    console.log("foo");
});

//input[name='name']"
//var selectedValue= $("input[name='name']").val();
$("input[name='name']").change(function(){
    var inputUsername = new LiveValidation( "inputUsername", { validMessage: "Welcome friend!", wait: 500 } );
    inputUsername.add( Validate.Presence, { failureMessage: "Your name has to be at least 4 characters" } );
    inputUsername.add( Validate.Length, { minimum: 4});
});


  var inputEmail = new LiveValidation( "inputEmail", { validMessage: "Valid Email!", wait: 500 } );
  inputEmail.add( Validate.Presence, { failureMessage: "Email Required" } );
  inputEmail.add( Validate.Email, { failureMessage: "Invalid email address!" } );
//  inputEmail.add( Validate.Format, { pattern: /cs.odu.edu/i, failureMessage: "CS Email Only" } );

  var inputPassword = new LiveValidation( "inputPassword", { validMessage: "Thanks for the comment!", wait: 500 } );
  inputPassword.add( Validate.Presence, { failureMessage: "Comment Required" } );
</script>


</center>
<hr>
<footer>
<center>
<div  class="row"></div>
<a href="a8.php">
<span style="font-size:50px;" class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-chevron-left fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="../">
<span  style="font-size:50px;" class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-home fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="a10.html">
<span  style="font-size:50px;" class="fa-stack fa-lg">
  <i class="fa fa-square fa-stack-2x"></i>
  <i class="fa fa-chevron-right fa-stack-1x fa-inverse"></i>
</span>
</a>
</center>
</footer>
</html>
