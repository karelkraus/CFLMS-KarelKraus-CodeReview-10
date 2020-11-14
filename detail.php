<?php  
	include_once 'actions/db_connect.php';


	if($_GET['id']) {
		$id = $_GET['id'];

		$sql = "SELECT * FROM media WHERE id = {$id}";
		$result = $conn -> query($sql);

		$data = $result -> fetch_assoc();

		$availability = "text-success";
		if($data['status']=='reserved'){
			$availability = "text-danger";
		}

		$conn -> close();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid bg-light upBar">
		<div class="row mb-5">
			<h1 class="col-8 offset-2 text-center text-warning" style="text-shadow: 2px 2px 4px #000;">Item details</h1>
			<a class="col-2 text-right p-2" href="index.php"><button class="btn btn-warning" style="box-shadow: 2px 2px 6px #000;">Back to main page</button></a>
		</div>
	</div>

	<div class="container">

	<div class="card mb-3 text-center">
		<img src="<?php echo $data['image'] ?>" class="card-img detailImage">
	  <div class="card-img-overlay">
	    <h1 class="card-title text-info" style="text-shadow: 2px 2px 4px #000;"><?php echo $data['title'] ?></h1>
	    <h2 class="card-title text-secondary" style="text-shadow: 2px 2px 4px #000;">by <?php echo $data['author_name'] ?> <?php echo $data['author_surname'] ?></h2>
	    <p class="card-text <?php echo $availability ?> m-5 h5">Status: <?php echo $data['status'] ?></p>
	    <p class="card-text m-5 h4"><?php echo $data['description'] ?></p>
	    <p class="card-text"><small>Publish date: <?php echo $data['publish_date'] ?></small></p>
	    <p class="card-text"><small>Publisher: <?php echo "<a href='publisher.php?publisher_name=" .$data['publisher_name']."'>".$data['publisher_name']."</a>" ?></small></p>
	    <p class="card-text"><small>Address of Publisher: <?php echo $data['publisher_address'] ?></small></p>
	    <p class="card-text"><small>Size of Publisher: <?php echo $data['publisher_size'] ?></small></p>
	    <p class="card-text"><small>ISBN: <?php echo $data['ISBN'] ?></small></p>
	    <p class="card-text"><small>Type: <?php echo $data['type'] ?></small></p>
	  </div>
	</div>

	</div>

</body>
</html>