<?php

    // .......................................................................//
    $student = array("Josip", "Oužecky", "1903998311117", "AI4627", "3 godina studija");

    foreach ($student as $element){
        echo "$element <br>";
    }

    // .......................................................................//
    $vrste_automobila = array(
        "citroen"   => array(
            "C3",
            "Crvena",
            "2019 godina",
            "100 KS"
        ),
        "mercedes"  => array(
            "C klasa",
            "Crni",
            "2019 godina",
            "150 KS"
        )
    );

    echo "<br><br><br>";

    foreach($vrste_automobila as $key=>$val){ 
        echo "$key: ";
        foreach($val as $element){ 
            echo "$element ,";
        }
        echo"<br>";
    }

    // .......................................................................//
?>