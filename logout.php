<?php

require_once 'utils/functions.php';//linking the functions page that is located in the utils folder to this page
require_once 'classes/User.php';//linking the User page that is located in the classes folder to this page

start_session();//the session will start


if (!is_logged_in()) {//if the user is not logged in
    header("Location: login_form.php");//link to the login form
}
else {
	unset($_SESSION['user']);//unset the userfor the session
	
	header("Location: login_form.php");//redirect to the login form page
}


