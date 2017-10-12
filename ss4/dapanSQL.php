<?php
//cau1.
"	SELECT `firstName`,`lastName`,`orderDate`
	FROM customers
	INNER JOIN `orders` ON `orders`.`customerID` = `customers`.`customerID`
	WHERE `orderDate` LIKE '2014-06-__%'
//cau2.
	SELECT DISTINCT`city`,`emailAddress`
	FROM addresses
	INNER JOIN `customers` ON `customers`.`customerID` = `addresses`.`customerID`
	WHERE `emailAddress` LIKE '%@gmail%';
//cau3 
	SELECT DISTINCT `city`,`emailAddress`
	FROM addresses
	INNER JOIN `customers` ON `customers`.`customerID` = `addresses`.`customerID`
//cau4.
	SELECT productID,`productName`,`categoryName`,`listPrice`
	FROM products
	INNER JOIN categories ON products.`categoryID` = categories.`categoryID` 
	WHERE categoryName LIKE '%a%' AND listPrice > 500;
cau 5
	SELECT `firstName`,`lastName`, `productName`
	FROM customers
	INNER JOIN `orders` ON `customers`.`customerID` = `orders`.`customerID`
	INNER JOIN `orderitems` ON `orders`.`orderID` = `orderitems`.`orderID`
	INNER JOIN `products` ON `orderitems`.`productID` = `products`.`productID`
	WHERE productName = 'Gibson Les Paul';
?>