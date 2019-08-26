<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="addproduct_style.css">
<?php  
	require_once('./dbshoes.php');

	if (isset($_GET['save'])) {
		$id = $_GET['id'];
		$color = $_GET['color'];
		$name = $_GET['name'];
		$Image1 = $_GET['Image1'];
		$Image2 = $_GET['Image2'];
		$cat = $_GET['cat'];
		$price = $_GET['price'];
		$descriptions= $_GET['descriptions'];
		$sql = "Insert Into product values('" . $id . "','" . $color . "','" . $name . "', '" . $Image1 . "','" . $Image2 . "', " . $price . ",'" . $descriptions . "' ," . $cat . ")";
		execsql($sql);
} 
	
?>


<body>
	<div class="header"> 
			<a href="AdminPage.php"><img src="image/logo.png" alt="loading" class="logo"></a>
		</div>
	<div class="content">
		<div class="left" align="center" >ADD PRODUCT</div><br>
		<div class="right">
<?php
{
 ?>
 			<form action="">
 				<table  align="center">
 					<tr>
 						<th>Id:</th>
 						<th><input type="text" name="id" id="id"></th>
 					</tr>
 					<tr>
 						<th>Color:</th>
 						<th>
 							<select name="color" id="color">
 								<?php 
 								$sql= "Select * from color";
 								$rows = query($sql);
 								for ($i=0; $i < count($rows) ; $i++) { 
 								  ?>
 								  <option value="<?=$rows[$i][0]?>">
 								  	<?=$rows[$i][1]?>
 								  </option>

							<?php
							}
							?>
 							
 							</select>
 						</th>
 					</tr>
 					<tr>
 						<th>Product Name:</td>
 						<th><input type="text" name="name" id="fname"></td>
 					</tr>
 					<tr>
 						<th>Image1:</th>
 						<th><input type="text" name="Image1" id="Image1"></th>
 					</tr>
 					<tr>
 						<th>Image2:</th>
 						<th><input type="text" name="Image2" id="Image2"></th>
 					</tr>
 					<tr>
 						<th>Brand:</th>
 						<th>
 							<select name="cat" id="cat">
 								<?php 
 								$sql= "Select * from category";
 								$rows = query($sql);
 								for ($i=0; $i < count($rows) ; $i++) { 
 								  ?>
 								  <option value="<?=$rows[$i][0]?>">
 								  	<?=$rows[$i][1]?>
 								  </option>
 								<?php } ?>
 							</select>
 						</th>
 					</tr>
 					<tr>
 						<th>Price:</th>
 						<th><input type="text" name="price" id="price"></th>
 					</tr>
 					<tr>
 						<th>Descriptions:</th>
 						<th><input type="text" name="descriptions" id="descriptions"></th>
 					</tr>
 					<br>
 					<tr >
 						<th colspan="2" align="center"><input type="submit" value="Save" name="save"></th>
 					</tr>
 				</table>
 			</form>
<?php } ?>
	</div>

	<div class="footer">
		<!-- copyright -->
	</div>
</body>
</html>