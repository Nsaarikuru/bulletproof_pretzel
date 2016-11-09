

<?php include "template/header.php";?>
<section id="main">
  <p>BULLETPROOF PRETZEL CO. is a premier baker of homemade pretzels since 1918. Our secret family recipe has been handed over four generations. Literally. Like on an index card.</p>
  
			<?php include "template/connection.php";?>

			<div class="shoparea">
				
			<?php 

			while ($row = $kysely->fetch()) {
				$name = htmlspecialchars($row["name"]);
				$img = $row["img"];
				$description = $row["description"];


			echo "<hr>";
		
			echo "<h3>{$name} </h3>";
			echo "<img src='template/".$row['img']."' />";
			echo "<p>{$description} </p>";
			}
				
			?>
</section>
<?php include "template/sidebar.php";?>
<?php include "template/footer.php"; ?>
</div>

</body>
</html>

</div>
</body>

</html>


