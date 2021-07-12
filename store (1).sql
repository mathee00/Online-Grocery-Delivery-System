CREATE TABLE customers(
    customer_id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(20) NOT NULL,
    address VARCHAR(20) NOT NULL,
    city VARCHAR(20) NOT NULL,
    state VARCHAR(20) NOT NULL,
    PRIMARY KEY ( customer_id )
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE accounts(
    account_id INT(10) NOT NULL AUTO_INCREMENT,
    customer_id INT( 10 ) NOT NULL ,
    account_type ENUM( 'savings', 'credit' ) NOT NULL,
    balance FLOAT( 9 ) NOT NULL,
    PRIMARY KEY ( account_id ), 
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id) 
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE orders (
  order_id INT(10) NOT NULL AUTO_INCREMENT,
  customer_id INT(10) NOT NULL ,
  date int NOT NULL,
  client varchar(255) NOT NULL,
  PRIMARY KEY ( order_id ), 
  FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* PRODUCTS table */

/* Query #1: create the table structure */

CREATE TABLE products (
  id int(10) UNSIGNED NOT NULL,
  name varchar(255) NOT NULL,
  price smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Query #2: set the primary key */
ALTER TABLE products ADD PRIMARY KEY (id);

/* Query #3: set the auto-increment */
ALTER TABLE products MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

/* ORDERS table */
/* Query #1: create the table structure */
/*CREATE TABLE orders (
  id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  date date NOT NULL,
  customer_id int( 10 ) UNSIGNED NOT NULL ,
  FOREIGN KEY (customer_id) REFERENCES customer_registration(User_ID),
  client varchar(255) NOT NULL,
  PRIMARY KEY ( id ), 
  FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/

/* Query #2: set the primary key */
/*ALTER TABLE orders ADD PRIMARY KEY (id);*/

/* Query #3: set the auto-increment */
/*ALTER TABLE orders MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT;*/

/* ORDER_PRODUCTS table */

/* Query #1: create the table structure */
CREATE TABLE order_products (
  id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  order_id int(10) NOT NULL,
  product_id int(10) UNSIGNED NOT NULL,
  price FLOAT( 9 ) NOT NULL,
  quantity int(4),
  discount FLOAT( 9 ) NOT NULL,
  total FLOAT( 9 ) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (order_id) REFERENCES orders(order_id),
  FOREIGN KEY (product_id) REFERENCES products(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Query #2: set the primary key */
/*ALTER TABLE order_products ADD PRIMARY KEY (id);*/

/* Query #3: set the auto-increment */
/*ALTER TABLE order_products MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT;*/

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1001, 'SOAP', 55),
(1002, 'HandWash', 65),
(1003, 'WASHING POWDER', 85);

INSERT INTO `customers` (`customer_id`, `name`, `address`,`city`, `state`) VALUES
(2501, 'Amala', '1st street','Colombo', 'Western'),
(2502, 'Kamal', '2nd street','Malabe', 'Western');

INSERT INTO `orders` (`order_id`, `customer_id`, `date`, `client`) VALUES
(25001, 2501, 20, 'dd'),
(25002, 2501, 22,'ddd'),
(25003, 2501, 23,'dd');

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `price`, `quantity`, `discount`, `total`) VALUES
(772201,25001, 1001, 50,10,10,490),
(772202,25001, 1002, 65,10,10,585),
(772203,25001, 1003, 85,10,10,765);






