<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 


//đây nè 
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

		
			<div class="checkout">LOG IN</div> 
			<br>
<form action="#" method="POST">
			<div  align="center">
				<div><input type="text" name="user" class="input" placeholder="Account"></div>
				<div><input type="password" name="password" class="input" placeholder="Password"></div>

				<div><input type="submit" value="Log In" name="submit"></div>
				<br>
	<?php 	
	require_once('./dbshoes.php');
	
  if(isset($_POST['user']) && isset($_POST['password'])){
  	$u = $_POST['user'];
  	$p = $_POST['password'];
  	$sql = "select * from account where usernames ='" . $u . "'and password='". $p."'";
  	$rows = query($sql);
  	if(count($rows)>0 ){
      $_SESSION['us'] = $u;
      echo "login success";
  		header("location:AdminPage.php");
  		echo $sql;
  	}
  	else{
  		
  		echo $sql;
  	}
  }
   ?>	
   </form>
   	

			</div>
			</div>
		   </body>
		   </html>
		

