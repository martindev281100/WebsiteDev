<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
require_once('./dbshoes.php');

 ?>
<link rel="stylesheet" href="AdidasOzwegoo style.css">
<link rel="icon" href="image/Icon.png" type="image/gif" sizes="16x16">
<body class="webpage">
	<div>
		<div class="header"> 
				
			<a href="Assigment 2 listpage1.php"><img src="image/logo.png" alt="loading" class="logo"></a>
			<input type="text" class="search" placeholder="search">
		</div>
		<div class="left">
			<?php 
			if (isset($_GET['productid'])) {
				# code...
				$sql = "select * from product where ProductId=	". $_GET['productid'];
			}
			else
			{
				$sql = "select * from product";
			}
					$productid = query($sql);
					$rows= query($sql);
					for ($i=0; $i < count($rows); $i++) { 
			 ?>
			<div class="shoesimg"><img src="<?=$rows[0][3]?>" alt="loading" width="550" height="550" ></div>
		</div>


		<div class="right">
		
			<div class="font" style="font-size: 30px"><?=$rows[$i][2]?></div><br>
			<div class="font" style="margin-right: 100px; text-align: justify;"><?=$rows[$i][6]?></div>
			<br>
			<div align="center"><img src="<?=$rows[0][4]?>" alt="loading" width="300" height="300" ></div>
			<br>
			<div class="font" align="center">Price: $<?=$rows[0][5]?> </div>
			 <br>
			
			<div align="center"><a href="Cart.php?productid=<?=$productid[$i][0]?>"><input type="submit" value="Add to cart" name="add"  onclick="myFunction()" ></a> </div>
		<?php } ?>
			<div id="snackbar">Added to cart!</div>
		
			</div>
			
			<script>
			function myFunction() {
			  var x = document.getElementById("snackbar");
			  x.className = "show";
			  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			}
			</script>

</div>
</div>
</body>
</html>