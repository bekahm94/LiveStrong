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
                    <h1 class="logo">Live Strong <small>Don't Worry We Got You!</small></h1>
                    <br>
                     <?php
                        if (isset($errorMessage))//if there is an error
                        {echo "<p style='color:white;'>$errorMessage</p>";}//this error message is out putted
                    ?>
                    <div class="row login-by-email">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-11">
                            <br>
                            <hr>
                            <h3>Reset Your Password:</h3>
                            <br>
                           <?php echo '
                            <form action="reset.php" 
                                  method="POST"
                                  role="form"
                                  class="form-vertical">
                                      
                                E-mail Address: <input type="text" name="email" size="20" /><br />

                                New Password: <input type="password" name="password" size="20" /><br />

                                Confirm Password: <input type="password" name="confirmpassword" size="20" /><br />

                                <input type="hidden" name="q" value="';
                                
                           if (isset($_GET["q"])) {

                                 echo $_GET["q"];

                            }

                                echo '" /><input type="submit" name="ResetPasswordForm" value=" Reset Password " />

                            </form>';
?>

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <?php require 'utils/footer.php' ?>
    </body>
</html>