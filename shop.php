

<?php include "template/header.php";?>
<section id="main">
  <p>BULLETPROOF PRETZEL CO. is a premier baker of homemade pretzels since 1918. Our secret family recipe has been handed over four generations. Literally. Like on an index card.</p>
  
			<?php include "template/connection.php";?>

			<div class="shoparea">
				
			<?php 
			require "model.php";
			get_products_shop();
				
			?>
</section>
<?php include "template/sidebar.php";?>
<?php include "template/footer.php"; ?>
</div>

</body>
</html>
