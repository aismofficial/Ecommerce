<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css2?family=Sen:wght@800&display=swap" rel="stylesheet">
   <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
<style media="screen">
<?php include'style.css';?>
</style>
<title>About us</title>
</head>
<body>
<?php include 'header.php';?>
<br>
<br>
<br>
<br>
<div class="hero-image" style="background-image: url('images/banner.jpg'); padding-top: 90px; padding-bottom: 90px">
    <div class="banner">
      <div class="container ">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 text-center">

            <h1 class="mb-0 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home</a></span> <span>About</span></p>

          </div>
        </div>
      </div>
    </div>
  </div>
<br>
<br>
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-white"><i class="fa fa-envelope"></i> Contact us.
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-dark text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                <div class="card-body">
                    <p>Gulberg 3 Lahore Pakistan</p>
                    <p>75008 Lahore</p>
                    <p>Pakistan</p>
                    <p>Email : info@mens.com</p>
                    <p>Tel. +33 12 56 11 51 84</p>

                </div>

            </div>
        </div>
    </div>
</div>
<br>
<?php include 'footer.php'; ?>

  </body>
</html>
