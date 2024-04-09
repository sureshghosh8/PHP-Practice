<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

 
</head>
<body>
    <?php include'menu.php';?>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/c1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
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
    <h2 class="text-center"> About us</h2>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <img src="images/c1.jpg" class="img-fluid aboutimg">
  </div>
  <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4"> I am PHP Developer.</h2>
        <p class="py-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae excepturi rerum beatae voluptatum? Eaque, corporis et. Illum esse voluptate nemo non aut, impedit voluptatum saepe ab fuga reiciendis! Veniam, sequi!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut facilis natus totam officiis sed at quia veniam, a perspiciatis nihil consectetur quas deserunt. Accusamus eaque ab error magni deserunt sint.
        </p>
        <a href="about.php" class="btn btn-success">Check More</a>
  </div>
</div>
</div>
</section>
<section class="my-5">
<div class="py-5">
    <h2 class="text-center"> Our Services</h2>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/c3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature:)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/c3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature:)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
        <div class="card">
  <img class="card-img-top" src="images/c3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature:)</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
        </div>
    </div>
</div>
</section>
<section class="my-5">
<div class="py-5">
    <h2 class="text-center"> Our Gallery</h2>
</div >
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
<div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
<div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
<div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
<div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
<div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
<div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
<div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
<div class="col-lg-4 col-md-4 col-12">
            <img src="images/c3.jpg" class="img-fluid pb-5">
</div>
</div>

</div>
</section>
<section class="my-5">
<div class="py-5">
    <h2 class="text-center"> Contact Us</h2>
</div >
<div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
        <div class="form-group">

    <label for="user">Username:</label>
    <input type="text" class="form-control" placeholder="Enter Username"  name="user" autocomplete="off" >
  </div>
        
        <div class="form-group">

    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  
  <div class="form-group">

<label for="mobile">Mobile:</label>
<input type="text" class="form-control" placeholder="Enter MobileNumber"  name="mobile" autocomplete="off" >
</div>
<div class="form-group">

<label for="comment">Comment:</label>
<textarea class="form-control" name="comments">Comment here:</textarea>
</div>
    
  <button type="submit" class="btn btn-success">Submit</button>

</form>
</div>
</section>
<footer>
    <p class="p-3 bg-dark text-white text-center">@PHPDeveloper2024</p>

</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>