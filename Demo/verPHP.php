<?php
$categoria= $_GET["categoria"];
$precio = $_GET["precio"];

        switch($categoria){
            case 2:
                header("Location: verProducto..php");
                break;
            case 1:
                header("Location: verProducto .php");
                break;
        }

        switch($precio){
            case "menos100":
                header("Location: verProducto_.php");
                break;
        }   
?>