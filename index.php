<?php include_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<div class="container-fluid bg-light upBar">
		<div class="row mb-5">
			<h1 class="col-8 offset-2 text-center text-warning" style="text-shadow: 2px 2px 4px #000;">Welcome to the LIBRARY</h1>
			<a class="col-2 text-right p-2" href="create.php"><button class="btn btn-warning" style="box-shadow: 2px 2px 6px #000;">Add item</button></a>
		</div>
	</div>
	


	<div class="swiper-container">
    <div class="swiper-wrapper">
	<?php 
	$sql = "SELECT * FROM media WHERE type = 'book'";
	$result = $conn->query($sql);

	

	if($result->num_rows > 0){
	$rows=$result->fetch_all(MYSQLI_ASSOC);
	foreach($rows as $value ){
		$availability = "text-success";
		if($value['status']=='reserved'){
			$availability = "text-danger";
		}
		echo "
			<div class='swiper-slide'>
			<div class='card' style='width: 18rem;'>
			  <img src='".$value['image']."' class='card-img-top'>
			  <div class='card-body bg-light'>
			    <h5 class='card-title'>".$value['title']."</h5>
			    <p class='card-text ".$availability."'><small>Status: ".$value['status']."</small></p>
			    <p class='card-text'>".$value['description']."</p>
			    <a href='detail.php?id=" .$value['id']."' class='btn btn-info'>Show</a>
			    <a href='update.php?id=" .$value['id']."' class='btn btn-primary'>Edit</a>
			    <a href='delete.php?id=" .$value['id']."' class='btn btn-danger'>Delete</a>
			  </div>
			</div>
			</div>";
	}

	}
	?>
	</div>
	</div>

	<div class="swiper-container m-2">
    <div class="swiper-wrapper">
	<?php 
	$sql = "SELECT * FROM media WHERE type = 'CD' OR type = 'DVD'";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
	$rows=$result->fetch_all(MYSQLI_ASSOC);
	foreach($rows as $value ){
		$availability = "text-success";
		if($value['status']=='reserved'){
			$availability = "text-danger";
		}
		echo "
			<div class='swiper-slide'>
			<div class='card' style='width: 18rem;'>
			  <img src='".$value['image']."' class='card-img-top'>
			  <div class='card-body bg-warning'>
			    <h5 class='card-title'>".$value['title']."</h5>
			    <p class='card-text ".$availability."'><small>Status: ".$value['status']."</small></p>
			    <p class='card-text'>".$value['description']."</p>
			    <a href='detail.php?id=" .$value['id']."' class='btn btn-info'>Show</a>
			    <a href='update.php?id=" .$value['id']."' class='btn btn-primary'>Edit</a>
			    <a href='delete.php?id=" .$value['id']."' class='btn btn-danger'>Delete</a>
			  </div>
			</div>
			</div>";
	}

	}
	?>
	</div>
	</div>


	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
	    var swiper = new Swiper('.swiper-container', {
	      effect: 'coverflow',
	      grabCursor: true,
	      centeredSlides: true,
	      slidesPerView: 'auto',
	      coverflowEffect: {
	        rotate: 50,
	        stretch: 0,
	        depth: 100,
	        modifier: 1,
	        slideShadows: true,
	      },
	      pagination: {
	        el: '.swiper-pagination',
	      },
	    });
	  </script>

	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>