<?php
session_start();
include('./mydb.php');


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Add_product.css">
<link rel="stylesheet" href="second-bar.css">
<link rel="stylesheet" href="header-second-bar.css">
</head>

<body bgcolor="#E6E6FA">
<header class="header-two-bars">
	<div class="header-first-bar">
		<div class="header-limiter">
			<h1><a href="">StudentSystem <span> Admin </span></a></h1>
				<h1>	<a href="admin.php"><li>Home </span></li></a></h1>

		</div>
	</div>
</header>

<div class="form-style-5">
<form method = "POST" ACTION="./Add_user.php" enctype="multipart/form-data">
<fieldset>
<legend><span class="number"></span> Add User</legend><br>
<label for='User_Name' >User Name: </label>
<input name="User_Name" Type="TEXT" required><br>

<label for='User_LastName' >Last Name: </label>
<input name="User_LastName" Type="TEXT" required><br>

<label for='User_Password' >User Password: </label>
<input name="User_Password" Type="TEXT" required><br>


<label for='User_Role' >User Role: </label>
<select id="User_Role">
	<option value="None">--Select User Role----</option>
	<option value="ID01">Admin</option>
			<option value="ID03">Teacher</option>
			<option value="ID02">Student</option>





<input name="submit" Type="submit" value="Add"/>
</fieldset>
<?php

	if(isset($_GET['succes'])){
		echo "<h3>".$_GET['succes']."<h3>";
	}
?>
</form>

</div>

</body>
</html>