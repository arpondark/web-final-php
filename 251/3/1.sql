CREATE DATABASE uiutech_final;
USE uiutech_final;

CREATE TABLE employees (
   EmployeeID INT PRIMARY KEY ,
   Employee_Name VARCHAR(50),
   DepartmentID INT,    
   Department_Name VARCHAR(50),
   Salary INT,
   Performance_Rating char(1)
);

INSERT INTO employees VALUES
(1, 'Arif Rahman', 201, 'Software Development', 45000, 'B'),
(2, 'Marium Khan', 201, 'Software Development', 52000, 'A'),
(3, 'Sabbir Hossain', 202, 'Quality Assurance', 38000, 'C'),
(4, 'Samira Begum', 203, 'UI/UX Design', 42000, 'B');