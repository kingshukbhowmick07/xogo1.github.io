<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'menu.php' ?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/3627096.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption" >
        <h3 style="color: black">PES</h3>
        <p style="color: black">PLAYING IS BELIEVING</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/wp7559208-fifa-2021-wallpapers.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color: white">FIFA</h3>
        <p style="color: white">PLAY WITH AN OPEN HEART</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/1133687.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption" >
        <h3 style="color: black">PUB-G</h3>
        <p style="color: black">PLAY RUSH</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/igor-karimov-fXmmSz5KkO8-unsplash.jpg" class="img-fluid aboutimage">
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<h2>THINGS U NEED TO KNOW</h2>
					<p>
					This article is only to inform about our creators and to ensure your swiftness towards our website
					</p>
				<a href="about.php"> check more </a>>
			</div>
		</div>		
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">TOURNAMENTS</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			
			<div class="col-lg-4-col-md-4-col-12">
				<div class="card">
  					<img class="card-img-top cardimg" src="images/cc1.jpg" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">PES-21</h4>
    					<p class="card-text">PLAYING IS BELIEVING</p>
    					<a href="#" class="btn btn-primary">tournament info</a>
  					</div>
				</div>
			</div>


			<div class="col-lg-4-col-md-4-col-12">
				<div class="card">
  					<img class="card-img-top cardimg" src="images/cc2.jfif" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">PUB-G</h4>
    					<p class="card-text">PLAY RUSH</p>
    					<a href="#" class="btn btn-primary">tournament info</a>
  					</div>
				</div>
			</div>

			<div class="col-lg-4-col-md-4-col-12">
				<div class="card">
  					<img class="card-img-top cardimg" src="images/cc3.jfif" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">fifa</h4>
    					<p class="card-text">PLAY WITH AN OPEN HEART</p>
    					<a href="#" class="btn btn-primary">tournament info</a>
  					</div>
				</div>
			</div>
		
		</div>
	</div>

<section class="my-">
	<div class="py-5">
		<h2 class="text-center">CONTACT US</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="contactinfo.php" method="post">
			<div class="form-group">
				<label>USERNAME</label>
				<input type="text" name="user" autocomplete="off" class="form-control">	
			</div>

			<div class="form-group">
				<label>Email-Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">	
			</div>

			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">	
			</div>

			<div class="form-group">
				<label>COMMENTS</label>
				<textarea class="form-control" name="comments"></textarea>
			</div>
	
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>	
</section>
	

</section>


<footer>
	<p class="p-3 bg-dark text-white text-center" >@ kingshukbhowmick@mail.com</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>