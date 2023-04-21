<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@500&display=swap" rel="stylesheet">

</head>
<body>



<nav class= "  navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="py-1 "><img src="images/nett.jpg" width="50" height="50"></div> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a> 
      </li>
        <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
   
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>






<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Netflix-ok.webp" alt="netflix " width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/Netflix2.jpg" alt="Netflix-ok" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/netflix.jpg" alt="Netflix" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>







 <section class="my-5">
 	<div class="py-5">
 		<h2 class="text-center"> Our Services</h2>
 	</div>
     
     <div class="container-fluid">
     	<div class="row">
     		<div class="col-lg-4 col-mod-4 col-12">
     			 		<div class="card" >
				<img class="card-img-top aboutgg" src="images/ginny.jpg" alt="Card image">
					  	<div class="card-body">
					    <h4 class="card-title"> LATEST MOVIES  </h4>
					    <p class="card-text">new release movies</p>
					    <a href="#" class="btn btn-danger"> Watch now</a>
					   	</div>
					  	</div>
     		</div>

     		<div class="col-lg-4 col-mod-4 col-12">
     			 		<div class="card">
				<img class="img-fluid aboutgg" src="images/Vincenzo.webp" alt="Card image">
					  	<div class="card-body">
					    <h4 class="card-title"> K DRAMA </h4>
					    <p class="card-text">new release movies</p>
					    <a href="#" class="btn btn-danger"> Watch now</a>
					   	</div>
					  	</div>
     		</div>

     		<div class="col-lg-4 col-mod-4 col-12">
     			 		<div class="card" >
				<img class="card-img-top aboutgg" src="images/RRR.jpg" alt="Card image">
					  	<div class="card-body">
					    <h4 class="card-title"> SOUTH INDIAN </h4>
					    <p class="card-text">new release movies</p>
					    <a href="#" class="btn btn-danger" color="red"> Watch now</a>
					   	</div>
					  	</div>
     		</div>
     	</div>
     </div>
 </section>




 <section class="my-5 bg-light ">
 	
 	<div class="py-5">
 		<h2 class="text-center"> login </h2>
 	</div>

 	<div class="w-50 m-auto">
 		<form action="userinfo.php" method="post">
 			
 			<div class="form-group">
 			  <label> Username</label>
 			  <input type="text" name="user" autocomplete="off" class="form-control">	
 			</div>

 			<div class="form-group">
 			  <label>Email Id</label>
 			  <input type="text" name="email" autocomplete="off" class="form-control">	
 			</div>

 			<div class="form-group">
 			  <label>mobile</label>
 			  <input type="text" name="mobile" autocomplete="off" class="form-control">	
 			</div>

 			<div class="form-group">
 				<label>comment</label>
 				<textarea name="comment"class="form-control">
 					
 				</textarea>
 			</div>

 			<button type="submit" class="btn btn-danger">Submit</button>
 		</form>
 	</div>
 </section>




 <div class=" py-3 d-flex flex-row-reverse bg-dark">
	
  <div class="p-2 text-light bg-dark">     cookies</div>
  <div class="p-2 text-light bg-dark">     privacy</div>
   <div  class=" p-2 text-light bg-dark">     terms of sevices</div>
</div>




  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>