<?php
require_once 'utils/functions.php';//linking the functions page that is located in the utils folder to this page
require_once 'classes/User.php';//linking the User page that is located in the classes folder to this page
require_once 'classes/DB.php';//linking the DB page that is located in the classes folder to this page
require_once 'classes/WinesTable.php';//linking the winestable page that is located in the classes folder to this page

start_session();//the session will start

if (!is_logged_in()) {//if the user is not logged in
    header("Location: login_form.php");//link to the login form
}

$user = $_SESSION['user'];//the user variable is equal to the session user

$connection = DB::getInstance();//getInstance will return a connection object
$gateway = new WinesTable($connection);//gateway equal to the WinesTable connection

$wines = $gateway->getWines();//wines equal to gateway to get all wines
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?><!--linking the styles page that is located in the utils folder-->
        <?php require 'utils/scripts.php'; ?><!--linking the scripts page that is located in the utils folder-->
        <script type="text/javascript">//linking the javascript page that is located in the text folder
        window.onload = function () {
            var deleteLinks = document.getElementsByClassName("delete");//gets an array of all with delete
            for (var i = 0; i != deleteLinks.length; i++) {//loops through the array should give all delete array classes
                var link = deleteLinks[i];//get a refernece of each link
                link.addEventListener("click", function (event) {//on click this function is done
                    var deleteConfirmed = confirm("Are you sure you want to delete this?");//using the confirm to know whether to pass a true or false method, that is stored in the confirm
                    if (!deleteConfirmed) {//if it comes back as false then we do not follow the link
                        event.preventDefault();//prevent the default from deleting
                    }
                });
            }
        }
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php require 'utils/header.php'; ?><!--linking the header page that is located in the utils folder-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php require 'utils/toolbar.php'; ?><!--linking the toolbar page that is located in the utils folder-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2>View Wines</h2><!--Heading at the top of the page in header 2 font-->
                        <?php 
                            if (isset($message)) {//if the message is set
                            echo '<p>'.$message.'</p>';//out put the message
                            }
                        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th><!--the name of the column in the table-->
                    <th>Name</th><!--the name of the column in the table--> 
                    <th>Colour</th><!--the name of the column in the table--> 
                    <th>Description</th><!--the name of the column in the table--> 
                    <th>Year</th><!--the name of the column in the table--> 
                    <th>Serving Temp.</th><!--the name of the column in the table--> 
                    <th>Price</th><!--the name of the column in the table--> 
                    <th>Winery</th><!--the name of the column in the table--> 
                </tr>
            </thead>
            <tbody>
                <?php
                $row2 = $wines->fetch(PDO::FETCH_ASSOC);//fetches a row from a result set associated with a PDOStatement object.
                while ($row2) {//while the row
                    echo '<tr>';
                    echo '<td>' . $row2['id'] . '</td>';
                    echo '<td>' . $row2['name'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['colour'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['description'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['year'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['temperature'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['price'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['winery_id'] . '</td>';//the name of the row in the db table
                    echo '<td>'
                    . '<a href="viewWine.php?id='.$row2['id'].'">View</a> '//link to the view wine page that is equal to the id of the wine with the name View 
                    . '<a href="editWineForm.php?id='.$row2['id'].'">Edit</a> '//link to the edit wine form page that is equal to the id of the wine with the name Edit
                    . '<a class="delete" href="deleteWine.php?id='.$row2['id'].'">Delete</a> '//link to the delete wine page that is equal to the id of the wine with the name Delete 
                    . '</td>';
                    echo '</tr>';
                    
                    $row2 = $wines->fetch(PDO::FETCH_ASSOC);//fetches a row from a result set associated with a PDOStatement object.
                }
                ?>
            </tbody>
        </table>
        <p><a href="createWineForm.php">Create Wine</a></p><!--link to the create wine form with the name Create Wine-->
        </div>
      </div>
     </div>
        <div class="row">
            <div class="col-lg-12">
                <?php require 'utils/footer.php'; ?><!--link to the footer page located in the utils folder-->
            </div>
        </div>
    </body>
</html>
