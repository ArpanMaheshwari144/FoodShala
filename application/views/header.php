<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FoodShala</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon"
        href="http://www.myiconfinder.com/uploads/iconsets/256-256-dd36e2e0fa8db0a0e334e986687ad417.png"
        type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css');?>">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
    <style>
    .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings';
        font-style: normal;
        font-weight: 400;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="navbar-brand">
                    <a class="navbar-brand page-scroll" href="#">
                        <img src="http://www.myiconfinder.com/uploads/iconsets/256-256-dd36e2e0fa8db0a0e334e986687ad417.png"
                            width="50" height="50" style="margin-top:-28px;" alt="">
                    </a>
                    <?=  anchor('/',"FoodShala",array('class' =>'page-scroll') );?>

                </div>
                <ul class="nav navbar-nav">
                    <li><a href="#features" class="page-scroll">Specials</a></li>
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
                    <?php if($this->session->userdata('user_role')):?>
                    <li><?=  anchor('login/logout',"logout",array('class' =>'page-scroll') );?></li>
                    <li><?=  anchor('authcontroller',"Dashboard",array('class' =>'page-scroll') );?></li>
                    <?php else: ?>
                    <li><?=  anchor('welcome/loginlink',"login",array('class' =>'page-scroll') );?></li>
                    <?php endif;?>
                    <li><a href="#contact" class="page-scroll">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
    </nav>
    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <h1>FoodShala</h1>
                            <div>
                                <form action="#" method="GET">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6 col-md-offset-3">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search Restaurant"
                                                    id="txtSearch" />
                                                <div class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p>Order Now: +91-7991377996</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>