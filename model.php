


<?php 

// To be changed, lists all the available products 
// and prices from the 'products' table, should
// be merged with get_products function 

function get_products_shop() {

 require "template/connection.php";

	while ($row = $kysely->fetch()) {
				$name = htmlspecialchars($row["name"]);
				$img = $row["img"];
				$price = $row["price"];

			echo "<hr>";
			echo "<h3>{$name} </h3>";
			echo "<img src='template/".$row['img']."' />";
			echo "<h3>{$price} €";
			}
};

// Generates a list of all the products inside the 'products' table //
function get_products() {

	require "template/connection.php";

	while ($row = $kysely->fetch()) {
				$name = htmlspecialchars($row["name"]);
				$img = $row["img"];
				$description = $row["description"];


			echo "<hr>";
		
			echo "<h3>{$name} </h3>";
			echo "<img src='template/".$row['img']."' />";
			echo "<p>{$description} </p>";
			}
}




?>