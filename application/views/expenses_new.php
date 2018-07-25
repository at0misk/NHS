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
				<h3>New Expense</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<form method="post" action="/expenses/create">
					<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" type="text" name="name" required>
					</div>
					<div class="form-group">
						<label for="name">Date</label>
						<input class="form-control" type="date" name="date" required>
					</div>
					<div class="form-group">
						<label for="name">Amount</label>	
						<input class="form-control" type="number" name="amount" required>
					</div>
					<div class="form-group">
						<label for="name">Category</label>
						<input class="form-control" type="text" name="category" required>
					</div>
					<input class="form-control" type="hidden" name="user_id" value="<?php echo $this->session->id; ?>">
					<input class="form-control btn-primary" type="submit" value="Create">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 header-col">
				<a href='/expenses'>My Expenses</a> | <a href="/expenses/new">Add New Expense</a> | <a href="/">Welcome Page</a> | <a href="/logout">Logout</a>
			</div>
		</div>
	</div>
</body>
</html>