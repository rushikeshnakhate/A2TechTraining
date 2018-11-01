


create table samira_theme_park(park_code varchar(10)primary key,park_name varchar(35)not null,park_city varchar(50)not null,park_countr char(2));

create table samira_employee(emp_num numeric(4)primary key,emp-titl varchar(4)not null,emp_lname varchar(15)noy null,emp_fname varchar(15)not null,emp_dob date not null,emp_hire_date date not null,emp_areacode varchar(4)not null,emp_phone varchar(12)not null,park_code varchar(10), foreign key(park_code) references samira_theme_park(park_code);

create table samira_attraction(attract_no numeric(10)primary key,park_code varchar(10), foreign key(park_code) references samira_theme_park(park_code),attract_name varchar(35),attract_age numeric(3)not null,attract_capacity numeric(3)not null);

create table samira_hours(emp_num numeric(4),foreign key(emp_num) references samira_employee(emp_num),attract_no numeric(10), foreign key(attract_no) references samira_attraction(attract_no),hours_per_attract numeric(2)not null,hours_rate numeric(4,2)not null,date_worked date not null);

create tables samira_sales(transaction_no numeric primary key,park_code varchar(10), foreign key(park__code) references samira_theme_park(park_code),sale_date date not null);





create table samira_salesline(transaction_no numeric, foreign key(transaction_no) references samira_sales(transaction_no),line_no numeric(2)not null,ticket_no numeric(10), foreign key(ticket_no) references samira_ticket(ticket_no),line_qty  numeric(4)not null,line_price numeric(9,2)not null);


create table samira_ticket(ticket_no numeric(10)primary key,ticket_price numeric(4,2)not null,ticket_type varchar(10)not null,park_code varchar(10), foreign key(park_code) references samira_theme_park(park_code));






















