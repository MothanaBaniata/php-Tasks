--Task1
SELECT
  employee_id,
  first_name,
  department_name
FROM
  employees
  INNER JOIN departments ON employees.employee_id = departments.department_id
  --Task2
SELECT
  employee_id,
  first_name,
  project_name
FROM
  employees
  LEFT JOIN projects ON employees.employee_id = projects.project_id
  --Task3
SELECT
  employee_id,
  first_name,
  department_name
FROM
  employees
  RIGHT JOIN departments ON employees.employee_id = departments.department_id
  --Task4
SELECT
  employee_id,
  first_name,
  project_name
FROM
  employees
  LEFT JOIN projects ON employees.employee_id = projects.project_id
UNION
SELECT
  employee_id,
  first_name,
  project_name
FROM
  employees
  RIGHT JOIN projects ON employees.employee_id = projects.project_id
  --Task5
SELECT
  e1.employee_id AS employee_id,
  e1.first_name AS first_name,
  e2.first_name AS manager_name
FROM
  employees e1
  INNER JOIN employees e2 ON e1.manager_id = e2.employee_id;

--Task6
SELECT
  *
FROM
  employees
  CROSS JOIN departments;

--Task7
SELECT
  e.employee_id,
  e.first_name,
  e.last_name,
  d.department_id,
  d.department_name
FROM
  employees e
  INNER JOIN departments d ON e.department_id = d.department_id;

--Task8
SELECT
  d.department_id,
  d.department_name,
  AVG(e.salary) AS average_salary
FROM
  employees e
  INNER JOIN departments d ON e.department_id = d.department_id
GROUP BY
  d.department_id,
  d.department_name;

--Task9
SELECT
  e.employee_id,
  e.first_name,
  e.last_name,
  p.project_id,
  p.project_name,
  p.start_date
FROM
  employees e
  JOIN projects p ON e.department_id = p.client_id
WHERE
  p.start_date > '2023-05-01';

--Task10
SELECT
  e.employee_id,
  e.first_name,
  e.last_name,
  d.department_name
FROM
  employees e
  JOIN departments d ON e.department_id = d.department_id
WHERE
  d.department_name = 'Sales';

--Task11
SELECT
  o.order_id,
  o.customer_id,
  c.customer_name,
  o.order_date
FROM
  orders o
  JOIN customers c ON o.customer_id = c.customer_id;

--Task12
SELECT
  e.employee_id,
  e.first_name,
  e.last_name,
  d.department_name
FROM
  employees e
  JOIN departments d USING (department_id);

--Task13
SELECT
  c.customer_id,
  c.customer_name,
  COUNT(o.order_id) AS total_orders
FROM
  customers c
  LEFT JOIN orders o ON c.customer_id = o.customer_id
GROUP BY
  c.customer_id,
  c.customer_name;

--Task14
SELECT
  c.customer_id,
  c.customer_name,
  COUNT(o.order_id) AS total_orders
FROM
  customers c
  JOIN orders o ON c.customer_id = o.customer_id
GROUP BY
  c.customer_id,
  c.customer_name
HAVING
  COUNT(o.order_id) > 5;

--Task15
SELECT
  e.employee_id,
  e.first_name,
  e.last_name,
  e.department_id,
  d.department_name,
  CASE
    WHEN d.department_name = 'HR' THEN 'Human Resources'
    WHEN d.department_name = 'Engineering' THEN 'Engineering Department'
    WHEN d.department_name = 'Sales' THEN 'Sales Department'
    WHEN d.department_name = 'Marketing' THEN 'Marketing Department'
    ELSE 'Unknown Department'
  END AS department_classification
FROM
  employees e
  JOIN departments d ON e.department_id = d.department_id;

--Task16
SELECT
  e.employee_id,
  e.first_name,
  d.department_name
FROM
  employees e
  JOIN departments d ON e.department_id = d.department_id
ORDER BY
  d.department_name,
  e.first_name;

--Task17
SELECT
  e.employee_id,
  e.first_name,
  d.department_name,
  p.project_name
FROM
  employees e
  JOIN departments d ON e.department_id = d.department_id
  JOIN projects p ON e.department_id = p.client_id;

--Task18
SELECT
  e.employee_id,
  e.first_name,
  p.project_name,
  c.client_name
FROM
  employees e
  LEFT JOIN departments d ON e.department_id = d.department_id
  LEFT JOIN projects p ON d.department_id = p.client_id
  LEFT JOIN clients c ON p.client_id = c.client_id;

--Task19
SELECT
  d.department_id,
  d.department_name,
  e.employee_id,
  e.first_name,
  s.amount AS salary
FROM
  departments d
  LEFT JOIN employees e ON d.department_id = e.department_id
  LEFT JOIN salaries s ON e.employee_id = s.employee_id;

--Task20
SELECT
  e.employee_id,
  e.first_name,
  p.project_name,
  d.department_name
FROM
  employees e
  LEFT JOIN departments d ON e.department_id = d.department_id
  LEFT JOIN projects p ON d.department_id = p.client_id;

--Task21
SELECT
  e.employee_id,
  e.first_name AS employee_first_name,
  m.employee_id AS manager_employee_id,
  m.first_name AS manager_first_name,
  d.department_name
FROM
  employees e
  LEFT JOIN employees m ON e.manager_id = m.employee_id
  JOIN departments d ON e.department_id = d.department_id;

--Task22
SELECT
  e.employee_id,
  e.first_name AS employee_first_name,
  d.department_name,
  p.project_name
FROM
  employees e
  CROSS JOIN departments d
  CROSS JOIN projects p;

--Task23
SELECT
  emp.employee_id,
  emp.first_name AS employee_first_name,
  dep.department_name,
  proj.project_name
FROM
  employees emp
  JOIN departments dep ON emp.department_id = dep.department_id
  JOIN projects proj ON dep.department_id = proj.client_id;

--Task24
SELECT
  d.department_id,
  d.department_name,
  SUM(s.amount) AS total_salary_expenditure
FROM
  departments d
  JOIN employees e ON d.department_id = e.department_id
  JOIN salaries s ON e.employee_id = s.employee_id
GROUP BY
  d.department_id,
  d.department_name;

--Task25
SELECT
  e.employee_id,
  e.first_name,
  p.project_name,
  c.client_name
FROM
  employees e
  JOIN projects p ON e.department_id = p.client_id
  JOIN clients c ON p.client_id = c.client_id
WHERE
  c.client_name = 'Client c';

--Task26
SELECT
  o.order_id,
  c.customer_name,
  p.product_name,
  oi.quantity,
  o.order_date
FROM
  orders o
  JOIN customers c ON o.customer_id = c.customer_id
  JOIN order_items oi ON o.order_id = oi.order_id
  JOIN products p ON oi.product_id = p.product_id
WHERE
  p.product_name = 'Product Y';

--Task27
SELECT
  e.employee_id,
  e.first_name,
  d.department_name,
  l.location_name
FROM
  employees e
  JOIN departments d ON e.department_id = d.department_id
  JOIN locations l ON d.department_id = l.location_id;

--Task28
SELECT
  c.customer_id,
  c.customer_name,
  SUM(oi.quantity) AS total_quantity_items
FROM
  customers c
  JOIN orders o ON c.customer_id = o.customer_id
  JOIN order_items oi ON o.order_id = oi.order_id
GROUP BY
  c.customer_id,
  c.customer_name;

--Task29
SELECT
  c.customer_id,
  c.customer_name,
  SUM(oi.quantity) AS total_quantity_items
FROM
  customers c
  JOIN orders o ON c.customer_id = o.customer_id
  JOIN order_items oi ON o.order_id = oi.order_id
GROUP BY
  c.customer_id,
  c.customer_name
HAVING
  SUM(oi.quantity) > 10;

--Task30
-- SELECT
--   e.employee_id,
--   e.first_name,
--   d.department_name,
--   CASE
--     WHEN p.project_id IS NOT NULL THEN 'Participating'
--     ELSE 'Not Participating'
--   END AS project_status
-- FROM
--   employees e
--   LEFT JOIN departments d ON e.department_id = d.department_id
--   LEFT JOIN projects p ON e.employee_id = p.client_id;

--Task31
SELECT
  e.employee_id,
  e.first_name,
  d.department_name,
  p.project_name,
  p.start_date
FROM
  employees e
  JOIN departments d ON e.department_id = d.department_id
  JOIN projects p ON e.employee_id = p.client_id
WHERE
  p.start_date > '2023-01-01';

--Task32
SELECT
  e.employee_id,
  e.first_name,
  d.department_name,
  p.project_name
FROM
  employees e
  JOIN departments d ON e.department_id = d.department_id
  JOIN projects p ON e.employee_id = p.client_id
ORDER BY
  d.department_name,
  p.project_name,
  e.first_name;