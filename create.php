<!DOCTYPE html>
<html>
<head>
	<title>Create item</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div class="container-fluid bg-light upBar">
		<div class="row mb-5">
			<h1 class="col-8 offset-2 text-center text-warning" style="text-shadow: 2px 2px 4px #000;">Create item</h1>
			<a class="col-2 text-right p-2" href="index.php"><button class="btn btn-warning" style="box-shadow: 2px 2px 6px #000;">Back to main page</button></a>
		</div>
	</div>

	<div class="box">

	<form action="actions/a_create.php" method="post">
		<div class="inputBox">
			<input type="text" placeholder="Title" name="title" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Image URL" name="image" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Author's name" name="author_name" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Author's surname" name="author_surname" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="ISBN" name="ISBN">
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Description" name="description" required>
		</div>
		<div class="inputBox">
			<input type="date" name="publish_date" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Publisher" name="publisher_name" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Publisher's address" name="publisher_address">
		</div>
		<div class="inputBox">
			<select name="publisher_size">
			  <option disabled selected>Publisher's size</option>
			  <option value="big">big</option>
			  <option value="medium">medium</option>
			  <option value="small">small</option>
			</select>
		</div>
		<div class="inputBox">
			<select name="type">
			  <option disabled selected>Type of item</option>
			  <option value="book">book</option>
			  <option value="CD">CD</option>
			  <option value="DVD">DVD</option>
			</select>
		</div>
		<div class="inputBox">
			<select name="status">
			  <option disabled selected>Status</option>
			  <option value="available">available</option>
			  <option value="reserved">reserved</option>
			</select>
		</div>
		<button class="btn btn-info btn-lg btn-block" type="submit">ADD</button>
	</form>

	<a class="btn btn-warning btn-lg btn-block mt-2" href="index.php">Back to main page</a>

	</div>

</body>
</html>