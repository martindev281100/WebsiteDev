	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="Adminpage_style.css">
<?php  
	require_once('./dbshoes.php');

	if(isset($_GET['deleteid']))
{
	$id = $_GET['deleteid'];
	$sql = "delete from product where ProductId = '" . $id . "'";
	execsql($sql);
}
?>
<body>
	<div class="header"> 
			<a href="Assigment 2 listpage1.php"><img src="image/logo.png" alt="loading" class="logo"></a>
		</div>
		<div>
			<div class="left" align="center">
				<div>
					<div class="content">Brand</div>
					<?php 

					$sql= "select *from category";	
					$rows= query($sql);
					for ($i=0; $i < count($rows); $i++)
					{
						?>
					<li class="noliststyle" style=" margin-top: 10px " ><a href="AdminPage.php?CatId=<?=$rows[$i][0]?>" class="notextdecor"><?=$rows[$i][1]?></a></li>
					
					<?php
					 } 
					 ?>
					 <br>
				 </div>
				 <div ><a href="addproduct.php"class="notextdecor">ADD PRODUCT</a> </div><br>
				 <div ><a href=""class="notextdecor">LOG OUT</a> </div>
				 	
	 		</div>
			<div class="right">
				 <?php 
				 	if (isset($_GET['CatId'])) {
				 		# code...
				 		$sql= "select *from product where CatId=".$_GET['CatId'];
				 	}
				 
				 	    else{
				 	    	$sql = "select *from product";
				 	    }

				 $rows = query($sql);
				 for ($i=0; $i < count($rows); $i++) { 
				 	  ?>
				<table border="1">
					<tr align="center">
						<td><?=$rows[$i][1]?></td>
						<td class="col2"><?=$rows[$i][2]?></td>
						<td class="colimg"><img src="<?=$rows[$i][3]?>" width="50%" alt=""></td>
						<td class="colimg"><img src="<?=$rows[$i][4]?>" width="75%" alt=""></td>
						<td><?=$rows[$i][5]?></td>
						<td class="col4"><?=$rows[$i][6]?></td>
						<td class="col5">
							<a href="updateproduct.php?updateid=<?=$rows[$i][0]?>" class="notextdecor">EDIT</a> <br>
							<a href="AdminPage.php?deleteid=<?=$rows[$i][0]?>" class="notextdecor">DELETE</a>
						</td>
					</tr>
				<?php } ?>
				</table>
			</div>
	</div>
</body>
</html>