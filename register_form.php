<!DOCTYPE HTML>
<html>
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
        <link rel="stylesheet" href="styles/register.css">
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
                <div class="register-header">
                    <div class="col-lg-offset-3 col-sm-offset-2">
                        <h1 class="logo">Live Strong <small>Welcome! Please register below</small></h1>
                            <?php
                                if (isset($errorMessage))//if there is an error
                                {echo "<p style='color:red;'>$errorMessage</p>";}//this error message is out putted
                            ?>
                   <div class="row-body">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-11">
                            <br>
                            <hr>
                            <h3>Please Register Here:</h3>
                            <br>
                            <form action="register.php" 
                                  method="POST"
                                  role="form"
                                  class="form-vertical">
                                      
                                <div class="form-group">
                                    <div class="form-label">
                                        <label for="email" class="form-control-label">Email:</label><!--label for the column in the form-->
                                    </div>
                                        <div class="col-lg-8">
                                           <div class="inner-addon left-addon right-addon">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    <input type="text" id="email"  class="form-control" name="email" placeholder="Enter your email" value="<?php if (isset($email)) {echo $email;} ?>"/><!--each input element inserting a value into the element--> 
                                            </div>
                                        </div>
                                            <div class="col-lg-6">
                                                <span class="error">
                                                    <?php if (isset($errors['email'])) {echo $errors['email'];} ?><!--The error message that will be displayed-->
                                                </span>
                                            </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <div class="form-label">
                                        <label for="username" class="form-control-label">Username: </label><!--label for the column in the form-->
                                    </div>
                                        <div class="col-lg-8">
                                            <div class="inner-addon left-addon right-addon">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                    <input type="text" id="username"  class="form-control" name="username" placeholder="Enter your username" value="<?php if (isset($username)) {echo $username;} ?>"/><!--each input element inserting a value into the element--> 
                                            </div>
                                        </div>
                                            <div class="col-lg-6">
                                                <span class="error">
                                                    <?php if (isset($errors['username'])) {echo $errors['username'];} ?><!--The error message that will be displayed-->
                                                </span>
                                            </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <div class="form-label">
                                        <label for="password">Password: </label><!--label for the column in the form-->
                                    </div>
                                        <div class="col-lg-8">
                                            <div class="inner-addon left-addon right-addon">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" value=""/>
                                            </div>
                                        </div>
                                            <div class="col-lg-6">
                                                <span class="error">
                                                    <?php if (isset($errors['password'])) {echo $errors['password'];} ?><!--The error message that will be displayed-->
                                                </span>
                                            </div>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <div class="form-label">
                                        <label for="cpassword">Confirm Password: </label><!--label for the column in the form-->
                                    </div>
                                        <div class="col-lg-8">
                                            <div class="inner-addon left-addon right-addon">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                                <input type="password" id="cpassword" class="form-control" name="cpassword" placeholder="Confirm your password" value=""/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="error">
                                                <?php if (isset($errors['cpassword'])) {echo $errors['cpassword'];} ?><!--The error message that will be displayed-->
                                            </span>
                                        </div>
                                </div>
                                
                                <br>
                                <br>
                                <br>
                                        <input type="submit" class="form-control btn btn-primary" value="Register"/>
                            </form>
                        </div><!--form-group-->
                    </div><!--col-lg-8 col-md-8 col-sm-8 col-xs-11-->
                   
                </div><!--row-body-->
            </div>
        </div>
      
        <?php require 'utils/footer.php' ?>
    </body>
 </html>