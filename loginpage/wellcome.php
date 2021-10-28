<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Doplas Indonesia</title>
<link rel="icon" href="assets/img/imagelogo.png">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<?php
$username = $_POST['username'];	
?>
<body>
<header>
	<nav class="navbar fixed-top bg-danger shadow">
		<div class="logo">
			<a href="index.php"><img src="assets/img/logo.png" width="200px"></a>
		</div>
		<div class="contacthome">
			<a href="mailto:bagustri734@gmail.com"><p><strong>Hi, <?php echo$username?></?></strong></p></a>
		</div>
	</nav>
</header>
<main>
</main>
<footer class="fixed-bottom bg-danger shadow">
	<p>Pusat donor darah kovalen plasma online &#169;2021, Doplas Indonesia</p>
</footer>
</body>
	<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="application/javascript" src="assets/js/bootstrap.min.js"></script>
</html>