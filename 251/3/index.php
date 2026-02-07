<?php

$conn=new mysqli("localhost","root","","uiutech_final");
//3rd one is the passeord . keep it blank f you are using xamp
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//qs1
echo "<h3>Employees per Performance Rating</h3>";
$sql= "SELECT Performance_Rating, COUNT(*) AS total
FROM employees
GROUP BY Performance_Rating";


$result= $conn->query($sql);
while($row= $result->fetch_assoc()){
    echo "Rating {$row['Performance_Rating']} : {$row['total']}<br>";
}

//qs 2
$sql= " 
update employees 
set Performance_Rating='C'
where Salary <40000 and Performance_Rating !='D'
";
$conn->query($sql);
echo "<br>Low salary employees updated to rating C.<br>";

//qs3
$sql= "
update employees
set Salary= Salary + 5000
where Salary  > 50000 AND (Salary + 5000) <=60000
";
$conn->query($sql);
echo "Bonus applied successfully.<br>";

//qs4
$sql= "
select Department_Name as d,count(*) as total 
from employees 
group by Department_Name
order by total desc
";
$result= $conn->query($sql);
while($row= $result->fetch_assoc()){
    echo"{$row['d']}:{$row['total']} <br>";
}
?>