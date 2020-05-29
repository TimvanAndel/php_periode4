<?php

class Auto {
    var $merk;
    var $model
    function geefInfo() {
         echo"Het merk: $merk en het model: $model";
    }

    
 }
 
$Auto1 = new Auto();
$Auto1->merk = $merk;
$Auto1->model= $model;
$Auto1 -> geefInfo();

?>