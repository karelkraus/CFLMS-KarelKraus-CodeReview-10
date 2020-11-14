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


	$sql = "INSERT INTO `media`(`title`, `image`, `author_name`, `author_surname`, `ISBN`, `description`, `publish_date`, `publisher_name`, `publisher_address`, `publisher_size`, `type`, `status`) VALUES ('$title','$image','$author_name','$author_surname','$ISBN','$description','$publish_date','$publisher_name','$publisher_address','$publisher_size','$type','$status')";

	

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Create item</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

	<div class="container-fluid bg-light upBar">
		<div class="row mb-5">
			<h1 class="col-8 offset-2 text-center text-warning" style="text-shadow: 2px 2px 4px #000;">Create item</h1>
			<a class="col-2 text-right p-2" href="../index.php"><button class="btn btn-warning" style="box-shadow: 2px 2px 6px #000;">Back to main page</button></a>
		</div>
	</div>


	<div class="box">
		<?php  
			if($conn->query($sql) === TRUE) {
		echo "<h2 class='text-info text-center mb-5'>New item was created</h2>" ;
    	echo "<a class='btn btn-info btn-lg btn-block mt-2' href='../create.php'>Back to create mode</a>";
        echo "<a class='btn btn-warning btn-lg btn-block mt-2' href='../index.php'>Back to main page</a>";
			}else {
				echo "Error " . $sql . ' ' . $conn->connect_error;
			}

			$conn->close();

		?>
		
	</div>

</body>
</html>