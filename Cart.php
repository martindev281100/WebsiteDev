<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
require_once('./dbshoes.php');

 ?>
<link rel="stylesheet" href="Cart_style.css">
<link rel="icon" href="image/Icon.png" type="image/gif" sizes="16x16">
<body class="webpage">
	<div>
		<div class="header" > 
			<a href="Assigment 2 listpage1.php"><img src="image/logo.png" alt="loading" class="logo"></a>
			<img src="image/cart_empty.png" alt="loading" class="cartLogo">
			<input type="text" class="search" placeholder="search">
		</div>

		<div class="cartMid">
			<div class="yourcart">YOUR CART</div>
		<br>
		<div>
			<table class="table">
				<tr>
					
						 <?php 
						 if (isset($_GET['productid'])) {
						 	# code...
						 $sql = "select * from product where ProductId=".$_GET['productid'];
						 }
						 
						 	echo $sql;
						 	$products= query($sql);
						 	for ($i=0; $i < count ($products) ; $i++) { 
						 		
						  ?>
						<th><img src="<?=$products[$i][3]?>"  class="productimg"></th>
						<th class="productname"><?=$products[$i][2]?></th>
						<th class="productname">$<?=$products[$i][5]?></th>
					<?php } ?>

						<th ><a href=""class="notextdecor">Delete</a></th>
				</tr>
			<?php  ?>
			</table>
			<?php 
			if (isset($_GET['productid'])) {
				# code...
				$sql = "select * from product where ProductId=".$_GET['productid'];

			}
			$products = query ($sql);
			for ($i=0; $i <count($products) ; $i++) { 
				# code...
			
			?>
			<div align="center"><a href="orders.php" class="checkout">CHECK OUT </a>  </div>
		<?php echo $sql;}  ?>
	<?php  ?>
		</div>
		