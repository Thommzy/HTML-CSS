<?php  
session_start();

include_once('../includes/connection.php');

if (isset($_SESSION['logged_in'])) {
	// display index 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Timsport|Admin</title>
	<meta name="description" content="Timsport ">
	<link rel="stylesheet" href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="../text/css" href="css/stylee.css">
	<link rel="stylesheet" type="../text/css" href="css/animate.css">
  	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.css">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/font/font.css">
    <link rel="stylesheet" type="text/css" href="../css/Timsport.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico">
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
				<li class="active"><a href="../news.html">News</a></li>
				<li><a href="predictions.html">Predictions</a></li>
				<li><a href="transfer.html">Transfer</a></li>
			</ul>

				<a href="#"><i class="fa fa-twitter  fa-pull-right" style="color: #1DA1F2; font-size: 30px; " aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook fa-pull-right" style="color: #3B5998; font-size: 30px; " aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-instagram  fa-pull-right" style="color: #F28F4C; font-size: 30px; "  aria-hidden="true"></i></a>
		</div>
</nav> <!-- Navbar Ends -->

    <ol>
    	<li><a href="add.php">Add article</a></li>
    	<li><a href="delete.php">Delete article</a></li>
    	<li><a href="logout.php">Logout</a></li>
    </ol>


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
	if (isset($_POST['username'], $_POST['password'] )) {
		# code..
		$username = $_POST['username'];
		$password = md5($_POST ['password']);

		if (empty($username) or empty($password)) {
			# code...
			$error = "All fields are required!";
		} else {
			$query = $pdo->prepare("SELECT * FROM users WHERE user_name = ? AND  user_password = ?");

			$query->bindValue(1, $username);
			$query->bindValue(2, $password);

			$query->execute();

			$num= $query->rowCount();

			if ($num == 1) {
				// user entered correct details!
				$_SESSION['logged_in'] = true;
				header('Location: index.php');
				exit();				
			} else {
				// User entered false details
				$error = 'Incorrect details!';
			}

		}
	}

?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Timsport|Admin</title>
	<meta name="description" content="Timsport ">
	<link rel="stylesheet" type="text/css" href="../css/Timsport.css">
	<link rel="stylesheet" href="../css/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/stylee.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
  	<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/font-awesome/css/font-awesome.css">
    <link href="css/navbar-fixed-side.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/font/font.css">
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
			<a href="Timsport.html" class="navbar-brand">TIMSPORT</a>
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

     <br /><br />

     <?php  if (isset($error)) { ?>
     	<small style="color: #aa0000"><?php echo $error ?></small>
     	<br /><br />
     <?php } ?>

     


	<form action="index.php" method="post" autocomplete="off">
		<input type="text" name="username" placeholder="Username" />
		<input type="password" name="password" placeholder="password" />
		<input type="submit" name="Login" />
		
	</form>


	<script type="text/javascript" src="js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

<?php

}
?>