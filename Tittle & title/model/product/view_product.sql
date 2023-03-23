CREATE VIEW view_product AS 
SELECT product.*,
ROUND(

	IF(
		discount_percentage IS NULL || 
		discount_from_date > CURRENT_DATE || 
		discount_to_date < CURRENT_DATE , 

		price, 

		price * (1-discount_percentage/100)

		)
, -3) AS sale_price 
FROM product;

-- 1000,000 (price)
-- 20 (discount_percentage)
-- sale_price = 1000,000 * (1 - 20/100) = 1000,000 * 0.8 = 800,000

--- Số lẻ
-- 850,000 (price)
-- 15 (discount_percentage)
-- sale_price = 850,00 * (1 - 15/100) = 850,000 * 0.85 = 722,500
-- => ROUND(722,500, -3) => 722,500đ
