<?php 
$student = $_POST["student"];
$sps= $_POST["slice_per_student"];
$spp= $_POST["slice_per_pizza"];

$total_Slize = $student*$sps;
$total= ceil($total_Slize/$spp);
$leftoverSlices= ($total*$spp) - $total_Slize;
$pricePerPizza = 1050;
$wastedMoney = ($leftoverSlices / $spp) * $pricePerPizza;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza calculator </title>
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
    <th>Total Pizzas:</th>
    <th>Leftover Slices:</th>
    <th>Wasted Money (BDT):</th>
</tr>
<tr>
    <td><?php echo $total; ?></td>
    <td><?php echo $leftoverSlices ?></td>
    <td><?php echo $wastedMoney; ?></td>
</tr>
</table>
</body>
</html>