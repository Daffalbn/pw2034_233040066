<?php
$hardware = ["Monitor", "CPU", "GPU", "RAM", "Motherboard", "M.2 SSD"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>

<body>
    <h3>List Hardware</h3>
    <ol>
        <?php
        foreach ($hardware as $hw_item) {
            echo "<li>$hw_item</li>";
        }
        ?>
    </ol>

    <h3>List Hardware New Update!</h3>
    <ol>
        <?php
        $hardware[] = "Cooler <== NEW!";
        $hardware[] = "PSU <== NEW!";

        sort($hardware);
        foreach ($hardware as $hw_item) {
            echo "<li>$hw_item</li>";
        }
        ?>
    </ol>
