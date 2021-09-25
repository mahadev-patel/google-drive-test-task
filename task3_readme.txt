#Task
The idea is to build an Organization Employee System database schema, where an employee can work for multiple departments, having multiple roles and each role have
multiple permissions. An employee can be the Head of multiple departments. The schema should be flexible enough for new employee entry, change in the role, change in the department level. Minimum insert or update should be performed.

#Instruction:

I have created database schema in schema folder on root and keep the sql file organization_employee.sql .

You can see I have created 5 tables:
a. employees
b. departments
c. roles
d. permissions
e. employee_department_role_permission_mapping

employees , departments , roles , permissions tables are independent tables 

But the table employee_department_role_permission_mapping contain mapping data. So each employee can belongs to many departments and employee can have many roles and many permission. All the things can be manage by this mapping table.



