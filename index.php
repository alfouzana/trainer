<html>
<body>
    
    </body<!DOCTYPE html>
<html lang="">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Personal Trainer</title>
<link rel="shortcut icon" href="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>

<!--[if IE]>
<script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Personal Trainer</a>
</div>

<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#contact">Contact</a></li>
</ul>
</div><!--.nav-collapse -->
</div>
</nav>
    
<div class="container">
<div class="starter-template">
<h1>Hello, world!</h1>
<p class="lead">Welcome to the most advanced personal trainer on the internet. To get started please follow this 5 easy steps</p>
    
    <?php

if (!isset($_GET['step']))
{
echo '<a href="sign-up.html" class="btn btn-primary btn-lg btn-block">Sign Up</a>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Choose Body Type</button>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Body Measuerments</button>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Select Food</button>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Submit </button>';   
}
if ($_GET['step'] == 2)
{
   echo  '<a href="sign-up.html" disabled="disabled" class="btn btn-success btn-lg btn-block">Sign Up</a>
    <a href="bodytype.html"  class="btn btn-primary btn-lg btn-block">Choose Body Type</a>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Body Measuerments</button>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Select Food</button>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Submit </button>';  
}

if ($_GET['step'] == 3)
{
   echo  '<a href="sign-up.html" disabled="disabled" class="btn btn-success btn-lg btn-block">Sign Up</a>
    <a href="bodytype.html" disabled="disabled" class="btn btn-success btn-lg btn-block">Choose Body Type</a>
    <a href="bodymeasurements.html"  class="btn btn-primary btn-lg btn-block">Body Measuerments</a>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Select Food</button>
    <button type="button" disabled="disabled" class="btn btn-defualt btn-lg btn-block">Submit </button>';  
}

?>
    

    
    
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>


</html>
