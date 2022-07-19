<?php
ini_set("display-errors", 1);
ini_set("display_startup_error", 1);
error_reporting(E_ALL);
 
 $stock = 800;
 
 //Si stock es mayor que 0, entonces:
 if($stock > 0) {
    // imprime "Hay stock",
    echo "Hay stock";
 // sino    
} else { 
    // imprime "No hay stock"
    echo "No hay stock";
}
