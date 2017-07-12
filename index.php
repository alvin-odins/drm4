<!DOCTYPE html>
 <html class="nie">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

	<link href="https://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope|Josefin+Sans:300|Open+Sans+Condensed:300|Raleway|Zilla+Slab:300" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="ammap.css" type="text/css" media="all" />
	<script src="assets/ammap.js" type="text/javascript"></script>
	<script src="assets/worldHigh.js" type="text/javascript"></script>
	<script src="assets/worldLow.js" type="text/javascript"></script>
	<script src="assets/light.js" type="text/javascript"></script>
	<link rel="stylesheet" href="assets/bootstrap1.css" type="text/css">
	<link rel="stylesheet" href="assets/main.css" type="text/css">
	<link rel="stylesheet" href="assets/font-awesome.min.css" type="text/css">

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
            <a class="navbar-brand" href="">DRM4HealthAdvocacyToolkit</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
  <!--            <li class=""><a href="#">Home</a></li>-->
              <li class="dropdown">
  							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Country Profiles<span class="caret"></span></a>
  							<ul class="dropdown-menu">
  								<li><a href="#">Kenya</a></li>
  								<li><a href="#">Senegal</a></li>
  								<li><a href="#">Tanzania</a></li>
                </ul>
  						</li>
  						<li class="dropdown">
  							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Data Sets<span class="caret"></span></a>
  							<ul class="dropdown-menu">
  								<li><a href="#">Compare Country Data</a></li>
  								<li><a href="#">Generate Report</a></li>
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
	
	<div id="mapdiv" style="width: 100%; height: 600px;background: #FFFFFF; margin-top: 55px; margin-bottom: 20px;"></div>
<!--
	<div class="prof_sec affix-top">
		<div class="container">
			<ul class="nav">
				<li class="nav-item"><a class="nav-link" href="#">Resources for CSO Capacity Building</a></li>
				<p>training, manuals, guides</p>
				<li class="nav-item"><a class="nav-link" href="#">Policy Instruments</a></li>
				<p>presentations</p>
				<li class="nav-item"><a class="nav-link" href="#">Data Sets</a></li>
				<p>compare, for country quantitiative data presentations</p>
			</ul>
		</div>
	</div>
-->
	
	<section id="intro" class="prof_sec">
		<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1 class="text-center">Health Advocacy Toolkit</h1>
				<h5 class="text-center">Country Level information backed with data visualizations for meaningful interraction</h5>
			</div>
		</div>
			
		<div class="row">
			<div class="col-md-3 col-sm-3"></div>
			<div id="sub-intro" class="col-md-6 col-sm-6">	
				<h3 class="text-center">Health Advocacy</h3>
				<ul class="list-inline text-center">
					<li>resources</li>
					<li>policy</li>
					<li>media</li>
				</ul>
				<p class="text-center">This toolkit is designed to give a first hand information on the situation around health through interractive data</p>
			</div>
			<div class="col-md-3 col-sm-3"></div>
		</div>
			
		<div id="resources" class="row">
			<div class="col-md-3 col-sm-6">
				<a href="#"><i class="glyphicon glyphicon-book"></i></a>
				<p></p>
				<h3>
					<a href="#">resources</a>
				</h3>
				<p>range of training manuals and guides for capacity building to civil society organisations</p>
			</div>	
			<div class="col-md-3 col-sm-6">
				<a href="#"><i class="glyphicon glyphicon-book"></i></a>
				<p></p>
				<h3>
					<a href="#">policy instruments</a>
				</h3>
				<p>knowledge base and up-to-date informaiton on exisiting and mainstream policy guidelines</p>
			</div>	
			<div class="col-md-3 col-sm-6">
				<a href="#"><i class="glyphicon glyphicon-book"></i></a>
				<p></p>
				<h3>
					<a href="#">data set</a>
				</h3>
				<p>visualization of country data and comparative analysis of country data</p>
			</div>	
			<div class="col-md-3 col-sm-6">
				<a href="#"><i class="glyphicon glyphicon-book"></i></a>
				<p></p>
				<h3>
					<a href="#">media center</a>
				</h3>
				<p>informationals and preiodicals</p>
			</div>	
		</div>
	</div>
	</section>

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
<script src="assets/map.js"></script>
<script src="assets/main.js"></script>
<script src="assets/responsive.min.js" type="text/css"></script>


</body>
</html>