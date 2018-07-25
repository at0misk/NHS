<!DOCTYPE html>
<html>
<head>
	<title>NHS Expenses</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<style type="text/css">
		.header-col{
			text-align: center;
			margin: 30px 0px;
		}
		.errors{
			color: red;
			margin-top: 15px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12 header-col">
			<?php   if(isset($_SESSION['email'])){ 
		   		echo "<h3>Hello " .  $this->session->first . " " . $this->session->last . "!</h3>"; 
				   	}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-3">
			<h3>Login</h3>
			<form method="post" action="login">
				<input class="form-control" type="text" name="email" placeholder="Email" required>
				<input class="form-control" type="password" name="password" placeholder="Password" required>
				<input class="form-control btn-primary" type="submit" value="Login">
			</form>
			<?php
				if($this->session->flashdata('login_error')){
					echo "<p class='errors'>" . $this->session->flashdata('login_error') . "</p>";
				}
			?>
		</div>
		<div class="col-sm-3">
			<h3>Register</h3>
			<form method="post" action="users">
				<input class="form-control" type="text" name="first" placeholder="First Name" required>
				<input class="form-control" type="text" name="last" placeholder="Last Name" required>
				<input class="form-control" type="text" name="email" placeholder="Email" required>
				<input class="form-control" type="password" name="password" placeholder="Password" required>
				<input class="form-control btn-primary" type="submit" value="Login">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 header-col">
			<?php   if(isset($_SESSION['email'])){
						echo "<a href='/expenses'>My Expenses</a> | <a href='/expenses/new'>Add New Expense</a> | <a href='/'>Welcome Page</a> | <a href='/logout'>Logout</a>";
					}
			?>
		</div>
	</div>
</div>
</body>
</html>