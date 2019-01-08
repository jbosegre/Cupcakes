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

            if(!empty($_POST)){
                echo "Thank you, ".$_POST["username"].", for your order!";
                if(!empty($_POST["flavor"])){

                    foreach($_POST['flavor[]'] as $flavor){
                        printCupcakeFlavors($flavor);
                    }
                }
            }
            else{
                echo "Error: name is missing";
            }
        }
        ?>
</body>
</html>