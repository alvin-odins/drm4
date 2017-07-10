<!DOCTYPE html>
 <html class="nie">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="ammap.css" type="text/css" media="all" />
	<script src="assets/ammap.js" type="text/javascript"></script>
	<script src="assets/worldHigh.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/bootstrap1.css" type="text/css">
	<link rel="stylesheet" href="assets/main.css" type="text/css">

  <title>DRM4H</title>
	 </head>
	 
<body>
	  <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">DRM4H</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
  <!--            <li class=""><a href="#">Home</a></li>-->
              <li class="dropdown">
  							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Country Profiles<span class="caret"></span></a>
  							<ul class="dropdown-menu">
  								<li><a href="#">Articles</a></li>
  								<li><a href="#">Kenya</a></li>
  								<li><a href="#">Senegal</a></li>
  								<li><a href="#">Tanzania</a></li>
                </ul>
  						</li>
  						<li class="dropdown">
  							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Sets<span class="caret"></span></a>
  							<ul class="dropdown-menu">
  								<li><a href="#">Actualize your business IDEAS</a></li>
  								<li><a href="#">Start your business</a></li>
  								<li><a href="#">Make it possible</a></li>
  								<li><a href="#">African Entrepreneurs</a></li>
  								<li><a href="#">Expan your business</a></li>
  							</ul>
  						</li>
  <!--						<li><a href="#about">FAQ</a></li>-->
              <li><a href="#">About us</a></li>

            </ul>
            <!-- <ul class="nav navbar-nav navbar-right">
              <#php if(!$this->session->userdata('logged_in')) : ?>
                <li><a href="<@php echo base_url(); ?>users/login">Sign in</a></li>
                <li><a href="<@php echo base_url(); ?>users/register">Register</a></li>
              <@php endif; ?>
              <@php if($this->session->userdata('logged_in')) : ?>
                <li><a href="<@php echo base_url(); ?>articles/create">Create Article</a></li>
                <li><a href="<@php echo base_url(); ?>categories/create">Create Category</a></li>
                <li><a href="<@php echo base_url(); ?>users/logout">Logout</a></li>
              <@php endif; ?>
  					</ul> -->
          </div><!--/.nav-collapse -->
        </div>
      </nav>
	
	<div id="mapdiv" style="width: 100%; height: 500px;background: #FFFFFF; margin-top: 60px;"></div>
	<div class="prof_sec affix-top">
		<div class="container">
			<ul class="nav">
				<li class="nav-item"><a class="nav-link" href="#">Health Professionals</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Donor Agencies</a></li>
				<li class="nav-item"><a class="nav-link" href="#">State Actors</a></li>
			</ul>
		</div>
	</div>

	<section id="mapnext" class="section mapnext bg_midblue">
		<div class="container">
			<div class="row">
				<h1 class="section text-center">Toolkit for Health Advocacy</h1>
			</div>
		</div>
	</section>
	
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="assets/jquery-2.1.4.js"></script>
<script src="assets/bootstrap.min.js"></script>
<script src="assets/main.js"></script>
<script src="assets/responsive.min.js" type="text/css"></script>


</body>
</html>