	<?php
			$connect = new PDO("mysql:host=localhost; dbname=bulletproof", "pretzel_admin","admin");
			$query = "SELECT id, name, img , price, description FROM products ORDER BY id ASC";

			$kysely = $connect->prepare($query);
			$kysely->execute();

			?>