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
                
                
                        
                        <h5 class="py-3 mb-0 h2">Pad Thai</h5>
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
                                    <span>20 mins</span>
                                </li>
                                <li>
                                    <small>Cook Time</small>
                                    <span>30 min</span>
                                </li>
                                <li>
                                    <small>Total Time</small>
                                    <span>50 mins
                                       
                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-5">
                                <h6>Ingredients</h6>
                                <div class="checklist pb-2">
                                    <strong>For the Pad Thai </strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">4 ounces brown rice noodles</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 zucchini</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 red pepper</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">half a yellow onion</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 carrots</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 egg, beaten</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1/2 cup peanuts, chopped</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">/2 cup fresh herbs like cilantro, green onions, and basil, chopped</label>
                                    </div>
                                    
                                </div>
                                <div class="checklist pb-4">
                                    <strong>For the Sauce </strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">3 tablespoons fish sauce or vegan fish sauce substitute</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">3 tablespoons brown sugar (or sub another sweetener)</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">3 tablespoons chicken or vegetable broth</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 tablespoons white vinegar</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1 tablespoon soy sauce</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1 teaspoon chili paste (sambal oelek)</label>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5">
                                <h6>Instructions</h6>
                                <p>Place the uncooked noodles in a bowl of cold water to soak. 
Spiralize the zucchini, red pepper, and onion into noodle-like shapes. Cut the carrots into very small pieces (or spiralize them, too, if they’re big enough).
Shake up the sauce ingredients in a jar.
Heat a tablespoon of oil over medium high heat. 
Add the veggies – stir fry with tongs for 2-3 minutes or until tender-crisp (if they are not spiralized, they might need longer). Be careful not to overcook them – they’ll get soggy and heavy. Transfer to a dish and set aside.
Add another tablespoon of oil to the pan. Drain the noodles – they should be softened by now. 
Add the noodles to the hot pan and stir fry for a minute, using tongs to toss.
 Add the sauce and stir fry for another minute or two, until the sauce is starting to thicken and stick to the noodles. 
Push the noodles aside to make a little room for the egg – pour the beaten egg into the pan and let it sit for 30 seconds or so.
Toss everything around with the tongs. The egg mixture will stick to the noodles and everything will start getting sticky.
Add in the vegetables, toss together, and remove from heat. Stir in the peanuts and herbs and serve immediately.
</p>
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
                        <h5 class="py-3 mb-0 h2">Som Tum</h5>
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
                                    <span>30 min</span>
                                </li>
                                <li>
                                    <small>Total Time</small>
                                    <span>40 mins
                                       
                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-5">
                                <h6>Ingredients</h6>
                                <div class="checklist pb-2">
                                    <strong>For Som Tum</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 tablespoons roasted peanuts</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1-10 red bird’s eye chillies (depending on how brave you are)
                                            & ¼ cup peas / matar</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">5 small (or 2–3 large) garlic cloves</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 1⁄2 tablespoons palm sugar</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 yard-long beans (or green beans), cut into 2.5cm (1 inch) pieces</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">4 cherry tomatoes, sliced</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 tablespoons fresh lime juice</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 tablespoons Thai fish sauce (or 2 teaspoons salt)</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1⁄2 medium green papaya, peeled and shredded</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 carrot, shredded
                                        </label>
                                        
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">2 tablespoons dried shrimp (leave out for a vegetarian alternative)

                                        </label>
                                        
                                    </div>
                                   
                                </div>
                               
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5">
                                <h6>Instructions</h6>
                                <p>In a small, dry frying pan, toast the peanuts over a medium heat until golden brown. Remove from the pan and set aside. (There’s also a ready-toasted alternative you can find in the supermarkets).
                                    Coarsely pound the chillies and garlic together using a pestle and mortar. Add the palm sugar, beans and tomatoes. Lightly pound to combine, then squeeze in the lime juice and fish sauce.
                                    Lightly pound again, then add the green papaya and carrot. Pound again and toss to combine. The taste should be sweet and salty in perfect balance, with a sharp, sour and spicy tang.
                                    Spoon the salad into a serving bowl and sprinkle over the dried shrimp and toasted peanuts.
                                    </p>
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
