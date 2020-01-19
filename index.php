<?php
$fonts = "verdana";
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Syntax</title>
	<style type="text/css">
		*{margin: 0;padding: 0;}
		body{
			font-family: <?php echo $fonts;?>;
		}
		p{
			margin: 0 auto;
			text-align: center;
		}
		.phpcoding{
			width: 900px;
			margin: 0 auto;
			background: <?php echo "#ddd";?>;
			margin-top: 10px;
		}
		.headeroption, .footeroption{
			background: #444;
			color: #fff;
			text-align: <?php echo "center";?>;
			padding: 20px;
		}
		.headeroption h2, .footeroption h2{
			margin: 0;
		}
		.maincontent{
			min-height: 400px;
			padding: 20px;
		}
		p{
			margin: 0;
		}
	</style>
</head>
<body>
	<div class="phpcoding">
		<header class="headeroption">
			<h2>Barati High School</h2>
			<h2>Taraganj, Rangpur</h2>
			<p>Student Result form</p>
		</header>
		<section class="maincontent">
		<hr>
			<div style="text-align:left;width:40%;display:inline-block;">
				<?php 
					echo "Today is ". date("d/M/Y (l)");
				?>
			</div>
			<div style="text-align:right;width:58%;display:inline-block;">
				<?php 
				date_default_timezone_set('Asia/Dhaka');
				echo "Time is ". date("h:i A");
			?>
			</div>
		<hr>
		<p style="text-align: left;margin-top: 5px;margin-bottom: 5px;color: red;">Please, fill up all input and click submit button...</p>
			<form action="output.php" method="post">
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" required=""></td>
					</tr>
					<tr>
						<td>Class</td>
						<td><input type="text" name="class" required=""></td>
					</tr>
					<tr>
						<td>Bangla</td>
						<td><input type="number" name="bangla" min="0" max="100" required=""></td>
					</tr>
					<tr>
						<td>English</td>
						<td><input type="number" name="english" min="0" max="100" required=""></td>
					</tr>
					<tr>
						<td>Math</td>
						<td><input type="number" name="math" min="0" max="100" required=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Submit"></input></td>
					</tr>
				</table>
			</form>
		</section>
<footer class="footeroption">
			<h2>&copy; <?php echo date("Y");?> Abdul Majid</h2>
		</footer>
	</div>
</body>
</html>