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

$flavor = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bar",
    "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel", "velvet"=>"Red Velvet",
    "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");
$flavorCount = 0;
$perCupcake = number_format(3.50, 2);

function printCupcakeFlavors($flavor)
{
    global $flavorCount;

   foreach($flavor as $taste => $description) {
       echo $description . "<br>";
       $flavorCount++;
   }
}

function totalCost(){
    global $flavorCount, $perCupcake;
    echo $flavorCount * $perCupcake;
}