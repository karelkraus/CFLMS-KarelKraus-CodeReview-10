<?php  
include_once 'actions/db_connect.php';

if ($_GET['id']) {
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
	<title>Delete item</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

	<div class="container-fluid bg-light upBar">
		<div class="row mb-5">
			<h1 class="col-8 offset-2 text-center text-warning" style="text-shadow: 2px 2px 4px #000;">Delete item</h1>
			<a class="col-2 text-right p-2" href="index.php"><button class="btn btn-warning" style="box-shadow: 2px 2px 4px #000;">Back to main page</button></a>
		</div>
	</div>

	<div class="box">
	<h2 class="text-light text-center mb-3">Delete item: <?php echo $data['title'] ?></h2>

	<form action="actions/a_delete.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
		<input class="btn btn-danger btn-lg btn-block" type="submit" value="Yes, delete">
	</form>

	<a class="btn btn-warning btn-lg btn-block mt-2" href="index.php">No, go to main page</a>
	</div>

</body>
</html>