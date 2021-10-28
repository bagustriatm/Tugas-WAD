<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Doplas Indonesia</title>
<link rel="icon" href="assets/img/imagelogo.png">
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
	<nav class="navbar fixed-top bg-danger shadow">
		<div class="logo">
			<a href="index.php"><img src="assets/img/logo.png" width="200px"></a>
		</div>
		<div class="contacthome">
			<a href="mailto:bagustri734@gmail.com"><p><strong>Contact Us</strong></p></a>
		</div>
	</nav>
</header>
<main>
	<div class="spacing">	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	</div>
	<section>
		<div class="card rectangle m-auto bg-danger shadow">
			<h2 class="card-header text-white shadow">LOGIN</h2>
			<form action="wellcome.php" method="post" class="loginform">
				<div class="mb-3">
					<label for="nameofcustomer" class="form-label" style="color: white; padding-left: 10px">USERNAME</label>
					<input type="text" class="form-control label" id="username" aria-describedby="username" name="username" placeholder="Username" required>
				</div>
				<div class="mb-3">
					<label for="nameofcustomer" class="form-label" style="color: white; padding-left: 10px">PASSWORD</label>
					<input type="password" class="form-control label" id="password" aria-describedby="username" name="password" placeholder="Password" required>
				</div>
				<a href="#"><p style="color: aqua;">Lupa kata sandi?</p></a>
				<table>
					<tr><td><button type="Submit" class="btn btn-primary btnlogin">Login</button></td>
						<td class="text-white p-2">or</td>
						<td class="text-white p-2 textlink">Create New Account</td>
					</tr>
				</table>
			</form>
		</div>
	</section>
		<div class="spacing">	
	<br>
	<br>
	<br>

	</div>
</main>
<footer class="fixed-bottom bg-danger shadow">
	<p>Pusat donor darah kovalen plasma online &#169;2021, Doplas Indonesia</p>
</footer>
</body>
	<script type="application/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="application/javascript" src="assets/js/bootstrap.min.js"></script>
</html>