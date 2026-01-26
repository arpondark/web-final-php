<?php

use LDAP\Result;

$conn = new mysqli("localhost","root","arpon007","sundarban");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

/*1. total revenue */
echo "<h2>Total Revenue per category</h2>";
$result= $conn->query("SELECT CategoryName, SUM(Revenue) AS TotalRevenue FROM sales_data GROUP BY CategoryName");

while($row = $result->fetch_assoc())
{
     echo $row['CategoryName'] . " : " . $row['TotalRevenue'] . " BDT<br>";
}
 echo "<br>";
/*2update low  */

$conn->query("update sales_data set CategoryName='Low Performing' where Revenue < 40000");

/*3.10% bonus */
$conn->query("update sales_data set Revenue = Revenue+(Revenue*0.1) where Revenue >70000");

/*4*/
$query = "
SELECT s.ProductName, s.CategoryName, s.Revenue,
       (SELECT AVG(Revenue)
        FROM sales_data
        WHERE CategoryName = s.CategoryName) AS avgRevenue
FROM sales_data s";

$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    $label = ($row['Revenue'] > $row['avgRevenue'])
        ? "Top Seller"
        : "Regular Seller";

    echo $row['ProductName'] . " | "
       . $row['CategoryName'] . " | "
       . $label . "<br>";
}
$conn->close();

?>