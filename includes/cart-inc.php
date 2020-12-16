<?php
        /*
        if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
        function button1() { 
            echo "This is Button1 that is selected"; 
        } 
        function button2() { 
            echo "This is Button2 that is selected"; 
        } 
        */

    function eliminar($i) {
        print_r("hola" . $i); 
        array_splice($_SESSION["productList"], $i, 1); 
    }
    ?> 