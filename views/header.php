<?php Session::init(); ?>
<?php $v = date('Y-m-d');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
        <meta name="author" content="">
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL; ?>assets/ico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL; ?>assets/ico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL; ?>assets/ico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL; ?>assets/ico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL; ?>assets/ico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL; ?>assets/ico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL; ?>assets/ico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL; ?>assets/ico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL; ?>assets/ico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo URL; ?>assets/ico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL; ?>assets/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL; ?>assets/ico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL; ?>assets/ico/favicon-16x16.png">
        <link rel="manifest" href="<?php echo URL; ?>assets/ico/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo URL; ?>assets/ico/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <title> Assist a Learner Trust | <?= (isset($this->title)) ? $this->title : ''; ?> </title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo URL; ?>assets/css/main.css?v<?php echo $v;?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/icomoon.css?v<?php echo $v;?>">
        <link href="<?php echo URL; ?>assets/css/animate-custom.css?v<?php echo $v;?>" rel="stylesheet">

    </head>

</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
    

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
                <a class="active navbar-brand smoothScroll dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" title=""></a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class=" nav navbar-nav">
                    <?php if (Session::get('loggedIn') == false): ?>
                    <li><a href="<?php echo URL; ?>">Home</a></li>
                      <li><a href="<?php echo URL; ?>login">Login</a></li>
                    <?php endif; ?>
                    <?php if (Session::get('loggedIn') == true): ?>
                        <li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
                        
                            <li><a href="<?php echo URL; ?>note">Notes</a></li>

                        <?php if (Session::get('role') == 'owner'): ?>
                            <li><a href="<?php echo URL; ?>user">Users</a></li>
                        <?php endif; ?>

                        <li><a href="<?php echo URL; ?>dashboard/logout">Logout</a> </li>   
                    <?php else: ?>
                        
                    <?php endif; ?>


                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <?php if (Session::get('loggedIn') == true): ?>
                        <li><a href="#">Logged In as:<?php print(Session::get('user')); ?></a></li>
                    <?php endif; ?> 
                    
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <br /><br />



