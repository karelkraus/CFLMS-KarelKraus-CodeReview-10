<?php  
	include_once 'actions/db_connect.php';


	if($_GET['id']) {
		$id = $_GET['id'];

		$sql = "SELECT * FROM media WHERE id = {$id}";
		$result = $conn -> query($sql);

		$data = $result -> fetch_assoc();

		$conn -> close();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit item</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div class="container-fluid bg-light upBar">
		<div class="row mb-5">
			<h1 class="col-8 offset-2 text-center text-warning" style="text-shadow: 2px 2px 4px #000;">Edit item</h1>
			<a class="col-2 text-right p-2" href="index.php"><button class="btn btn-warning" style="box-shadow: 2px 2px 6px #000;">Back to main page</button></a>
		</div>
	</div>

	<div class="box">

	<form class="createForm" action="actions/a_update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<div class="inputBox">
			<input type="text" placeholder="Title" name="title" value="<?php echo $data['title'] ?>" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Image URL" value="<?php echo $data['image'] ?>" name="image" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Author's name" value="<?php echo $data['author_name'] ?>" name="author_name" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Author's surname" value="<?php echo $data['author_surname'] ?>" name="author_surname" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="ISBN" value="<?php echo $data['ISBN'] ?>" name="ISBN">
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Description" value="<?php echo $data['description'] ?>" name="description" required>
		</div>
		<div class="inputBox">
			<input type="date" value="<?php echo $data['publish_date'] ?>" name="publish_date" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Publisher" value="<?php echo $data['publisher_name'] ?>" name="publisher_name" required>
		</div>
		<div class="inputBox">
			<input type="text" placeholder="Publisher's address" value="<?php echo $data['publisher_address'] ?>" name="publisher_address">
		</div>
		<div class="inputBox">
			<select name="publisher_size">
			  <option value="<?php echo $data['publisher_size'] ?>" selected><?php echo $data['publisher_size'] ?></option>
			  <option value="big">big</option>
			  <option value="medium">medium</option>
			  <option value="small">small</option>
			</select>
		</div>
		<div class="inputBox">
			<select name="type">
			  <option value="<?php echo $data['type'] ?>" selected><?php echo $data['type'] ?></option>
			  <option value="book">book</option>
			  <option value="CD">CD</option>
			  <option value="DVD">DVD</option>
			</select>
		</div>
		<div class="inputBox">
			<select name="status">
			  <option value="<?php echo $data['status'] ?>" selected><?php echo $data['status'] ?></option>
			  <option value="available">available</option>
			  <option value="reserved">reserved</option>
			</select>
		</div>
		<button class="btn btn-primary btn-lg btn-block" type="submit">UPDATE</button>
	</form>

	<a class="btn btn-warning btn-lg btn-block mt-2" href="index.php">Back to main page</a>
	</div>

</body>
</html>