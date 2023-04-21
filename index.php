<?php

$className = 'Bus';

require_once $className . '.php';

$bus = new $className('80');


require_once 'DB.php';

$categoryTable = "CREATE TABLE categories (id int NOT NULL PRIMARY KEY 
										  AUTO_INCREMENT, name varchar(255))";

$productsTable = "CREATE TABLE products (id int NOT NULL PRIMARY KEY 
										 AUTO_INCREMENT, name varchar(255), 
										 price double,category_id int UNIQUE, 
										 characteristic_id int)";

$characteristicTable = "CREATE TABLE characteristics (id int NOT NULL PRIMARY KEY 
													 AUTO_INCREMENT,name varchar(255),
													 value varchar(255))";


$selectOne = "SELECT categories.id, categories.name as 
					 category, products.name, products.price FROM
					 categories JOIN products ON categories.id = products.category_id 
					 WHERE price = (SELECT max(price) from products)";

$selectTwo = "SELECT characteristics.name, count(products.id) as 
			 		'amount products' FROM characteristics JOIN 
			 		 products ON characteristics.id = products.characteristic_id GROUP BY
			 		 characteristics.name ORDER BY 'amount products' DESC";

$selectThree = "SELECT products.name, products.price FROM products JOIN categories ON
					   products.category_id = categories.id WHERE categories.name LIKE 
					   '%ama%' AND products.price BETWEEN 100 AND 200";


//DB::createTable($category);

//DB::selectFromTable($selectThree);