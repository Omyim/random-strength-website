<?php 
	$number = rand(0, 100);
	$new = $number . "%";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>คุณเก่ง Point Blank <?php echo $new; ?></title>
	<style>
		body {
			margin: 0;
			padding: 0;
			color: #fff;
			font-family: sans-serif;
			background: url(img/bg.jpg);
			background-size: cover;
			line-height: 1.65em;
		}
	</style>
	<meta name="keyword" content="ตรวจสอบความเก่งและความสามารถชองคุณสำหรับเกม Point Blank กันหน่อย">
	<meta name="og:image" content="img/bg.jpg">
</head>
<body>
	<center>
		<h1>ตรวจเช็คความเก่งของคุณในเกม Point Blank กัน</h1> <br>
		<?php 
			if ($new < 25) {
				echo "<h2>เสียดายจังคุณเก่งเพียง ". $new ."</h2>";
			} else if ($new > 25) {
				echo "<h2><font color='red'>ว้าวคุณมีความสามารถถึง " . $new . "</font></h2>";
			}
		?>
	</center>
</body>
</html>