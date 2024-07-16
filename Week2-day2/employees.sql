-- Task 1
SELECT
  *
FROM
  employees
  -- Task 2
SELECT
  FirstName,
  Salary
FROM
  employees
  -- Task 3
SELECT
  *
FROM
  employees
WHERE
  Salary > 50000
  -- Task 4
SELECT
  *
FROM
  employees
WHERE
  FirstName LIKE 'J%'
  -- Task 5
SELECT
  *
from
  employees
WHERE
  DepartmentId IN (1, 2, 3)
  -- Task 6
SELECT
  *
from
  employees
ORDER BY
  HireDate DESC;

-- Task 7
SELECT
  COUNT(*)
FROM
  employees
  -- Task 8
SELECT
  SUM(Salary)
FROM
  employees
  -- Task 9
SELECT
  AVG(Salary)
FROM
  employees
  -- Task 10
SELECT
  MIN(Salary)
FROM
  employees
SELECT
  MAX(Salary)
FROM
  employees
  -- Task 11
  --1
SELECT
  *
FROM
  employees
WHERE
  Salary > 50000
  --2
SELECT
  *
FROM
  employees
GROUP BY
  DepartmentID
HAVING
  AVG(Salary) > 50000
  -- Task 12
CREATE TABLE
  employees (
    employee_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE,
    phone_number VARCHAR(20),
    department VARCHAR(100)
  );

CREATE TABLE
  employee_details (
    employee_id INT PRIMARY KEY,
    date_of_birth DATE,
    address VARCHAR(255),
    FOREIGN KEY (employee_id) REFERENCES employees (employee_id)
  );

-- Task 13
CREATE TABLE
  Department (
    department_id INT PRIMARY KEY,
    department_name VARCHAR(50) NOT NULL
  );

CREATE TABLE
  Employee (
    employee_id INT PRIMARY KEY,
    employee_name VARCHAR(50) NOT NULL,
    department_id INT,
    FOREIGN KEY (department_id) REFERENCES Department (department_id)
  );

-- Task 14
CREATE TABLE
  students (
    student_id INT PRIMARY KEY,
    student_name VARCHAR(50)
  );

CREATE TABLE
  courses (
    course_id INT PRIMARY KEY,
    course_name VARCHAR(50)
  );

CREATE TABLE
  student_courses (
    student_id INT,
    course_id INT,
    PRIMARY KEY (student_id, course_id),
    FOREIGN KEY (student_id) REFERENCES students (student_id),
    FOREIGN KEY (course_id) REFERENCES courses (course_id)
  );

-- Task 15
ALTER TABLE Employee ADD CONSTRAINT fk_department_id FOREIGN KEY (department_id) REFERENCES Department (department_id);

-- Task 16
ALTER TABLE Employee MODIFY COLUMN employee_name VARCHAR(50) NOT NULL;

-- Task 17
ALTER TABLE Employees ADD CONSTRAINT uc_email UNIQUE (email);

-- Task 18
ALTER TABLE Employee ADD CONSTRAINT chk_salary CHECK (salary > 0);

-- Task 19
ALTER TABLE employees
ALTER COLUMN status
SET DEFAULT 'Active';

/*******************************************************************Task 20 *******************************************************************/
--create databse
CREATE DATABASE My_company;

--create tables: departments, employees, projects.
CREATE TABLE
  departments (
    dept_id INT PRIMARY KEY AUTO_INCREMENT,
    dept_name varchar(50)
  );

CREATE TABLE
  employees (
    emp_id INT PRIMARY KEY AUTO_INCREMENT,
    emp_name varchar(40),
    dept_id INT,
    hire_date date,
    salary decimal(10, 2),
    status varchar(20) DEFAULT 'Active',
    email varchar(50) UNIQUE
  )
CREATE TABLE
  projects (
    proj_id int PRIMARY KEY AUTO_INCREMENT,
    proj_name varchar(30) not null
  )
  -- Add one-to-many between departments and employees
ALTER TABLE employees ADD CONSTRAINT FOREIGN KEY (dept_id) REFERENCES departments (dept_id);

-- Add many-to-many between employees and projects
--we can reach that relation by create the employee_projects table (pivot table)
create table
  employee_projects (
    emp_id int,
    proj_id int,
    PRIMARY KEY (emp_id, proj_id),
    FOREIGN KEY (emp_id) REFERENCES employees (emp_id),
    FOREIGN KEY (proj_id) REFERENCES projects (proj_id)
  )
  --next step i insert data in the tables to make the next tasks
  --(NOT NULL, UNIQUE, DEFAULT, and foreign keys) already used.
  --now lets use CHECK for the salary field
ALTER TABLE employees ADD CONSTRAINT CHECK (salary > 0);

-- Queries: Write queries to demonstrate use of SELECT, WHERE, LIKE, IN, ORDER BY, aggregation functions, WHERE vs. HAVING.
SELECT
  emp_id,
  emp_name,
  hire_date,
  salary
FROM
  employees
WHERE
  emp_name LIKE 'J%';

SELECT
  emp_id,
  emp_name,
  hire_date,
  salary,
  dept_id
FROM
  employees
WHERE
  dept_id IN (1, 2)
ORDER BY
  hire_date;

SELECT
  dept_id,
  COUNT(*) AS num_employees
FROM
  employees
GROUP BY
  dept_id;

/*
example count output
dept_id	   num_employees	
1          19
2          10
3          9
4          8

 */
-- we cant using where here because it's filters individual rows before any grouping occurs and cannot directly filter based on an aggregate result
SELECT
  dept_id,
  SUM(salary) AS total_salary
FROM
  employees
GROUP BY
  dept_id
HAVING
  COUNT(*) > 10;

/*
example count with having output
dept_id	   dSUM(salary)
1          1151000.00
 */