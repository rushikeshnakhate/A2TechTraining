

create table ne_theme_park(park_code varchar(10) not null primary key, park_name varchar(35) not null, park_city varchar(50) not null, park_counter char(2) not null);



create table ne_employee(emp_num numeric(4) not null primary key, emp_title varchar(4) not null, emp_lname varchar(15) not null, emp_fname varchar(15) not null, emp_dob date not null, emp_hire_date date not null, emp_area_code varchar(4) not null, emp_phone varchar(12) not null, park_code varchar(10) not null, foreign key(park_code) references ne_theme_park(park_code));




create table ne_ticket(ticket_no numeric(10) not null primary key, ticket_price numeric(4,2), ticket_type varchar(10), park_code varchar(10) not null, foreign key(park_code) references ne_theme_park(park_code));




create table ne_attraction(attract_no numeric(10) not null primary key, attract_name varchar(35), attract_age numeric(3) not null, attract_capacity numeric(3) not null, park_code varchar(10) not null, foreign key(park_code) references ne_theme_park(park_code));




create table ne_hour(emp_num numeric(4) not null, attract_no numeric(10) not null, hours_per_attract numeric(2) not null, hours_rate numeric(4,2) not null, date_worked date not null, foreign key(emp_num) references ne_employee(emp_num), foreign key(attract_no) references ne_attraction(attract_no));




create table ne_sales(transaction_no numeric not null primary key, sale_date date not null, park_code varchar(10) not null, foreign key(park_code) references ne_theme_park(park_code));




create table ne_salesline(transaction_no numeric not null, line_no numeric(2) not null, ticket_no numeric(10) not null, line_qty numeric(4) not null, line_price numeric(9,2) not null, foreign key(transaction_no) references ne_sales(transaction_no), foreign key(ticket_no) references ne_ticket(ticket_no));
 

v
v
v
v
v
v
v
v
























