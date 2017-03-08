<ul>
<?php
require_once 'utils/functions.php';//linking the functions class to the toolbar page
require_once 'utils/styles.php';//linking the styles to the toolbar page

if (!is_logged_in()) {//if the user is not logged in
    echo '<li><a href="index.php">My Website</a></li>';//link to the index page with the name My Website
    echo '<li><a href="login_form.php">Login</a></li>';//link to the login form page with the name Login
}
else {//else they are logged in
    echo '<li><a href="index.php">Home</a></li>';//link to the index page with the name Home
    echo '<li><a href="exercise.php">Exercise</a></li>';//link to view the execise page with the name Exercise
    echo '<li><a href="courses.php">Recipes</a></li>';//link to view the courses page with the name Recipe
    echo '<li><a href="logout.php">Logout</a></li>';//link to the logout page with the name Logout
}
?>
</ul>