<?php
require_once 'classes/User.php';//connecting the classes folder that has the user page inside it

function is_logged_in() {//function if the user is logged in
    start_session();//the session will start
    return (isset($_SESSION['user']));//return the user that has logged in
}

function start_session() {//the session will start
    $id = session_id();//id will equal to the sesion id of the user
    if ($id === "") {//if id is equal to 
        session_start();//the session will start
    }
}

function echoValue($array, $fieldName) {//out put the value of the array and fieldname
    if (isset($array) && isset($array[$fieldName])) {//if the array is set and the array fieldname 
        echo $array[$fieldName];//out put the array fieldname
    }
}

function echoChecked($array, $fieldName, $value) {//out put the check box of array values with the fieldnames
    if (isset($array[$fieldName]) && $array[$fieldName] == $value) {//if the array fieldname is set and the array fieldname equal to the value variable
        echo 'checked="checked"';//out put the checked that is equal to what has been checked
    }
}

function echoCheckedArray($array, $fieldName, $value) {//out put the checked array with the array variable, fieldname variable and the value variable
    if (isset($array[$fieldName]) &&//if the array fieldname is set and 
            is_array($array[$fieldName]) &&//the array is array fieldname and
            in_array($value, $array[$fieldName])) {//the array in the array value, the fieldname in the array
        echo 'checked="checked"';//out put the checked that is equal to what has been checked
    }
}

function echoSelected($array, $fieldName, $value) {//out put what is selected of the array variable with the fieldname variable and their value variable
    if (isset($array[$fieldName]) && $array[$fieldName] == $value) {//if the array fieldname is set and the array fieldname is equal to the value
        echo 'selected="selected"';//out put the selected option
    }
}

function echoSelectedArray($array, $fieldName, $value) {//out put the selected array with the array variable, the fieldname variable and the value vaiable
    if (isset($array[$fieldName]) &&//if the array fieldname is set and 
            is_array($array[$fieldName]) &&//the array is array fieldname and
            in_array($value, $array[$fieldName])) {//the array in the array value, the fieldname in the array
        echo 'selected="selected"';//out put the selected option
    }
}
?>
