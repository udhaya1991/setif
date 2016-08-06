<?php 
error_reporting(E_ALL);
?>
<html lang="en" ng-app="setif.angular">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SET India Foundation</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo (CSS.'bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo (CSS.'style.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo (CSS.'font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-primary" href="">SET India Foundation<!--<img  src="<?php //echo (IMG.'logo/logosmall.jpg');?>"/>--></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo site_url('index.php/aboutus');?>"><i class="fa fa-users text-primary mr5"></i>About us</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info-circle text-primary mr5"></i>Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('index.php/service/greeny');?>"><i class="fa fa-leaf text-primary mr5"></i>Green India</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('index.php/service/healthy');?>"><i class="fa fa-stethoscope text-primary mr5"></i>Healthy India</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('index.php/service/mighty');?>"><i class="fa fa-university text-primary mr5"></i>Mighty India</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('index.php/activity');?>"><i class="fa fa-history text-primary mr5"></i>Activities</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('index.php/gallery');?>"><i class="fa fa-file-image-o text-primary mr5"></i>Gallery</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('index.php/contact');?>"><i class="fa fa-tty text-primary mr5"></i>Contact us</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('index.php/member');?>"><i class="fa fa-sign-in text-primary mr5"></i>Member</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('index.php/admin');?>"><i class="fa fa-user-secret text-primary mr5"></i>Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


