<?php
$att = $_POST["att"];
$cap = $_POST["cap"];
$price = $_POST["price"];

$screen = ceil($att / $cap);
$totalSeat = $screen*$cap;
$emptySeat = $totalSeat - $att;
$loss = $emptySeat * $price;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie calculator </title>
     <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Calculation Result (Output)</h2>

<table border="1" cellpadding="8">
<tr>
    <th>Total Screens</th>
    <th>Empty Seats</th>
    <th>Wasted Money (BDT)</th>
</tr>
<tr>
    <td><?php echo $screen; ?></td>
    <td><?php echo $emptySeat; ?></td>
    <td><?php echo $loss; ?></td>
</tr>
</table>
</body>
</html>