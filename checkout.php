<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	require_once('./dbshoes.php');

	if(isset($_GET['submit']))
	{
		$fname = $_GET['fname'];
		$address = $_GET['address'];
		$phone = $_GET['phone'];
		$email = $_GET['email'];

		$sql = "Insert Into customer (FullName, Address, Phone, Email) values('".$fname."','".$address."',".$phone.",'".$email."') ";

	    echo $sql;
	    execsql($sql);
	}


  ?>
<link rel="stylesheet" href="checkout_style.css">
<link rel="icon" href="image/Icon.png" type="image/gif" sizes="16x16">
<body class="webpage">
	<div>
		<div class="header" > 
			<a href="Assigment 2 listpage1.php"><img src="image/logo.png" alt="loading" class="logo"></a>
			<img src="image/cart_empty.png" alt="loading" class="cartLogo">
			<input type="text" class="search" placeholder="search">
		</div>
		

	<form action="">

			<div class="checkout">CHECK OUT</div>
			<br>

			<div  align="center">
				<div><input type="text" name="fname" class="input" placeholder="FullName"></div>
				<div><input type="text" name="address" class="input" placeholder="Address"></div>
				<div><input type="text" name="phone" class="input" placeholder="Phone"></div>
				<div><input type="text" name="email" class="input" placeholder="Email"></div>
				<table>
					<tr>
						<?php 
						 if (isset($_GET['products'])) {
						 	# code...
						 $sql = "select * from product where ProductId=".$_GET['products'];
						 echo $sql;
						 }
						 	$products= query($sql);
						 	for ($i=0; $i < count ($products) ; $i++) { 
						 		
						  ?>
						<th><img style="width: 200px" src="<?=$products[$i][3]?>"  class="productimg"></th>
						<th class="productname"><?=$products[$i][2]?></th>
						<th class="productname">$<?=$products[$i][5]?></th>
					<?php } ?>

					</tr>
				</table>
				<?php 
				if (isset($_GET['products'])) {
					$sql = "select * from product where ProductId=".$_GET['products'];
				}
				
				$productid = query($sql);
				for ($i=0; $i < count($products) ; $i++) { 
				echo $sql;
			 ?>
				<div><a href="orders.php?ProductId=<?=$products[$i][0]?>"><input type="submit" value="continue" name="submit" id="submit"></a></div>
				<br>
				<?php } ?>

				<div> <a href="login.php" class="notice">You have admin account? Click to Log in</a> </div>

			</div>
			</form>
		</div>
		

