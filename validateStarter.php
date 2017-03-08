<?php

function validate(&$fdata, &$errorMessages) {//validate declared for formdata and the error message that will be displayed
    $input_method = INPUT_POST;

    if (filter_has_var($input_method, 'id')) {
        $fdata['id'] = filter_input($input_method, "id", FILTER_SANITIZE_NUMBER_INT);//formdata variable that is sanitized to ensure that an int is entered
    }
    $fdata['name'] = filter_input($input_method, "name", FILTER_SANITIZE_STRING);//formdata variable that is sanitized to ensure that a string is entered
    $fdata['colour'] = filter_input($input_method, "colour", FILTER_SANITIZE_STRING);//formdata variable that is sanitized to ensure that a string is entered
    $fdata['description'] = filter_input($input_method, "description", FILTER_SANITIZE_STRING);//formdata variable that is sanitized to ensure that a string is entered
    $fdata['year'] = filter_input($input_method, "year", FILTER_SANITIZE_NUMBER_INT);//formdata variable that is sanitized to ensure that an int is entered
    $fdata['temperature'] = filter_input($input_method, "temperature", FILTER_SANITIZE_NUMBER_FLOAT);//formdata variable that is sanitized to ensure that a double is entered
    $fdata['price'] = filter_input($input_method, "price", FILTER_SANITIZE_NUMBER_FLOAT);//formdata variable that is sanitized to ensure that a double is entered
    $fdata['winery_id'] = filter_input($input_method, "winery_id", FILTER_SANITIZE_NUMBER_INT);//formdata variable that is sanitized to ensure that an int is entered
    

    if ($fdata['name'] === NULL ||//if the formdata array name is equal to null or
            $fdata['name'] === FALSE ||//formdata array name is equal to false or
            $fdata['name'] === "") {//or formdata array name is equal to empty
        $errorMessages['name'] = "Name of wine required";//this error message is displayed
    }

    if ($fdata['colour'] === NULL ||//if the formdata array name is equal to null or
            $fdata['colour'] === FALSE ||//formdata array name is equal to false or
            $fdata['colour'] === "") {//or formdata array name is equal to empty
        $errorMessages['colour'] = "Colour/Type of wine required. Example: White Sparkling";//this error message is displayed
    }

    if ($fdata['description'] === NULL ||//if the formdata array name is equal to null or
            $fdata['description'] === FALSE ||//formdata array name is equal to false or
            $fdata['description'] === "") {//or formdata array name is equal to empty
        $errorMessages['description'] = "Description of wine required";//this error message is displayed
    }

    if ($fdata['year'] === NULL ||//if the formdata array name is equal to null or
            $fdata['year'] === FALSE ||//formdata array name is equal to false or
            $fdata['year'] === "") {//or formdata array name is equal to empty
        $errorMessages['year'] = "Year the wine was produced required";//this error message is displayed
    }

    if ($fdata['temperature'] === NULL ||//if the formdata array name is equal to null or
            $fdata['temperature'] === FALSE ||//formdata array name is equal to false or
            $fdata['temperature'] === "") {//or formdata array name is equal to empty
        $errorMessages['temperature'] = "Serving Temperature of wine required";//this error message is displayed
    }

    if ($fdata['price'] === NULL ||//if the formdata array name is equal to null or
            $fdata['price'] === FALSE ||//formdata array name is equal to false or
            $fdata['price'] === "") {//or formdata array name is equal to empty
        $errorMessages['price'] = "Price of wine required";//this error message is displayed
    }
}



