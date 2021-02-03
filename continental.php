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
                    <li class="nav-item">
                        <a class="nav-link" href="welcome.php"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
                            <?php echo "Welcome ". $_SESSION['username']?></a>
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
                        <strong>


                        </strong>
                        <h5 class="py-3 mb-0 h2">Veg lasagna</h5>
                    </div>
                </div>

                <div class="blog-detail">
                    <hr>

                    <div class="rounded-12 overflow-hidden position-relative tstbite-svg">
                        <img src="assets/images/menus/menu150.jpg" class="w-100" alt="Menu">

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
                                    <span>20 min</span>
                                </li>
                                <li>
                                    <small>Total Time</small>
                                    <span>30 mins
                                       
                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-5">
                                <h6>Ingredients</h6>
                                <div class="checklist pb-2">
                                    <strong>For White Sauce</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp butter</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp all purpose flour</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 cup milk</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">¾ cup cheese</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">Salt to taste</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp freshly crushed black pepper</label>
                                    </div>
                                    
                                       
                                </div>
                                <div class="checklist pb-4">
                                    <strong>For Red Sauce</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">6-7 tomatoes</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">3-4 garlic cloves chopped</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">2 tbsp butter
                                        </label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">Salt to taste</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">½ tbsp black pepper</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp Italian seasoning</label>
                                    </div>
                                    
                                   
                                </div>
                                <div class="checklist pb-4">
                                    <strong>For Stuffing</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp minced garlic</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1/3 cup zucchini finely chopped</label>
                                    </div>
                                    
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1/3 cup white onion finely chopped</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1/3 cup red bell pepper finely chopped</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1/3 cup green bell pepper finely chopped</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1/3 cup yellow bell pepper finely chopped</label>
                                    </div> <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1/3 cup spinach finely chopped</label>
                                    </div>
                                    
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">Salt to taste</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">1 tbsp oregano</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">3 – 4 basil leaves</label>
                                    </div>
                                    
                                    
                                   
                                </div>
                                <div class="checklist pb-4">
                                    <strong>For Layering</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name=""
                                            class="form-check-input">
                                        <label class="form-check-label" for="">8 – 10 lasagna sheets</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 to 1 ½ cup cheese</label>
                                    </div>
                                   
                                    
                                    
                                   
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5">
                                <h6>Instructions</h6>
                                <p>Preheat oven to 275 F
                                    This recipe includes 5 major steps:
                                    1. Prepare White Sauce
                                    • In sauce pan melt butter and all purpose flour.
                                    • Cook the flour for 2 – 3 minutes on slow flame, while stirring continuously
                                    • Mixture is smooth and bubbly; remove from heat. And gradually add milk just make sure lumps must be avoided. So stir continuously
                                    • Again cook it on medium flame for another 2 – 3 minutes till sauce get thicken, meanwhile stir continuously
                                    • Add salt and black pepper, mix it well and switch of the flame
                                    • At the end add cheese and let it mix and melt. I have used processed cheese. You can add any Italian cheese or you can even avoid cheese of you want
                                    2. Prepare Red Sauce
                                    • Blanch tomatoes and remove skin. Then roughly crush tomatoes into blander
                                    • In next sauce pan melt butter. Add garlic and sauté it for 1 minute.
                                    • Now add tomatoes and bring to boil. Then reduce heat to medium-law, cover the pan with lid. Stir occasionally, cook it for 10 minutes
                                    • Finally add salt, pepper, Italian seasoning, mix it well; cook it for 2 minutes
                                    • Red sauce is ready to serve
                                    3. Roast Vegetable
                                    • In a sauté pan, add butter and garlic. Cook garlic until turn brown then add onions and stir it well
                                    • Cook just for 2 minutes and add all other vegetables: zucchini, red, green, yellow bell pepper and spinach.
                                    • Sauté all vegetables and cook till vegetables look soften
                                    • Add salt, pepper and oregano, mix all seasoning well. Switch of flame, finally mix basil leaves
                                    4. Layering
                                    • Before layering, you need to prepare lasagna pasta sheets.
                                    • Cook the lasagna sheets according to instruction written on package. Let them cool for later use.
                                    • To assemble the lasagna, take 9-by-13-inches baking dish. Spray or grease it with cooking spray.
                                    • Start with small amount of red sauce at bottom of your backing dish to keep lasagna sheets moist and prevent from sticking to dish.
                                    • Take 2 – 3 sheets of your pasta and put them on red sauce. Remember, you can cut sheets fit into backing dish.
                                    • Push or fold inside the ends of your sheets into the pan before baking, as any that extend over the edges may burn or dry out and become hard and brittle.
                                    • Next step is pour read sauce into first layer with pasta. Spread out over pasta sheets and after that add white sauce on that. I prefer to add same quantity of red and white sauce. But you can vary according to your taste.
                                    • Add vegetables and spread out over the white sauce. Use 1/3 amount of your roasted vegetables.
                                    • Last part is ass cheese. I have make combination of mozzarella and processed cheese. You can prefer according to your taste.
                                    • Now again put layer of pasta and repeat the process for 2 times.
                                    • At last add red sauce and lots of cheese at top. And your lasagna is ready to go into oven.
                                    5. Baking
• Bake uncovered for 40 – 50 minutes. Let it give rest for 15 minutes before serving.
2)bread and tomato soup
preparation time:- 5 mins
cooking time:-5 mins
When we haven't got time for lunch, bread and fresh tomatoes sauce are the solution. An invention of ours for an hectic but tasteful life.

Ingredients for 4/6 people
1 kg of red tomatoes on the wine
400 g stale bread
100 ml extra virgin olive oil RoZò
1 onion
basil
salt
pepper
Chop the onion Finely and fry it in extra virgin olive oil Mackè. Bring a large pot filled with water to a boil. Turn off the heat and dip the tomatoes.
 Leave them in the boiling water for about ten minutes before peeling them and cutting them into cubes. Add the diced tomato into the pan with the onion. 
Season with salt and pepper and cook over very low heat, covered for 20 minutes without adding more liquid.
 Once the tomatoes are cooked, remove them from heat and sprinkle them with some chopped basil leaves.
 Cut the stale bread into cubes. Spread the bread on serving plates, pour the tomato soup. If you like, sprinkle with grated Parmesan cheese. 
This dish is great served both cold and hot.
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
                        <h5 class="py-3 mb-0 h2">Bread and Tomato soup</h5>
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
                                    <span>5 mins</span>
                                </li>
                                <li>
                                    <small>Cook Time</small>
                                    <span>5 min</span>
                                </li>
                                <li>
                                    <small>Total Time</small>
                                    <span>10 mins
                                       
                                    </span>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-5">
                                <h6>Ingredients</h6>
                                <div class="checklist pb-2">
                                    <strong>For Bhaji</strong>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 kg of red tomatoes on the wine</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">400 g stale bread</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">100 ml extra virgin olive oil RoZò</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">1 onion</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">basil</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">Salt</label>
                                    </div>
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="" name="" class="form-check-input">
                                        <label class="form-check-label" for="">pepper</label>
                                    </div>
                                   
                                   
                                </div>
                                </div>
                                
                            
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5">
                                <h6>Instructions</h6>
                                <p>Chop the onion Finely and fry it in extra virgin olive oil Mackè. Bring a large pot filled with water to a boil. Turn off the heat and dip the tomatoes.
                                    Leave them in the boiling water for about ten minutes before peeling them and cutting them into cubes. Add the diced tomato into the pan with the onion. 
                                   Season with salt and pepper and cook over very low heat, covered for 20 minutes without adding more liquid.
                                    Once the tomatoes are cooked, remove them from heat and sprinkle them with some chopped basil leaves.
                                    Cut the stale bread into cubes. Spread the bread on serving plates, pour the tomato soup. If you like, sprinkle with grated Parmesan cheese. 
                                   This dish is great served both cold and hot.</p>
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
                <div class="write-comment">
                    
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
