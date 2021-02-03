<?php 

include 'comment.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, comment)
			VALUES ('$name', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>



<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tastebite">
    <meta name="keywords" content="Tastebite">
    <meta name="author" content="Tastebite">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Foodify - Recipe</title>
    <link href="assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="assets/css/tastebite-styles.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="style.css">

    
    
</head>

<body>

    <section class="tstbite-section p-0"> 

        <div class="container">

            <header class="tstbite-header bg-white">
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
                   
                </ul>

            


        </div>
    </nav>
            </header>
        </div>


        <div class="container">

            <section class="tstbite-components my-4 my-md-5">
                
                <div class="d-sm-flex">
                    <div class="tstbite-svg order-sm-2 ml-auto">
                        <div class="tstbite-feature pt-0">

                            <a href="#0">
                                <svg data-name="feather-icon/share copy" xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewbox="0 0 32 32">
                                    <rect data-name="Bounding Box" width="32" height="32" fill="rgba(255,255,255,0)">
                                    </rect>
                                    <path
                                        d="M20,26.669a1.318,1.318,0,0,1-.77-.251l-8.558-6.113L2.108,26.418a1.319,1.319,0,0,1-.77.251A1.362,1.362,0,0,1,.41,26.3,1.314,1.314,0,0,1,0,25.333V4A4,4,0,0,1,4,0H17.333a4,4,0,0,1,4,4V25.333A1.34,1.34,0,0,1,20,26.669Zm-9.329-9.336a1.329,1.329,0,0,1,.776.248l7.225,5.161V4a1.335,1.335,0,0,0-1.334-1.333H4A1.335,1.335,0,0,0,2.666,4V22.742l7.225-5.161A1.324,1.324,0,0,1,10.666,17.333Z"
                                        transform="translate(5.333 2.667)"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                
                
                        
                        <h5 class="py-3 mb-0 h2">Sessame Noodles</h5>
                    </div>
                </div>

                <div class="blog-detail">
                    <hr>

                    <div class="rounded-12 overflow-hidden position-relative tstbite-svg">
                        <img src="assets/images/menus/menu144.jpg" class="w-100" alt="Menu">

                    </div>
                    <br>
                    <div class="row mt-0 mt-md-5">
                        <div class="col-md-12">
                            <ul class="list-unstyled component-list tstbite-svg">
                                <li>
                                    <small>Prep Time</small>
                                    <span>10 mins</span>
                                </li>
                                <li>
                                    <small>Cook Time</small>
                                    <span>10 min</span>
                                </li>
                                <li>
                                    <small>Total Time</small>
                                    <span>20 mins
                                       
                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-5">
                                <h6>Ingredients</h6>
                                <div class="checklist pb-2">
                                    <strong>For Sesame Noodles</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">8 oz. package Explore Cuisine chickpea spaghetti</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 tsp vegetable oil</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 red bell pepper thinly sliced</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 carrot thinly sliced or cut into matchsticks</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 head broccoli cut into bite-sized florets</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 green onions or scallions thinly sliced (optional, for serving)</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp toasted sesame seeds (optional, for serving)</label>
                                    </div>
                                   
                                </div>
                                <div class="checklist pb-4">
                                    <strong>For the Sauce</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1/4 cup low-sodium soy sauce</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">4 cloves garlic minced</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">2 tbsp coconut sugar (or use brown sugar)</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp chili-garlic sauce (or use sriracha, etc.)</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp hoisin sauce</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp toasted sesame oil</label>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5">
                                <h6>Instructions</h6>
                                <p>Boil a large pot of water. Cook the Explore Cuisine chickpea spaghetti according to package directions until cooked through. Drain and rinse with cold water.
Whisk together all of the sauce ingredients in a small bowl. Adjust the seasoning to taste if desired.
While the pasta cooks, heat the oil in a large skillet or wok over medium-high heat. Add the bell pepper and carrot. 
Cook, stirring frequently, until starting to become tender, about 3 minutes. Add the broccoli, and cook for another 2 minutes until the broccoli turns bright green.
Add the cooked chickpea noodles and sauce mixture, folding gently to combine. Continue to cook for about 3 more minutes, or until the sauce is thickened slightly and heated throughout. Serve hot, garnished with green onion and sesame seeds if desired.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-0 my-md-5 py-1 py-md-5">
                    
                    <hr class="orange hr-11">
                </div>
                <div class="d-sm-flex">
                    <div class="tstbite-svg order-sm-2 ml-auto">
                        <div class="tstbite-feature pt-0">

                            <a href="#0">
                                <svg data-name="feather-icon/share copy" xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewbox="0 0 32 32">
                                    <rect data-name="Bounding Box" width="32" height="32" fill="rgba(255,255,255,0)">
                                    </rect>
                                    <path
                                        d="M20,26.669a1.318,1.318,0,0,1-.77-.251l-8.558-6.113L2.108,26.418a1.319,1.319,0,0,1-.77.251A1.362,1.362,0,0,1,.41,26.3,1.314,1.314,0,0,1,0,25.333V4A4,4,0,0,1,4,0H17.333a4,4,0,0,1,4,4V25.333A1.34,1.34,0,0,1,20,26.669Zm-9.329-9.336a1.329,1.329,0,0,1,.776.248l7.225,5.161V4a1.335,1.335,0,0,0-1.334-1.333H4A1.335,1.335,0,0,0,2.666,4V22.742l7.225-5.161A1.324,1.324,0,0,1,10.666,17.333Z"
                                        transform="translate(5.333 2.667)"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <strong>


                        </strong>
                        <h5 class="py-3 mb-0 h2">Vegetable Fried Rice</h5>
                    </div>
                </div>

                <div class="blog-detail">
                    <hr>

                    <div class="rounded-12 overflow-hidden position-relative tstbite-svg">
                        <img src="assets/images/menus/menu144.jpg" class="w-100" alt="Menu">

                    </div>
                    <br>
                    <div class="row mt-0 mt-md-5">
                        <div class="col-md-12">
                            <ul class="list-unstyled component-list tstbite-svg">
                                <li>
                                    <small>Prep Time</small>
                                    <span>15 mins</span>
                                </li>
                                <li>
                                    <small>Cook Time</small>
                                    <span>30 min</span>
                                </li>
                                <li>
                                    <small>Total Time</small>
                                    <span>45 mins
                                       
                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-5">
                                <h6>Ingredients</h6>
                                <div class="checklist pb-2">
                                    <strong>For Cooking Rice</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 cup basmati rice or long grained rice – 190 to 200 grams</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">4 to 4.5 cups water
                                            </label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">½ teaspoon salt or add as required</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 to 3 drops toasted sesame oil or any neutral oil</label>
                                    </div>
                                    
                                   
                                </div>
                                <div class="checklist pb-4">
                                    <strong>Other Ingredients</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">3 tablespoons toasted sesame oil or any neutral oil</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 star anise</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">¾ to 1 teaspoon finely chopped garlic or 3 to 4 small to medium garlic cloves</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">½ teaspoon finely chopped ginger or ½ inch ginger – optional</label>
                                    </div>
                                    
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id=""  class="form-check-input">
                                        <label class="form-check-label" >¼ cup chopped spring onion whites (scallions)
                                            </label>
                                        
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">¼ cup finely chopped french beans</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">¼ cup finely chopped carrots</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">¼ to ½ cup finely chopped cabbage – optional</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">¼ cup chopped bell pepper or capsicum – red, green or yellow</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 cup chopped button mushrooms</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 tablespoon finely chopped celery – skip if you do not have</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">3 tablespoons soy sauce (naturally brewed) or tamari – can add as required</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 teaspoon rice wine or rice vinegar</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">½ teaspoon black pepper powder or add as required</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 tablespoons chopped spring onions greens</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">salt as required</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5">
                                <h6>Instructions</h6>
                                <p>Cooking Rice:
Rinse rice very well till the water runs clear of starch. Soak rice in water for 30 mins. Drain and keep aside.
In a pot, bring water to a gentle boil with salt and 2 to 3 drops of toasted sesame oil.
Add the soaked and drained rice to the hot water.
On a low to medium to medium-high heat simmer rice without the lid.
When rice becomes al dente or just about cooked, remove the pot from the heat. Strain the rice in a colander or sieve.
You can also gently rinse cooked rice in water so that they stop cooking and don't stick to each other. Cover the cooked rice and set aside until the rice cools completely. You can even refrigerate rice with a covered lid for 30 minutes.
Chopping Veggies:
When the cooked rice is cooling, chop the veggies finely and keep aside. 
Remember to chop the french beans very finely. They take more time to cook than other veggies. You can also blanch them first and then cook. Another option is to add the beans first and then add the other vegetables.
Making Fried Rice:
Heat oil in a wok or a pan. First add the star anise and fry for a few seconds or until the oil becomes fragrant.
Add the garlic, ginger and sauté for some seconds. No need to brown the garlic.
Add the spring onions whites and sauté for about 2 minutes.
Then add finely chopped french beans.
Stir fry french beans for 2 to 3 minutes over medium to medium-high heat.
Add the remaining finely chopped veggies, including mushrooms and celery. Increase the heat to a high to thoroughly cook all of the vegetables.
You have to continuously toss and stir while frying so that the veggies are uniformly cooked and do not get burnt.
The vegetables have to be stir-fried, until they are almost cooked and yet retain their crunchiness and crispiness. Stir-frying vegetables on high heat takes about 4 to 6 minutes.
Add the soy sauce, salt and pepper. Stir quickly and add cooked and cooled rice. Stir fry for a few minutes until the sauce has coated the rice well. Keep a check when adding salt, as soy sauce already has salt in it.
Serve the fried rice hot as it is or with with your favorite Chinese side.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-0 my-md-5 py-1 py-md-5">
                    
                    <hr class="orange hr-11">
                </div>

                <div class="my-5 pt-0 pt-md-3">
                    <div class="border-bottom mb-4 pb-3">
                        <h2 class="d-inline-block">Comments</h2>

                    </div>


                </div>
                
                    <div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
            </section>


        </div>

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
    </section> 
    
    

    <script src="assets/js/bootstrap.bundle.min.js" type="f28a7ad93ec33f5d43a7272b-text/javascript"></script>
    <script src="assets/js/html5.min.js" type="f28a7ad93ec33f5d43a7272b-text/javascript"></script>
    <script src="assets/js/sticky.min.js" type="f28a7ad93ec33f5d43a7272b-text/javascript"></script>
    <script src="assets/js/swiper-bundle.min.js" type="f28a7ad93ec33f5d43a7272b-text/javascript"></script>
    <script src="assets/js/masonry.min.js" type="f28a7ad93ec33f5d43a7272b-text/javascript"></script>
    <script src="assets/js/tastebite-scripts.js" type="f28a7ad93ec33f5d43a7272b-text/javascript"></script>
    <script src="../../cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="f28a7ad93ec33f5d43a7272b-|49" defer=""></script>

       
</body>

</html>
