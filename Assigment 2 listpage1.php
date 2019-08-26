<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
require_once('./dbshoes.php');
//echo $sql;
 ?>
<link rel="stylesheet" href="Assigment 2 listpage1 style.css">
<link rel="icon" href="image/Icon.png" type="image/gif" sizes="16x16">
<body class="webpage">
	<div>
		<div class="header" > 
			<a href="Assigment 2.php"><img src="image/logo.png" alt="loading" class="logo"></a>
			
			<form action="" method="GET" class="search">
			<input type="text"  name="key" placeholder="search"style="width: 60%;; font-size: 30px;" ><input type="submit" name="search" value="search" style=" font-size: 30px;  "></form>
		</div>

		<div class="left">
			
			<div class="block">
			<div class="title" align="center">Brand</div>
			
				
					<div class="content">
						<ul><?php 
						$sql = "select *from category";
						$rows= query($sql);
				
						for ($i=0; $i < count($rows) ; $i++) {
						 ?>
							<li><a href="Assigment 2 listpage1.php?catid=<?=$rows[$i][0]?>"><?=$rows[$i][1]?></a></li>
							<?php } ?>
						</ul>
					</div>
					
				
			</div>
			<br>
			<div >
						<a href="login.php" style="color: black; margin-left: 50px ">Log In as Admin?</a>
			</div>
			
		</div>
		<div class="right" >
				<p class="font" style="font-size: 30px">ALL PRODUCTS</p>
				
				<div>
						<table>
							<?php 
								if (isset($_GET['catid'])) {
									# code...
									$sql = "select * from product where CatId=".$_GET['catid'];
								}
								elseif(isset($_GET['search']))
								{
									$key = $_GET['key'];
									$sql = "Select * From product where ProductName like '%" . $key . "%'";
								}
								else
								{
									$sql = "Select * from product";
								}
								$name = query($sql);
								for ($i=0; $i <count($name) ; $i++) { 
							 ?>
							<tr style="width: 1000px">
								<th>
									<a href="productdetail.php?productid=<?=$name[$i][0]?>" >
										<img src="<?=$name[$i][3]?>" alt="loading" width="300" height="300"class="zoom">
										<div align="center" class="shoesname"><?=$name[$i][2]?></div>
									</a>
								</th>
								<th >
									<div style="margin-left: 300px;" >Price: $<?=$name[$i][5]?></div>

								</th>
								

							<?php } ?>
								
							</tr>
						</table>
				</div>
		</div>

</body>
</html>