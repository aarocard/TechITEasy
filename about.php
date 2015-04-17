<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TechITEasy - About</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php
    
    	require_once('navigation.php');
    
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-12">
                <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
            </div>
            <div class="col-md-12">
				<blockquote>Our goal is to bring expert knowledge and hands-on experience to every IT challenge our clients present, at an honest price.</blockquote>
            </div>
        </div>
        <!-- /.row -->
		
        <!-- Team Members -->
        <div class="row">
			<div class="col-lg-12">
					<h2 class="page-header">Our Team</h2>
			</div>
			<div class="col-md-3 text-center">
				<div class="thumbnail">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
					<div class="caption">
						<h3>Mike Busuttil<br>
							<small>Computer Consultant</small>
						</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
						<br />
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center" >
				<div class="thumbnail">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
					<div class="caption">
						<h3>Dave Fancsy<br>
							<small>IT Technician</small>
						</h3>
						<p>I am a Computer Networking major and I enjoy building and implementing network solutions.</p>
						<br />
						<br />
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="thumbnail">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
					<div class="caption">
						<h3>Bryan St. Pierre<br>
							<small>IT Technician</small>
						</h3>
						<p>I am a graduate of Computer Networking at St.Clair College and have a lot of great experience with computers, network connections and customer service.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center">
				<div class="thumbnail">
					<img class="img-responsive" src="http://placehold.it/750x450" alt="">
					<div class="caption">
						<h3>Chris D'Ambrosio<br>
							<small>IT Technician</small>
						</h3>
						<p>I am a Computer Networking student at St.Clair College. I have a passion for constructing and maintaining computers and the networks they accompany.</p>
					</div>
				</div>
			</div>
        </div>
        <!-- /.row -->

        <hr>

    </div>
    <!-- /.container -->
    
    <!-- Footer -->
    <?php
    
    	require_once('footer.php');
    
    ?>
	<!-- /Footer -->
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
