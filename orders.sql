CREATE TABLE orders (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    customer_name VARCHAR(100) NOT NULL,
    item_name VARCHAR(100) NOT NULL,
    quantity INT(10) NOT NULL
);