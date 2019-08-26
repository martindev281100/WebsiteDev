<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="addproduct_style.css">
<?php  
	require_once('./dbshoes.php');

	
	if(isset($_GET['update']))
{
		$id = $_GET['id'];
		$name = $_GET['name'];
		$color = $_GET['color'];
		$Image1 = $_GET['Image1'];
		$Image2 = $_GET['Image2'];
		$cat = $_GET['cat'];
		$price = $_GET['price'];
		$descriptions= $_GET['descriptions'];

		$sql = "Update product set colorid='" . $color . "',ProductName='" . $name . "',  Image1='" . $Image1 . "',Image2='" . $Image2 . "',CatId=" . $cat . ", Price=" . $price . ", descriptions='".$descriptions."'  Where ProductId = '" . $id . "'";

		echo $sql;
		execsql($sql);
}
?>


<body>
	<div class="header"> 
			<a href="AdminPage.php"><img src="image/logo.png" alt="loading" class="logo"></a>
		</div>
	<div class="content">
		<div align="center">CLICK LOGO TO RETURN!</div> <br>
		<div align="center">
			<?php 
			if(isset($_GET['updateid']))
			{
				$id = $_GET['updateid'];
				$sql = "select * from product where ProductId='" . $id . "'";
				$rows = query($sql);
				?>
			<form action="" >
				<table border="1" align="center">
					<tr>
						<td >Id: </td>
						<td ><input type="text" id="id" value="<?=$rows[0][0]?>" disabled>
						<input type="hidden" name="id" value="<?=$rows[0][0]?>" >
						</td>
					</tr>
					<tr>
						<tr>
						<td class="col1">Color:</td>
						<td class="col2">
							<select name="color" id="color">
							<?php 
							$sql = "Select * From color";
							$colorname = query($sql);
							for($i=0; $i<count($colorname); $i++)
							{
								if($colorname[$i][0] == $rows[0][1])
								{
							?>
								<option value="<?=$colorname[$i][0]?>" selected="selected">
									<?=$colorname[$i][1]?>
								</option>
							<?php			
								}
								else
								{
							?>
								<option value="<?=$colorname[$i][0]?>">
									<?=$colorname[$i][1]?>
								</option>
							<?php									
								}
							?>
								
							<?php
							}
							?>
							</select>
						</td>
					
					<tr>
						<th>Product name:</th>
						<th><input type="text" name="name" id="name" value="<?=$rows[0][2]?>"></th>
					</tr>
					<tr>
						<th>Image 1:</th>
						<th><input type="text" name="Image1" id="Image1" value="<?=$rows[0][3]?>"></th>
					</tr>
					<tr>
						<th>Image 2:</th>
						<th><input type="text" name="Image2" id="Image2" value="<?=$rows[0][4]?>"></th>
					</tr>
					<tr>
						<th>Brand</th>
						<th><select name="cat" id="cat">
							<?php 
								$sql = "select *from category";
								$cats = query($sql);
								for ($i=0; $i < count($cats) ; $i++) { 
									# code...
									if ($cats[$i][0]==$rows[0][7]) {
										# code...?>
										<option value="<?=$cats[$i][0]?>"selected="selected">
											<?=$cats[$i][1]?>
										</option>

										<?php 
										}
											else
										{
										 ?>
										<option value="<?=$cats[$i][0]?>">
											
											<?=$cats[$i][1]?>
										</option>
										<?php 
										}
										 ?>
										<?php } ?>
					
						</select>
					</th>
					</tr>
					<tr>
						<th>Price:</th>
						<th><input type="text" name="price" id="price" value="<?=$rows[0][5]?>"></th>
					</tr>
						<tr>
						<th>Descriptions:</th>
						<th><input type="text" name="descriptions" id="descriptions" value="<?=$rows[0][6]?>"></th>
					</tr>
					<tr align="center">
						<td colspan="2"><a href="AdminPage.php?"><input type="submit" value="Save" name="update" id="update"></a></td>
					</tr>
				</table>
			</form>
<?php 
}
?>

	</div>
	</div>

	<div class="footer">
		<!-- copyright -->
	</div>
</body>
</html>