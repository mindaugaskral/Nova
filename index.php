<?php

require_once('config.php');

echo var_dump($_POST);
// echo $_SERVER['REQUEST_METHOD'];
// echo $_POST['carNumberPlates'];

if(isset($_POST['carNumberPlates'])) {
    $plates = $_POST['carNumberPlates'];

    $sqlquery = "INSERT INTO plates (plate) VALUES ('$plates')";

    if (!$link->query($sqlquery) === TRUE) {
        echo "Error: " . $sqlquery . "<br>" . $link->error;
    }
    $link->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Hello</title>
</head>

<body>
    <p>Iveskite automobilio numerius</p>
    <form action="./index.php" method="post">
    <input type="text" name="carNumberPlates" id="text">
    <input type="submit" value="submit">
    </form>
    <a href="./login.php">Log In</a>
    
</body>

</html>