<?php
    function eliminar($i) {
        
        array_splice($_SESSION["productList"], $i, 1);
        header("Refresh:0");
    }
