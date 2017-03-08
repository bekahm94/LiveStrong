<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <title>Live Strong</title>
                
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
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
                        <li><a class="hover-change" href="dashboard.php">My Profile</a></li>
                    </ul>
		</div>
            </div>
	</nav>
        
        <div class="cardioHead">
            <img class="img-responsive" src="images/strengthHead.jpg">
            <div class="cardio-workouts">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h3>1000 Calorie Workout</h3>
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/OgFaIqVQPsE" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="cardio-info">
                                <p><img class="img-circle" src="images/time.png">  93 Minutes</p>
                                <p><img class="img-circle" src="images/calorieBurn.png"> 810 - 1260 Calories</p>
                                <p><img class="img-circle" src="images/strengthIconSmall.png"> Strength</p>
                                <button type="button" class="btn btn-primary">Add to Favourites</button>
                                <button type="button" class="btn btn-primary">Add to Calendar</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h3>Cardio & Kettlebell</h3>
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/olHsny-iSA8" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="cardio-info">
                                <p><img class="img-circle" src="images/time.png">  40 Minutes</p>
                                <p><img class="img-circle" src="images/calorieBurn.png"> 287 - 455 Calories</p>
                                <p><img class="img-circle" src="images/strengthIconSmall.png">  Strength</p>
                                <button type="button" class="btn btn-primary">Add to Favourites</button>
                                <button type="button" class="btn btn-primary">Add to Calendar</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                            <h3>Anaerobic Threshold HIIT</h3>
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/o8wQ9w9yfDo" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="cardio-info">
                                <p><img class="img-circle" src="images/time.png">  14 Minutes</p>
                                <p><img class="img-circle" src="images/calorieBurn.png"> 120 - 204 Calories</p>
                                <p><img class="img-circle" src="images/strengthIconSmall.png">  Strength</p>
                                <button type="button" class="btn btn-primary">Add to Favourites</button>
                                <button type="button" class="btn btn-primary">Add to Calendar</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h3>Sandbag Workout</h3>
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/91cre-0ByMc" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="cardio-info">
                                <p><img class="img-circle" src="images/time.png">  30 Minutes</p>
                                <p><img class="img-circle" src="images/calorieBurn.png"> 338 - 562 Calories</p>
                                <p><img class="img-circle" src="images/strengthIconSmall.png">  Strength</p>
                                <button type="button" class="btn btn-primary">Add to Favourites</button>
                                <button type="button" class="btn btn-primary">Add to Calendar</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h3>Bodyweight Workout</h3>
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BVHmhvp0UDo" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="cardio-info">
                                <p><img class="img-circle" src="images/time.png">  35 Minutes</p>
                                <p><img class="img-circle" src="images/calorieBurn.png"> 280 - 420 Calories</p>
                                <p><img class="img-circle" src="images/strengthIconSmall.png">  Strength</p>
                                <button type="button" class="btn btn-primary">Add to Favourites</button>
                                <button type="button" class="btn btn-primary">Add to Calendar</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                            <h3>10 Minute Total Body</h3>
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/OrgnyBduuwI" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="cardio-info">
                                <p><img class="img-circle" src="images/time.png">  10 Minutes</p>
                                <p><img class="img-circle" src="images/calorieBurn.png"> 71 - 152 Calories</p>
                                <p><img class="img-circle" src="images/strengthIconSmall.png">  Strength</p>
                                <button type="button" class="btn btn-primary">Add to Favourites</button>
                                <button type="button" class="btn btn-primary">Add to Calendar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="footer-exercise">
                <div class="container">
                    <div class='row'>
                        <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-2 col-xs-offset-4">
                            <br>
                            <img src='images/logo.png'>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-5 col-md-4 col-md-offset-5 col-sm-4 col-sm-offset-5 col-xs-offset-3">
                            <h1 class="liveHead">Live Strong</h1>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-lg-8 col-lg-offset-2'>
                            <div class="dedicated">
                                <hr>
                                <br>
                                <p>Live Strong is all you need to help you live a healthier, happier and more energetic lifestyle
                                    We are dedicated to helping you become the best version of yourself through good diet and exercise.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                            <br>
                            <a href='#'><i class="fa fa-facebook fa-3x fa-fw"></i></a>
                            <a href='#'><i class="fa fa-twitter fa-3x fa-fw"></i></a>
                            <a href='#'><i class="fa fa-youtube-play fa-3x fa-fw"></i></a>
                            <a href='#'><i class="fa fa-flickr fa-3x fa-fw"></i></a>
                            <a href='#'><i class="fa fa-linkedin fa-3x fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <br>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="email">
                                <p>Follow <a href="#">@livestrong</a> on Twitter for the latest news. <br>
                                    For further inquiries, you can email us at <a href="#">company@livestrong.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="copyright">
                                <br>
                                <br>
                                <p>COPYRIGHT 2017 LIVESTRONG, ALL RIGHTS RESERVED</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </body>