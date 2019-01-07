<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake</title>
</head>
<body>
    <h1>Create Your cupcake</h1>
    <form action="Cupcake.php">
        <label> Name: <input type="text" name="name"></label><br><br>
        <label><input type="submit" value="Order"></label>
        <pre>
            <?php include 'Cupcake.php';

            printCupcakeFlavors();
            ?>
        </pre>

    </form>
</body>
</html>