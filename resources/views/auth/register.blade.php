﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>Herthi Super Market</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
  <link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="../css/jquery.fancybox.css" rel="stylesheet">
<link href="../css/cloud-zoom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="../assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<header>

  @include('Pages.template.topnav')

  <div class="container">
    @include('Pages.template.middlenav')
    @include('Pages.template.mainnav')

  </div>
</header>
<!-- Header End -->


<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Accueil</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Créer Un Compte</li>
      </ul>
      <div class="row">        
        <!-- Register Account-->
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Créer Un Compte</span><span class="subtext">Créer un compte avec nous</span></h1>

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Whoops!</strong> Il y avait quelques problèmes avec votre entrée.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h3 class="heading3">Vos informations personnelles</h3>
            <div class="registerbox">
              <fieldset>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Nom Complet:</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" name="name" value="{{ old('name') }}">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> E-mail:</label>
                  <div class="controls">
                    <input type="email" class="input-xlarge" name="email" value="{{ old('email') }}">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> mot de passe:</label>
                  <div class="controls">
                    <input type="password" class="input-xlarge" name="password">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label"><span class="red">*</span> Confirmez Le Mot De Passe:</label>
                  <div class="controls">
                    <input type="password" class="input-xlarge" name="password_confirmation">
                  </div>
                </div>
              </fieldset>
            </div>



            <div class="pull-left">
              J'ai lu et accepté les <a href="#" >Politique de confidentialité</a>
              &nbsp;
              <button type="submit" class="btn btn-orange">
                Inscription
              </button>

            </div>
            </form>

          <div class="clearfix"></div>
          <br>
        </div>        
        <!-- Sidebar Start-->
        <aside class="span3">
          <div class="sidewidt">
            <h2 class="heading2"><span>compte</span></h2>
            <ul class="nav nav-list categories">
              <li>
                <a href="#"> Mon Compte</a>
              </li>

              <li>
                <a href="{{url('auth/login')}}">
                  S'identifier</a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
@include('Pages.template.basefooter')
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/application.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script defer src="js/jquery.fancybox.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script  src="js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="js/jquery.ba-throttle-debounce.min.js"></script>
<script defer src="js/custom.js"></script>
</body>
</html>