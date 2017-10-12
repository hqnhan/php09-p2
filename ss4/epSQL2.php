1. Lấy sản phẩm giảm giá cao nhất
2. LẤy sản phẩm có giá nhỏ nhất
3. Tổng giá của những sản phẩm thuộc danh mục Guitars
4. Có bao nhiêu sản phẩm thuộc danh mục Drums 
5. Giá trung bình của những sản phầm danh mục Guitars
<?php
	//cau1.
		SELECT productName,MAX(`discountPercent`)
		FROM products
	//cau2.
		SELECT MIN(`listPrice`)
		FROM products
	//cau3.
		SELECT Sum(`listPrice`)
		FROM products
		INNER JOIN categories ON `products`.`categoryID` = `categories`.`categoryID`
		WHERE categoryName = 'Guitars';
	//cau4
		SELECT count(`listPrice`)
		FROM products
		INNER JOIN categories ON `products`.`categoryID` = `categories`.`categoryID`
		WHERE categoryName = 'Drums';
	//cau5
		SELECT AVG(`listPrice`)
		FROM products
		INNER JOIN categories ON `products`.`categoryID` = `categories`.`categoryID`
		WHERE categoryName = 'Guitars';

	


	

?>