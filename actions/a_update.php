<?php  
include_once 'db_connect.php';

if ($_POST) {

	$title = $_POST['title'];
	$image = $_POST['image'];
	$author_name = $_POST['author_name'];
	$author_surname = $_POST['author_surname'];
	$ISBN = $_POST['ISBN'];
	$description = $_POST['description'];
	$publish_date = $_POST['publish_date'];
	$publisher_name = $_POST['publisher_name'];
	$publisher_address = $_POST['publisher_address'];
	$publisher_size = $_POST['publisher_size'];
	$type = $_POST['type'];
	$status = $_POST['status'];
	$id = $_POST['id'];

	$sql = "UPDATE `media` SET `title`='$title',`image`='$image',`author_name`='$author_name',`author_surname`='$author_surname',`ISBN`='$ISBN',`description`='$description',`publish_date`='$publish_date',`publisher_name`='$publisher_name',`publisher_address`='$publisher_address',`publisher_size`='$publisher_size',`type`='$type',`status`='$status' WHERE id = {$id}";

	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit item</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

	<div class="container-fluid bg-light upBar">
		<div class="row mb-5">
			<h1 class="col-8 offset-2 text-center text-warning" style="text-shadow: 2px 2px 4px #000;">Edit item</h1>
			<a class="col-2 text-right p-2" href="../index.php"><button class="btn btn-warning" style="box-shadow: 2px 2px 6px #000;">Back to main page</button></a>
		</div>
	</div>


	<div class="box">
		<?php  
			if($conn -> query($sql) === TRUE) {

				echo "<h2 class='text-primary text-center mb-5'>The item was updated</h2>" ;
				echo "<a class='btn btn-primary btn-lg btn-block mt-2' href='../update.php?id=" .$id."'>Back to edit mode</a>";
        		echo "<a class='btn btn-warning btn-lg btn-block mt-2' href='../index.php'>Back to main page</a>";
			}else {
				echo "Error while updating record : ". $conn->error;
			}


			$conn -> close();

		?>
		
	</div>

</body>
</html>