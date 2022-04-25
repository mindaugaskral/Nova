<?php
include_once 'header.php';
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

    <div class="form-group">
        <label>Iveskite automobilio numerius</label>
        <input type="text" name="plates" class="form-control <?php echo isset($errors['plates']) ? 'is-invalid' : ''; ?>">
        <div class ="invalid-feedback">
            <?php echo $errors['plates'] ?>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
    
<?php
include_once 'footer.php';
?>