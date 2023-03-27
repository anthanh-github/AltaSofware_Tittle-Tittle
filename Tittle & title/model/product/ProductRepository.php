<?php
class ProductRepository
{

	protected function fetchAll($condition = null)
	{
		global $conn;
		$categories = array();
		$sql = "SELECT * FROM product";
		if ($condition) {
			$sql .= " WHERE  $condition"; //SELECT * FROM category WHERE id =1
		}

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$product = new Product($row["id"], $row["title"], $row["name"], $row["event_from_date"], $row["event_to_date"], $row["price"], $row["image"], $row["description1"], $row["description2"], $row["description3"]);
				$products[] = $product;
			}
		}
		return $products;
	}

	function getAll()
	{
		return $this->fetchAll();
	}
	function find($id)
	{
		global $conn;
		$condition = "id = $id";
		$products = $this->fetchAll($condition);
		$product = current($products);
		return $product;
	}
}
