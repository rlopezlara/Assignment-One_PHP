CREATE TABLE pizzaOrders (
  id int not null auto_increment,
  fname varchar(255) NOT NULL,
  lname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone varchar(255) NOT NULL,
  pizza varchar(255) NOT NULL,
  psize varchar(255) NOT NULL,
  orderaddress varchar(255) NOT NULL,
  suiteapart varchar(255) NOT NULL,
  city varchar(255) NOT NULL,
  postcode varchar(255) NOT NULL,
  paymethod varchar(255) NOT NULL,
  primary key (id)
);
