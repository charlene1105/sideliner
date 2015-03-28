<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sideliner</title>
		<!-- Custom Font awesome -->
  		<link href="css/font-awesome.min.css" rel="stylesheet">
  		<!-- Bootstrap core CSS -->
  		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Sideliner CSS -->
		<link href="css/sideliner.css" rel="stylesheet">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-default navbar-responsive" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#" id="home"><img src="img/logo2.png" alt="" style="margin-top: -5px "width="150px" height="20px" class="img img-responsive"></a>
					</div><!-- /.navbar-header -->
				
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right" id="navbarGuest">
							<li><a href="#" id="signin"><i class="fa fa-sign-in"></i> Sign In</a></li>
							<li><a href="#" id="signup"><i class="fa fa-user-plus"></i> Sign Up</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right" id="navbarUser">
							<li><a href="#" id="inbox"><span class="badge" id="noinbox"></span> Inbox</a></li>
							<li class="dropdown">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks"></i> 
				                Projects <b class="caret"></b></a>
				                <ul class="dropdown-menu">
				                    <li><a href="#" id="postproject"><i class="fa fa-pencil-square-o"></i> Post Project</a></li>
				                    <li><a href="#" id="browseproject"><i class="fa fa-search"></i> Browse Project</a></li>
				                </ul>
				            </li>
							<li class="dropdown">
				                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
				                Profile <b class="caret"></b></a>
				                <ul class="dropdown-menu">
				                    <li><a href="#" id="viewprofile"><i class="fa fa-eye"></i> View Profile</a></li>
				                    <li><a href="#" id="editprofile"><i class="fa fa-pencil"></i> Edit Profile</a></li>
				                </ul>
				            </li>
							<li><a href="#" id="signout"><i class="fa fa-sign-out"></i> Sign Out</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav><!-- nav navbar -->
			</div><!-- /.row navibar -->
		</div><!-- /.container-fluid navbar -->
	
		<div class="container-fluid">
			<div class="row" id="content">
			
				<!-- /# page content -->
			</div><!-- /.row content -->
		</div><!-- /.container main content -->
		
		
		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation" id="footer">
				<p class="text-center">Sideliner 2015 </p>
			</nav>
		</footer>
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/moment.js"></script>
		<script src="js/livestamp.min.js"></script>
		<script src="js/bootbox.min.js"></script>
		<!-- Sideliner Scripts -->
		<script src="js/sideliner.js"></script>

	</body>
</html>