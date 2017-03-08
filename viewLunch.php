<?php
require_once 'utils/functions.php';//linking the functions page that is located in the utils folder to this page
require_once 'classes/DB.php';//linking the DB page that is located in the classes folder to this page
require_once 'classes/WinesTable.php';//linking the winestable page that is located in the classes folder to this page
require_once 'classes/WineryTable.php';//linking the winerytable page that is located in the classes folder to this page

start_session();//the session will start

if (!is_logged_in()) {//if the user is not logged in
    header("Location: login_form.php");//link to the login form
}

if(!isset($_GET['id'])) //If GET request doesn't have an id then the script stops. 
{
    die("Illegal request"); //This should never happen, if it does someone is messing around with the website
}

$id = $_GET['id']; //if GET request does have an ID retrieve that ID.

$connection = DB::getInstance();//getInstance will return a connection object
$wineryGateway = new WineryTable($connection);//winerygateway equal to the WineryTable connection
$gateway = new WinesTable($connection);//gateway equal to the WinesTable connection

$wineries = $wineryGateway->getWineryByWineId($id); //Passes the id into method to retrieve the winery by wineid. 

$wines = $gateway->getWinesById($id);//wines equal to gateway to get wines by the id

$row = $wineries->fetch(PDO::FETCH_ASSOC);//fetches a row from a result set associated with a PDOStatement object.

$row2 = $wines->fetch(PDO::FETCH_ASSOC);//fetches a row from a result set associated with a PDOStatement object.
if(!$row2)//if there is no row2
{
    die("Illegal request");//this message will be displayed
}
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
        <div class="container"><!--the container class-->
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
                    <h2>View Wine Details</h2><!--Heading at the top of the page in header 2 font-->
                </div>
            </div>
        <table class="table"><!--table class-->
            <thead> 
                  <tr>
                    <th>id</th><!--the name of the row in the db table-->
                    <th>Name</th><!--the name of the row in the db table-->
                    <th>Colour</th><!--the name of the row in the db table-->
                    <th>Description</th><!--the name of the row in the db table-->
                    <th>Year</th><!--the name of the row in the db table-->
                    <th>Serving Temp.</th><!--the name of the row in the db table-->
                </tr>
            </thead>
            <tbody>
                <?php
                    echo '<tr>';
                    echo '<td>' . $row2['id'] . '</td>';//rows from the database, a representation of the database table
                    echo '<td>' . $row2['name'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['colour'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['description'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['year'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row2['temperature'] . '</td>';//the name of the row in the db table
         

                    
                    echo '<td>'
                    . '<a href="editWineForm.php?id='.$row2['id'].'">Edit</a> '//link to the edit wine form page that is equal to the id of the wine with the name Edit
                    . '<a href="deleteWine.php?id='.$row2['id'].'">Delete</a> '//link to the delete wine page that is equal to the id of the wine with the name Delete 
                    . '</td>';
                    echo '</tr>'; 
                    
                    $row2 = $wines->fetch(PDO::FETCH_ASSOC); //fetches a row from a result set associated with a PDOStatement object.     
                ?>
            </tbody>
        </table>
        <?php
        if(($winery->rowCount() !== 0)){?><!--if the statement variable rowcount is not equal to 0-->
        
        <table>
            <thead>
                <tr>
                   <tr>
                    <th>id</th><!--the name of the column in the table-->
                    <th>wName</th><!--the name of the column in the table-->
                    <th>wAddress</th><!--the name of the column in the table-->
                    <th>conName</th><!--the name of the column in the table-->
                    <th>conNumber</th><!--the name of the column in the table-->
                    <th>conEmail</th><!--the name of the column in the table-->
                    <th>website</th><!--the name of the column in the table-->
                </tr>
            </thead>
            <tbody>
                <?php
                
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';//rows from the database, a representation of the database table
                    echo '<td>' . $row['wName'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row['wAddress'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row['conName'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row['conNumber'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row['conEmail'] . '</td>';//the name of the row in the db table
                    echo '<td>' . $row['website'] . '</td>';//the name of the row in the db table

                    
                    echo '<td>'
                    . '<a href="editWineryForm.php?id='.$row['id'].'">Edit</a> '//link to the edit winery form page that is equal to the id of the winery with the name Edit
                    . '<a href="deleteWinery.php?id='.$row['id'].'">Delete</a> '//link to the delete winery page that is equal to the id of the winery with the name Delete 
                    . '</td>';
                    echo '</tr>';  
                  
               
                ?>
            </tbody>
        </table>
        <div class="row">
        <div class="col-lg-12">
        <?php }else{echo "NO wines";}?><!--out put this message-->
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
