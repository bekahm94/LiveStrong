<!DOCTYPE html>

<html class="login-bg">
    <head>
        <title>Live Strong</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cuprum" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arima+Madurai:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Hind" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/bootstrap.css">
        <link rel="stylesheet" href="styles/login.css">
        <?php require 'utils/scripts.php'?>
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
                    </ul>
		</div>
            </div>
	</nav>

       <div class="container">
            <div class="login-header">
                <div class="col-lg-offset-3 col-sm-offset-2">
                    <h1 class="logo">Live Strong <small>Welcome Back!</small></h1>
                    <br>
                     <?php
                        if (isset($errorMessage))//if there is an error
                        {echo "<p style='color:red;'>$errorMessage</p>";}//this error message is out putted
                    ?>
                    <h3>Login with Social Media:</h3>
                    <br><br>
                    <div class="row socialButtons">
                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 text-center">
                            <div class="icon-circle">
                                <a href="#" class="ifacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    
                        <div class="col-lg-1 col-lg-offset-1 col-md-1 col-md-offset-1 col-sm-2 col-xs-3 text-center">
                            <div class="icon-circle">
                                <a href="#" class="itwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    
                        <div class="col-lg-1 col-lg-offset-1 col-md-1 col-md-offset-1 col-sm-2 col-xs-3 text-center">
                            <div class="icon-circle">
                                <a href="#" class="igoogle" title="Google+"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    
                        <div class="col-lg-1 col-lg-offset-1 col-md-1 col-md-offset-1 col-sm-2 col-xs-3 text-center">
                            <div class="icon-circle">
                                <a href="#" class="iLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row login-by-email">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-11">
                            <br>
                            <hr>
                            <h3>Login with Email:</h3>
                            <br>
                            <form action="login.php" 
                                  method="POST"
                                  role="form"
                                  class="form-vertical">
                                      
                                <div class="form-group">
                                    <div class="form-label">
                                        <label for="username" class="control-label">Username:</label>
                                    </div>
                                    <div class="inner-addon left-addon right-addon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                            <input type="text" id="username" class="form-control" name="username" value="<?php if (isset($formdata['username'])) {echo $formdata['username'];} ?>"/><!--each input element inserting a value into the element--> 
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="error">
                                            <?php if (isset($errors['username'])) {echo $errors['username'];} ?><!--The error message that will be displayed-->
                                        </span>
                                    </div>
                                </div>
                                    <br>
                                    <br>
                                    <div class="form-label">
                                        <label for="password" class="control-label">Password:</label>
                                    </div>
                                    <div class="inner-addon left-addon">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <input type="password" id="password" class="form-control" name="password" value=""/>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="error">
                                            <?php if (isset($errors['password'])) {echo $errors['password'];} ?><!--The error message that will be displayed-->
                                        </span>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-lg-6">
                                        <a href="forgot_pass.php">Forgot Password?</a>
                                        <br>
                                        <br>
                                    </div>
                                    <br>
                                        <input type="submit" class="form-control btn btn-primary" value="Login"/>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php' ?>
    </body>
</html>
