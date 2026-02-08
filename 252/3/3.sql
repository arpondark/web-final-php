create database sundarban;

use sundarban;

create table
    sales_data (
        SaleID INT PRIMARY KEY,
        ProductName VARCHAR(50),
        CategoryID INT,
        CategoryName VARCHAR(50),
        Quantity INT,
        Revenue INT
    );

insert into
    sales_data
values
    (1, 'Laptop', 301, 'Electronics', 5, 350000),
    (2, 'Mouse', 301, 'Electronics', 15, 45000),
    (3, 'Chair', 302, 'Furniture', 8, 64000),
    (4, 'Desk', 302, 'Furniture', 6, 72000),
    (5, 'Bottle', 303, 'Accessories', 20, 30000),
    (6, 'Pen', 303, 'Accessories', 25, 20000);