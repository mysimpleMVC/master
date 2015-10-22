
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title><?=(isset($this->title)) ? $this->title : 'MVC'; ?> </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL; ?>assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/icomoon.css">
    <link href="<?php echo URL; ?>assets/css/animate-custom.css" rel="stylesheet">

</head>
    
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  <?php Session::init(); ?>
  
  	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="active navbar-brand smoothScroll" href="./#home" title="Assist A Learner Trust"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span> Assist A Learner</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="./#about" class="smoothScroll">About Us</a></li>
            <li><a href="./#services" class="smoothScroll">What we do</a></li>
            <li><a href="./#team" class="smoothScroll">Trustees</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="./#blog" class="smoothScroll">Blog</a></li>
          </ul>
        </li>
        <li><a href="learners" class="smoothScroll">Learners</a></li>
        <li><a href="sponsorship" class="smoothScroll">Sponsorship</a></li>
        <li><a href="News&Events" class="smoothScroll">News & Events</a></li>
        <li><a href="contact" class="smoothScroll"> Contact</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
         
        
        <li class="active dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Want to help? <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">SPONSOR A CHILD</a></li>
            <li><a href="#">HELP THE SCHOOLS & COMMUNITY</a></li>
            <li><a href="#">MAKE A DONATION</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      
 
    
    