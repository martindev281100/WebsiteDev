<!DOCTYPE html>
<html>
<head>
	<title>Leonry Sport Shop</title>	
</head>
<link rel="stylesheet" type="text/css" href="shopp.css">
<?php 
require_once('./dbshoes.php');
if(isset($_GET['save']))
{
	$id=$_GET['id'];
	$name=$_GET['name'];
	$image=$_GET['image'];
	$cat=$_GET['cat'];
	$price=$_GET['price'];
	$sql="Insert Into product values('" . $id . "', '" . $name . "', '" . $image . "', " . $price . ", " . $cat . ")";
	execqpl($sql);
}

if(isset($_GET['deleteid']))
{
	$id = $_GET['deleteid'];
	$sql = "delete from product where ProductId = '" . $id . "'";
	execsql($sql);
}
if(isset($_GET['update']))
{
	$id = $_GET['id'];
	$name = $_GET['name'];
	$image = $_GET['image'];
	$cat = $_GET['cat'];
	$price = $_GET['price'];
	$sql = "Update product set ProductName='" . $name . "', Image='" . $image . "', Price=" . $price . ", CatId=" . $cat . " Where ProductId = '" . $id . "'";
	
	execsql($sql);
}
 ?>
<body>
<div class=".boundary">
<div class=".header">
	<ul>
		<li><a href="shop.php">Home</a></li>
		<li><a href="shop.php">Product</a></li>
		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>	
		<li><a href="admin.php">Admin</a></li>
	</ul>
</div>
</div>
<a href="shop.php"><img class="image" src="532px-L_Old_London.svg.png" ></a>
<h1 style="font-size: 100px">Leonry Sport Shop</h1>
<form action="">
				Search: <input type="text" name="key">
				<input type="submit" name="search" value="Search">
			</form>
			<table border="1" cellspacing="0" align="center">
				<tr>
					<th width="150">Image</th>
					<th>Product name</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
<?php 
	if(isset($_GET['catid']))
	{
		$sql = "Select * From Product Where CatId=" . $_GET['catid'];
	}
	elseif(isset($_GET['search']))
	{
		$key = $_GET['key'];
		$sql = "Select * From Product where ProductName like '%" . $key . "%'";
	}
	else
	{

		$sql = "Select * From Product";
	}
	$rows = query($sql);
	for($i=0; $i<count($rows); $i++)
	{
		?>
				<tr align="center">
					<td><img src="<?=$rows[$i][2]?>" width="100%" alt=""></td>
					<td><?=$rows[$i][1]?></td>
					<td><?=$rows[$i][3]?></td>
					<td>
						<a href="index.php?updateid=<?=$rows[$i][0]?>">Edit</a> 
						<a href="index.php?deleteid=<?=$rows[$i][0]?>">Delete</a>
					</td>
				</tr>
		<?php
	}
?>
			</table>
<?php 
if(isset($_GET['updateid']))
{
	$id = $_GET['updateid'];
	$sql = "select * from product where ProductId='" . $id . "'";
	$rows = query($sql);
	?>
			<form action="">
				<table border="1" cellspacing="0" width="100%" class="table">
					<tr>
						<th colspan="2">Add new product</td>
					</tr>
					<tr>
						<td width="20%" class="col1">Id: </td>
						<td width="80%" class="col2"><input type="text" id="id" value="<?=$rows[0][0]?>" disabled>
						<input type="hidden" name="id" value="<?=$rows[0][0]?>" >
						</td>
					</tr>
					<tr>
						<td class="col1">Product name: </td>
						<td class="col2"><input type="text" name="name" id="fname" value="<?=$rows[0][1]?>"></td>
					</tr>
					<tr>
						<td class="col1">Product image: </td>
						<td class="col2"><input type="text" name="image" id="image" value="<?=$rows[0][2]?>"></td>
					</tr>
					<tr>
						<td class="col1">Category:</td>
						<td class="col2">
							<select name="cat" id="cat">
							<?php 
							$sql = "Select * From Category";
							$cats = query($sql);
							for($i=0; $i<count($cats); $i++)
							{
								if($cats[$i][0] == $rows[0][4])
								{
							?>
								<option value="<?=$cats[$i][0]?>" selected="selected">
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
								
							<?php
							}
							?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="col1">Price: </td>
						<td class="col2"><input type="text" name="price" id="price" value="<?=$rows[0][3]?>"></td>
					</tr>
					<tr>
						<td class="col1"></td>
						<td class="col2"><input type="submit" value="Save" name="update"></td>
					</tr>
				</table>
			</form>
	<?php
}
else
{
	?>
			<form action="">
				<table border="1" cellspacing="0" width="100%" class="table">
					<tr>
						<th colspan="2">Add new product</td>
					</tr>
					<tr>
						<td width="20%" class="col1">Id: </td>
						<td width="80%" class="col2"><input type="text" name="id" id="id"></td>
					</tr>
					<tr>
						<td class="col1">Product name: </td>
						<td class="col2"><input type="text" name="name" id="fname"></td>
					</tr>
					<tr>
						<td class="col1">Product image: </td>
						<td class="col2"><input type="text" name="image" id="image"></td>
					</tr>
					<tr>
						<td class="col1">Category:</td>
						<td class="col2">
							<select name="cat" id="cat">
							<?php 
							$sql = "Select * From Category";
							$rows = query($sql);
							for($i=0; $i<count($rows); $i++)
							{
							?>
								<option value="<?=$rows[$i][0]?>">
									<?=$rows[$i][1]?>
								</option>
							<?php
							}
							?>
							</select>
						</td>
					</tr>
					<tr>
						<td class="col1">Price: </td>
						<td class="col2"><input type="text" name="price" id="price"></td>
					</tr>
					<tr>
						<td class="col1"></td>
						<td class="col2"><input type="submit" value="Save" name="save"></td>
					</tr>
				</table>
			</form>
	<?php
}
?>
