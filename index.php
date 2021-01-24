<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		WELCOME TO ROYAL LMS
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
	nav li a:hover{
				background-color:blue;
				color: white;}







	header{
		background-color: red;
	}
	section{
		background-color: blue;
	}
	
</style>

</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src=images/9.jpg width="120" height="">
			<h1 style="color:black;font-size: 40px;"><b><u>ROYAL LMS</u><b></h1>
				<marquee class="clg" direction="right" behavior="alternate" scrollamount="2">Royal Academy school</marquee>
		</div>


		<?php
		$db=mysqli_connect("localhost","root","","lmssss"); 
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="upload.php">UPLOAD</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
								<li><a href="upload.php">UPLOAD</a></li>
								<li><a href="admin_login.php">LOGIN</a></li>
								<li><a href="registration.php">SIGN-UP</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div class="">
		
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;"><U><B>WELCOME TO ROYAL LMS</B></U></h1><br><br>
				<h1 style="text-align: center;font-size: 25px;"><U><B>Open at: 09:00AM</B></U> </h1><br>
				<h1 style="text-align: center;font-size: 25px;"><U><B>Close at: 5:00PM</B></U></h1><br>
			</div>
		</div>
		</section>
		

	</div>
	<?php  

		include "footer.php";
	?>
</body>
</html>