<?php
session_start();
include('./MyDB.php');
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
				<h1> <a href="admin.php">
						<li>Home </span></li>
					</a></h1>
			</div>
		</div>
	</header>

	<div class="form-style-5">
		<form method="POST" ACTION="./AddDep.php" enctype="multipart/form-data">
			<fieldset>
				<legend><span class="number"></span> Add Department</legend><br>
				<label for='name'>Department Name: </label>
				<input name="Name" Type="TEXT" required><br>

				<input name="submit" Type="submit" value="Add" />
			</fieldset>
			<?php

			if (isset($_GET['succes'])) {
				echo "<h3>" . $_GET['succes'] . "<h3>";
			}
			?>
		</form>

	</div>

</body>

</html>