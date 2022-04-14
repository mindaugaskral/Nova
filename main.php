<?php

require_once('config.php');

$sql = "SELECT * FROM plates";

$result = $link->query($sql);

$tz = new DateTimeZone('Europe/Vilnius');

while($row = $result->fetch_assoc()) {
    $dateNow = new DateTime('now', $tz);
    $now = $dateNow;
    $startDate = new DateTime($row["start_date"], $tz);
    $diff = $dateNow->diff($startDate);
    $diff = $diff->format('%h:%i:%s');
    echo "id: " . $row["id"]. " - Plate: " . $row["plate"]. " Start date: " . $row["start_date"].  " Length: " . $diff. " <br>";
}
$link->close();