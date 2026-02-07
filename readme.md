# Web Final PHP

This workspace contains small PHP and SQL tasks organized by folder.

## Structure
- 243/2, 251/2, 252/2: simple PHP + HTML tasks.
- 243/3, 251/3, 252/3: PHP scripts that run SQL against a MySQL database.

## Requirements
- PHP 7.4+ (or 8.x)
- MySQL or MariaDB
- A database named uiutech_final or uiuweb_final depending on the task folder

## How to run
1. Start your local MySQL server.
2. Place the workspace under your web server root or use the PHP built-in server:
	- From a task folder, run: php -S localhost:8000
3. Open the task file in a browser, for example:
	- http://localhost:8000/index.php

## Database connection line explained
These lines appear in the PHP scripts (one per task):

```php
$conn = new mysqli("localhost", "root", "arpon007", "uiutech_final");
$conn = new mysqli("localhost", "root", "arpon007", "uiuweb_final");
```

It has four parts in order:
1. Host: "localhost" (change if your DB is on another machine)
2. Username: "root" (change to your MySQL user)
3. Password: "arpon007" (change this to your MySQL user password if using xampp leave it blank like "")
4. Database: "uiutech_final" or "uiuweb_final" (change if your database has a different name)

### When to change the password
- Change the third parameter whenever your MySQL user password is different.
- If you create a new MySQL user, use that user's password here.
- If you update the password in MySQL, update it here to match.

## Notes
- If the database or table does not exist, the PHP scripts will fail.
- Make sure the user has permission to read and update the tables used by the scripts.# Web Final PHP

This workspace contains small PHP and SQL tasks organized by folder.

## Structure
- 251/2 and 252/2: simple PHP + HTML tasks.
- 251/3 and 252/3: PHP scripts that run SQL against a MySQL database.
 243/2, 251/2, 252/2: simple PHP + HTML tasks.
 243/3, 251/3, 252/3: PHP scripts that run SQL against a MySQL database.

## Requirements
- PHP 7.4+ (or 8.x)
- MySQL or MariaDB
- A database named uiutech_final with the expected tables (for example, employees)

## How to run
1. Start your local MySQL server.
2. Place the workspace under your web server root or use the PHP built-in server:
	- From a task folder, run: php -S localhost:8000
3. Open the task file in a browser, for example:
	- http://localhost:8000/index.php

## Database connection line explained
These lines appear in the PHP scripts (one per task):

```php
$conn = new mysqli("localhost", "root", "", "uiutech_final");
$conn = new mysqli("localhost", "root", "", "uiuweb_final");
```

It has four parts in order:
1. Host: "localhost" (change if your DB is on another machine)
2. Username: "root" (change to your MySQL user)
3. Password: "" (change this to your MySQL user password)
4. Database: "uiutech_final" or "uiuweb_final" (change if your database has a different name)

### When to change the password
- Change the third parameter whenever your MySQL user password is different.
- If you create a new MySQL user, use that user's password here.
- If you update the password in MySQL, update it here to match.

## Notes
- If the database or table does not exist, the PHP scripts will fail.
- Make sure the user has permission to read and update the tables used by the scripts.
