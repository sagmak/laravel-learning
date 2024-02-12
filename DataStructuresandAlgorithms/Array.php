<?php
    //Indexed arrays - Arrays with a numeric index
    //Associative arrays - Arrays with named keys
    //Multidimensional arrays - Arrays containing one or more arrays

    // Indexed Arrays
    $cars = array("Volvo", "BMW", "Toyota");
    echo $cars[0];

    //  Associative Arrays

    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    var_dump($car);
    $car["year"] = 2024; //chnage value
    echo $car["model"];

    // Multidimensional Arrays

    // The dimension of an array indicates the number of indices you need to select an element.

    //For a two-dimensional array you need two indices to select an element
    //For a three-dimensional array you need three indices to select an element

    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );





?>