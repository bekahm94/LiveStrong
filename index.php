<!DOCTYPE html>

<html lang="en">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Live Strong</title>
        <?php require 'utils/styles.php'; ?><!--linking the styles class to the index page with the source folder it is located in-->
        <?php require 'utils/scripts.php'; ?><!--linking the scripts class to the index page with the source folder it is located in-->	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/index.css">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">
		
		<title>Live Strong</title>
	</head>
	<body class="index">
            <nav class="navbar navbar-default">
            <div class="container">
		<div class="navbar-header">
                    <button type="button"
			class="navbar-toggle collapsed"
			data-toggle="collapse"
			data-target="#collapsemenu"
			aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand">Live Strong</a>
		</div>
		<div class="collapse navbar-collapse" id="collapsemenu">
                    <ul class="nav navbar-nav navbar-right hover">
			<li><a href="index.php">HOME</a></li>
			<li><a href="exercise.php">EXERCISE</a></li>
                        <li><a href="courses.php">FOOD</a></li>
			<li class="divider-vertical"></li>
                        <li><a class="hover-change" href="login_form.php">Login</a></li>
                        <li><a class="hover-change" href="register_form.php">Register</a></li>
                    </ul>
		</div>
            </div>
	</nav>
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> <!--id for the carousel makes it unique to this page, the class makes the carousel slide and the data-date starts the slide-->
		<ol class="carousel-indicators"> <!--tells the indicators which image to slide to next-->
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li> <!--image with the index of 0 is the first image in the list and placing active on the image makes it the first image seen upon page load-->
                    <li data-target="#myCarousel" data-slide-to="1"></li> <!--slides to the second image with an index of 1-->
                    <li data-target="#myCarousel" data-slide-to="2"></li> <!--slides to the third image with an index of 2-->
                    <li data-target="#myCarousel" data-slide-to="3"></li> <!--slides to the fourth image with an index of 3-->
		</ol> <!--end of ordered list-->
		<div class="carousel-inner"> <!--beginning of the inside of the carousel, this holds the images and text-->
                    <div class="item active"> <!--the first item in the list which is marked as active so its the firs to appear upon page load-->
			<img src="images/carousel1.jpg"> <!--image 1-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <h1>LIVE STRONG</h1>
			</div> <!--end of carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--beginning of item 2 which holds the second image and text-->
			<img src="images/carousel2.jpg"> <!--image 2-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <h2>HEALTHY LIVING MADE EASY</h2> <!--text with a tag of h2 so it can be targeted in the css-->
			</div> <!--end of carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--beginning of item 3 which holds the 3rd image and text-->
			<img src="images/carousel3.jpg"> <!--image 3-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <h2>CHECK OUT OUR DELICIOUS RECIPES</h2> <!--text with a tag of h2 so it can be targeted in the css-->
                            <a href="courses.php" type="button" class="btn btn-default">Recipes</a>
			</div> <!--end of carousel-caption-->
                    </div><!--end of item-->
                    <div class="item"> <!--beginning of item 4 which holds the 4th image and text-->
			<img src="images/carousel4.jpg"> <!--image 4-->
			<div class="carousel-caption"> <!--class to hold the text-->
                            <h2>NEW WORKOUT TECHNIQUE ADDED EVERY WEEK</h2> <!--text with a tag of h2 so it can be targeted in the css-->
                            <a href="exercise.php" type="button" class="btn btn-default">Exercise</a>
			</div><!--end og carousel-caption-->
                    </div><!--end of item-->
		</div> <!--end of carousel-inner-->
		<a class="carousel-control left" href="#myCarousel" role="button" data-slide="prev"> <!--code to move the carousel to the left using the glyphs-->
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
		</a> <!--end of a tag-->
		<a class="carousel-control right" href="#myCarousel" role="button" data-slide="next"> <!--code to move the carousel to the right using the glyphs-->
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
		</a> <!--end of a tag-->
            </div> <!--end of #mycarousel-->
            <div class="info">
		<div class="container">
                    <div class="col-lg-4 col-md-4 col-sm-4">
			<div class="about-us">
                            <h1>About Us</h1>
                            <p>One of the only websites around that provides everything you require to learn, monitor and change your lifestyle. 
				Check out our Exercise page for new workout ideas, or our recipe page to learn to make tasty meals that are low in calories. 
                                Calculate your calories, check your BMI.  Do it all in one place. </p>
			</div> <!-- end of about-us class-->
                    </div> <!--end of col 4-->
                    <div class="col-lg-4 col-md-4 col-sm-4">
			<div class="calculator">
                            <h1>Calorie Calculator</h1>
                            <p>Calculate how many calories you require each day to lose weight in a healthy fashion. The calculator will tell you how many calories your body requires 
				each day by taking in your gender, age, exercise regime(if any) and your current height and weight
				Keep track of your calorie intake to meet
				your goal.</p>
                            <a href="calorieCalculator.php" class="btn btn-primary calcalc" role="button">Calorie Calculator</a>
			</div> <!--end of calculator-->
                    </div> <!--end of col 4-->
                    <div class="col-lg-4 col-md-4 col-sm-4">
			<div class="bmi-calc">
                            <h1>BMI Calculator</h1>
                            <p>Calcluate your Body Mass Index.  BMI is a measure of body fat based on height and weight that applies
				to adult men and women.  It calculates that your at a healthy body mass for your height.  Calculate your BMI by entering
				your gender, current weight and your height. </p>
                             <a href="BMI.php" class="btn btn-primary bmicalc" role="button">BMI Calculator</a>
			</div>
                    </div> <!--end of col 4-->
		</div> <!--End of Container-->
            </div><!--end of info class-->
            
		 
            <div class="features">
		<div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-6">
			<div class="exercise">
                            <h1>This week's featured workout:</h1>
                            <h2>Speed Bands</h2>
                            <p>Speed Bands are perfect for any sport, simply strap the bands to your legs and move as fast as you can. It is great
				for any sport that requires fast, off the spot movement; Rugby, Soccer and of course any combat sport. </p>
                            <div class="videoWrapper">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/7biHb01bZgs" frameborder="0" allowfullscreen></iframe>
                            </div><!--videoWrapper-->
                        </div><!--exercise-->
                    </div><!--end of column 6-->
                    <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1">
			<div class="recipe">
                            <h1>Low Calorie Meals in a Flash!</h1>
                            <h3>Creamy Tomato Courgetti</h3>
                            <p>Prep Time: 1 mins   <br>   Cook Time: 3 mins <br> Four ingredients is all you need to make a filling, low calorie
				dinner in minutes</p>
                            <img class="img-responsive" src="images/recipe.jpg">
                            <button type="button" class="btn btn-primary gRecipe">Get the Recipe!</button>
			</div><!--recipe-->
                    </div><!--end of column 5-->
		</div><!--end of container-->
            </div> <!--end of features-->
            
            <?php require 'utils/footer.php' ?>
    </body>

<!-- below is javascript for the carousel, this javascript targets the carousel using an id and gives it an automatic interval of 3 seconds-->
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
     $("#myCarousel").carousel({
         interval : 3000
     });
</script>



