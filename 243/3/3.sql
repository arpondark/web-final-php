CREATE DATABASE uiuweb_final;
USE uiuweb_final;

CREATE TABLE student_final (
    StudentID INT PRIMARY KEY,
    StudentName VARCHAR(100),
    CourseID INT,
    CourseTitle VARCHAR(100),
    Grade INT,
    LetterGrade CHAR(1)
);
INSERT INTO student_final VALUES
(1, 'Karim Uddin', 101, 'Web Programming', 85, 'B'),
(2, 'Rahim Ahmed', 101, 'Web Programming', 92, 'A'),
(3, 'Jashim Hossain', 102, 'Project Management', 78, 'C'),
(4, 'Jasica Ahmed', 101, 'Web Programming', 65, 'D'),
(5, 'Faria Karim', 102, 'Project Management', 95, 'A'),
(6, 'Niassoh Dihan', 103, 'System Analysis and Design', 80, 'B');
