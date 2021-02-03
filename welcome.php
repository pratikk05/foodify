<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    


    <meta charset="UTF-8">
    <meta name="description" content="Foodify">
    <meta name="keywords" content="Foodify">
    <meta name="author" content="Foodify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Foodify</title>
    <link href="assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/css/tastebite-styles.css" rel="stylesheet" type="text/css" media="all">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="welcome.php">
        <img src="assets/images/brands/brand4.svg" style="max-width: 161px;" alt="Tastebite">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse links" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="category.html">Recipes</a>
                    
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
                            <?php echo "Welcome ". $_SESSION['username']?></a>
                    </li>
                </ul>

            


        </div>
    </nav>

    <section class="tstbite-components tstbite-overlay mt-0 mt-md-4 mb-4">
    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
          <a href="indian.php">
        <img href src="assets/images/menus/menu90.jpg" class="d-block w-100" alt="panner"></a>
        <div class="carousel-dark carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/images/menus/menu90.jpg" class="d-block w-100" alt="...">
        <div class="carousel-dark carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/images/menus/menu90.jpg" class="d-block w-100" alt="...">
        <div class="carousel-dark carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      
    </a>
  </div>
</div>
    </section>


    <section class="tstbite-components bg-primary-light mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 offset-xl-3 offset-lg-2 text-center py-4 py-md-5">
                    <h2 class="mb-3 h1">Feedbacks?</h2>
                    <p class="f-size-24 font-weight-regular">Foodie people! Tell us more!</p>
                    <div class="input-group custom-input-group mt-4">
                        <input type="text" class="form-control" placeholder="Feedbacks">
                        <div class="input-group-append">
                        <a  href = "mailto:sakshiupdhyay@gmail.com ?subject=Feedback"
                                        role="button"><button class="btn btn-primary" type="button">Send Email</button></a>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="tstbite-footer pt-3 pt-md-5 bg-light-gray">
        <div class="container">
            <div class="row pt-4 pb-0 pb-md-5">
                <div class="col-md-6">
                    <div class="tastebite-footer-contnet pr-0 pr-lg-5 mr-0 mr-md-5">
                        <a href="index.html">
                            <img src="assets/images/brands/brand4.svg" alt="Tastebite">
                        </a>
                        <p class="mt-3 text-gray-300 pr-0 pr-lg-5 mr-0 mr-lg-4">"Food is the ingredient that binds
                            us together"</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <hr>
            <div class="row pb-4 pt-2 align-items-center">
                <div class="col-md-6 order-2 order-md-0">
                    <p class="text-gray-300 small text-left mb-0">Designed & developed by Sakshi</p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>