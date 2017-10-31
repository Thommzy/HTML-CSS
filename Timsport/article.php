<?php  

	include_once('includes/connection.php');
	include_once('includes/article.php');

	$article = new Article;

	if(isset($_GET['id'])) {
		// display the article
		$id = $_GET['id'];
		$data = $article->fetch_data($id);
		?>


		<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Timsport|News</title>
	<meta name="description" content="Timsport ">
	<link rel="stylesheet" type="text/css" href="css/Timsport.css">
	<link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylee.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
  	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/font/font.css">
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
	<!-- Preloader Start -->
     <div class="preloader">
     <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
	<nav class="navbar">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="Timsport.html" class="navbar-brand">FANSPORT</a>
		</div>

		<div class="collapse navbar-collapse" id="mainNavbar" >
			<ul class="nav navbar-nav">
				<li><a href="#">Home</a></li>
				<li class="active"><a href="news.html">News</a></li>
				<li><a href="predictions.html">Predictions</a></li>
				<li><a href="transfer.html">Transfer</a></li>
			</ul>

				<a href="#"><i class="fa fa-twitter  fa-pull-right" style="color: #1DA1F2; font-size: 30px; " aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook fa-pull-right" style="color: #3B5998; font-size: 30px; " aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-instagram  fa-pull-right" style="color: #F28F4C; font-size: 30px; "  aria-hidden="true"></i></a>
		</div>
</nav> <!-- Navbar Ends -->

	<h4><?php echo $data ['article_title'] ?>-
		<small>
			posted <?php echo date(' l <b>,</b> jS F Y', $data['article_timestamp']) ?>		
		</small>
	</h4>

	<p>
		<?php echo $data ['article_content']; ?>
	</p>

	<a href="index.php">&larr; Back</a>


	<script type="text/javascript" src="js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
		<?php 

	} else {
		header('Location: index.php');
		exit();
	}

?>