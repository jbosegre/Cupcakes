<!--
 * Created by PhpStorm.
 * User: jbosegre
 * Date: 1/7/2019
 * Time: 10:20 AM
 * This file is the index of the cupcakes website
 * it takes the username and checkbox input for cupcake flavors
 * and prints out your name, selection and total cost of the cupcakes
 */
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge"><meta charset="UTF-8">
    <title>Cupcake</title>
</head>
<body>
    <h1>Create Your cupcake</h1>
    <form action="" method="post">
        <label> Name: <input type="text" name="username"></label><br><br>
        <label>
            <input type="checkbox" name="flavor[]" value="grasshopper">
            The Grasshopper<br>
            <input type="checkbox" name="flavor[]" value="maple">
            Whiskey Maple Bar<br>
            <input type="checkbox" name="flavor[]" value="carrot">
            Carrot Walnut<br>
            <input type="checkbox" name="flavor[]" value="caramel">
            Salted Caramel<br>
            <input type="checkbox" name="flavor[]" value="velvet">
            Red Velvet<br>
            <input type="checkbox" name="flavor[]" value="lemon">
            Lemon Drop<br>
            <input type="checkbox" name="flavor[]" value="tiramisu">
            Tiramisu<br><br>
        </label>
        <label><input type="submit" value="Order"></label><br><br>
    </form>


        <?php
        if(!empty($_POST)) {

            include "Cupcake.php";
            $isValid = true;

            if(!empty($_POST['username'])){
                if(isset($_POST['flavor'])){
                    echo "Thank you, ".$_POST["username"].", for your order!<br><br>";
                    echo "Order Summary:<br>";
                    printCupcakeFlavors($_POST['flavor']);
                    echo "<br>Order Total: $";
                    echo totalCost();
                }

            }
            else{
                echo "Error: name or flavor selection is missing";
                $isValid = false;
            }
        }
        ?>
</body>
</html>