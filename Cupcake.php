<?php
/**
 * Created by PhpStorm.
 * User: jbose
 * Date: 1/7/2019
 * Time: 10:20 AM
 */

$flavor = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bar",
    "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel", "velvet"=>"Red Velvet",
    "lemon"=>"Lemon Drop", "tiramisu"=>"Tiramisu");

function printCupcakeFlavors()
{
    global $flavor;
   foreach($flavor as $taste => $description) {
       echo "<input type=\"checkbox\" name=\"".$flavor."\" value=\"".$taste."\"> $description<br>";
   }
}