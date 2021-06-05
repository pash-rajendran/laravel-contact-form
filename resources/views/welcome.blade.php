<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dealer Inspire Code Challenge</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ url('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="{{ url('css/grayscale.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">
                <i class="fa fa-play-circle"></i> <span class="light">Dealer</span> Inspire Challenge
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#coffee">Coffee</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Challenge</h1>
                    <p class="intro-text">Code Something Awesome.
                        <br>We &lt;3 PHP Developers.</p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>About This Challenge</h2>
            <p>We make awesome things at Dealer Inspire.  We'd like you to join us.  That's why we made this page.  Are you ready to join the team?</p>
            <p>To take the code challenge, visit <a href="https://bitbucket.org/dealerinspire/php-contact-form">this Git Repo</a> to clone it and start your work.</p>
        </div>
    </div>
</section>

<section id="coffee" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Coffee Break?</h2>
                <p>Take a coffee break.  You deserve it.</p>
                <a href="https://www.youtube.com/dealerinspire" class="btn btn-default btn-lg">or Watch YouTube</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact Guy Smiley</h2>
            <p>Remember Guy Smiley?  Yeah, he wants to hear from you.</p>
            <p id = "status-message"></p>
            <p class="bg-primary">
            <form action="" id="contact-form" class="form-horizontal" method="post" data-url="{{ route('submit-contact-form') }}">
                <div class="form-group required">
                    <label for="name" class="col-xs-3 control-label">Full Name</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="name" name="name"  pattern="[a-zA-Z][a-zA-Z ]{2,255}" maxlength="255" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-xs-3 control-label">Email</label>
                    <div class="col-xs-9">
                        <input type="email" class="form-control" id="email" name="email" maxlength="255" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-xs-3 control-label">Message</label>
                    <div class="col-xs-9">
                        <textarea rows="4" class="form-control" id="message" name="message" maxlength="1000"  required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-xs-3 control-label">Phone</label>
                    <div class="col-xs-9">
                        <input type="tel" class="form-control" id="phone" name="phone" maxlength="10" pattern="^\+?\d{0,13}" placeholder="Optional">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <button type="submit" id="contact-form-submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
            </p>
        </div>
    </div>
</section>

<!-- Map Section -->
<div id="map"></div>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p><small>Copyright 2018 Dealer Inspire</small></p>
    </div>
</footer>

<!-- jQuery -->
<script src="{{ url('vendor/jquery/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

<!-- Theme JavaScript -->
<script src="{{ url('js/grayscale.min.js') }}"></script>

<script src="{{ url('js/form-submit.js') }}"></script>
</body>

</html>
