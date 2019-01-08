<?php
/**
 * Created by PhpStorm.
 * User: jbosegre
 * Date: 1/7/2019
 * Time: 10:20 AM
 * This file is the php function of the cupcakes website
 * it holds all the flavors of the cupcake and the total cost
 * for all selected cupcakes
 */

$flavor = array("The Grasshopper"=>"grasshopper", "Whiskey Maple Bar"=>"maple",
    "Carrot Walnut"=>"carrot", "Salted Caramel"=>"caramel", "Red Velvet"=>"velvet",
    "Lemon Drop"=>"lemon", "Tiramisu"=>"tiramisu");
$flavorCount = 0;
$perCupcake = number_format(3.50, 2);

function printCupcakeFlavors($flavor){
    global $flavorCount;

   foreach($flavor as $taste => $description) {
       echo "&bull; ".$description . "<br>";
       $flavorCount++;
   }
}

function viewCupcakeFlavors($flavor){
    global $flavor;
    foreach($flavor as $taste => $description) {
        echo "<input type=\"checkbox\" name=\"".$flavor."\" value=\"".$taste."\"> $description<br>";
    }
}


function totalCost(){
    global $flavorCount, $perCupcake;
    echo $flavorCount * $perCupcake;
}