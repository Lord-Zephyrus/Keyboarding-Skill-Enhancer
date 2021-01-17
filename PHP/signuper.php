<!DOCTYPE HTML>
<html>
	<head>
		<title>User Signup</title>
		<link rel="Stylesheet" href="../CSS/Home.css">
	</head>

	<body>
		<div class="title"><h1>Keyboarding Enhancer</h1></div>
		<?php

			extract($_POST);
			include("DB.php");
			$rs=mysqli_query($con,"select * from user_profile where Username='$uname'");
			if (mysqli_num_rows($rs)>0)
			{		
				echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
				exit;
			}
			$query="INSERT INTO user_profile(Name,Email,Username,Password) VALUES('$name','$email','$uname','$pass')";
			$rs=mysqli_query($con,$query)or die("Could not create User Profile");
			$querys="INSERT INTO user_stats(Username,WC,CPM,WPM,ER) VALUES('$uname',0,0,0,0)";
			$rs=mysqli_query($con,$querys)or die("Could not enter user stats");
			$queryl="INSERT INTO leaderboard(Username,Score) VALUES('$uname',0)";
			$rs=mysqli_query($con,$queryl)or die("Could not enter leaderboard data");
			/*echo "<br><br><br><div class=head1>Your Login ID  <b>$uname</b> Created Sucessfully</div>";
			echo "<br><div class=head1>Please Login using your Login ID</div>";
			echo "<br><div class=head1><a href=../login.html>Login</a></div>";*/
			header("location:login.php?Sucess= Account Created");
		?>	
	</body>
</html>
