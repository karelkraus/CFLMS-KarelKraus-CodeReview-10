<?php  
include_once 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete item</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

	<div class="container-fluid bg-light upBar">
		<div class="row mb-5">
			<h1 class="col-8 offset-2 text-center text-warning" style="text-shadow: 2px 2px 4px #000;">Delete item</h1>
			<a class="col-2 text-right p-2" href="../index.php"><button class="btn btn-warning" style="box-shadow: 2px 2px 6px #000;">Back to main page</button></a>
		</div>
	</div>


	<div class="box">
		<?php  
			if ($_POST) {
				$id = $_POST['id'];

				$sql = "DELETE FROM media WHERE id = {$id}";
				if ($conn -> query($sql) === TRUE) {
					echo "<h2 class='text-danger text-center mb-5'>Selected item was deleted</h2>";
			        echo "<a class='btn btn-warning btn-lg btn-block mt-2' href='../index.php'>Back to main page</a>";
				}else {
					echo "Error updating record : " . $conn->error;
				}

				$conn -> close();
			}

		?>
		
	</div>

</body>
</html>