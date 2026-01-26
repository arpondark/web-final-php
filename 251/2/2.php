<?php
$att = $_POST["att"];
$cost = $_POST["cost"];
$cap = $_POST["cap"];

$seat = ceil($att / $cap);
$empty = ($seat * $cap) - $att;
$wasted = $empty * $cost;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
        }

        table th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
    <title>Attendance</title>
</head>

<body>
    <table>
        <tr>
            <th>Total Venues</th>
            <th>Empty Seats</th>
            <th>Wadted Money (BDT)</th>
        </tr>
        <tr>
            <td><?php echo "$seat"; ?></td>
            <td><?php echo "$empty"; ?></td>
            <td><?php echo "$wasted"; ?></td>
        </tr>
    </table>

</body>

</html>