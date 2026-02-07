<?php

$conn = new mysqli("localhost", "root", "", "uiuweb_final");
if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

//1.
echo "<h3>Students per Letter Grade</h3>";

$sql = " select LetterGrade as l, count(*) as total
from student_final
group by l";

$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "Grade {$row["l"]}:{$row["total"]} <br>";
}


//2
$sql = " update student_final
set LetterGrade ='C'
where Grade < 75 and LetterGrade !='D'
";
$conn->query($sql);
echo"<br> updated<br>";
// Q3.3 Bonus +5 if Grade > 80 and final ≤ 90
$sql = "update student_final
set Grade = Grade+5
where Grade > 80 and (Grade+5) <=90
";
$conn->query($sql);
echo "<br>updated Q3 <br> ";

//4

$sql = "select CourseTitle, count(*) as total 
from student_final
group by CourseTitle
order by total desc
";
$result = $conn->query($sql);

while( $row = $result->fetch_assoc() ){
    echo "<br>{$row["CourseTitle"]}:{$row["total"]} <br>";
}

$conn->close();

?>