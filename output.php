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
		.phpcoding{
			width: 8.27in;
			height: 11.69in;
			margin: 0 auto;
			background: <?php echo "#ddd";?>;
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
			min-height: 9.40in;
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
			<p>Student Result</p>
		</header>
		<section class="maincontent">
			<?php

			function gpa($gpa){
				if($gpa>=80 and $gpa<=100){
					$gpa = 5;
				}
				elseif ($gpa>=70 and $gpa<80) {
					$gpa = 4;
				}
				elseif ($gpa>=60 and $gpa<70) {
					$gpa = 3.5;
				}
				elseif ($gpa>=50 and $gpa<60) {
					$gpa = 3;
				}
				elseif ($gpa>=40 and $gpa<50) {
					$gpa = 2;
				}
				elseif ($gpa>=33 and $gpa<40) {
					$gpa = 1;
				}
				elseif ($gpa<33) {
					$gpa = 0;
				}
				return $gpa;
			}
			
				if($_SERVER['REQUEST_METHOD'] == "POST"){
					$name 		= validate($_POST['name']);
					$bangla 	= validate($_POST['bangla']);
					$english 	= validate($_POST['english']);
					$math 		= validate($_POST['math']);
					$class      = validate($_POST['class']);


						$bangla_gpa = gpa($bangla);
						$english_gpa = gpa($english);
						$math_gpa = gpa($math);
					
					if($bangla<33 or $english<33 or $math<33){
						$total = 0;
						echo "Fail<br>";
						echo "<table>
									<tr>
										<td>Name : </td>
										<td>$name</td>
									</tr>
									<tr>
										<td>GPA : </td>
										<td>$total</td>
									</tr>
							</table>";
					}
					else{
						

						

						$total = ($bangla_gpa+$english_gpa+$math_gpa)/3;
						echo "<table>
									<tr>
										<td>Name : </td>
										<td>$name</td>
									</tr>
									<tr>
										<td>Class : </td>
										<td>$class</td>
									</tr>
									<tr>
										<td>GPA : </td>
										<td>$total</td>
									</tr>
							</table>";
					}
				}
				function validate($data){
					$data = trim($data);
					$data = stripcslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}






				
			?>
		</section>
<footer class="footeroption">
			<h2>&copy; <?php echo date("Y");?> Abdul Majid</h2>
		</footer>
	</div>
</body>
</html>