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
		<form method="POST" ACTION="./AddCollege.php" enctype="multipart/form-data">
			<fieldset>
				<legend><span class="number"></span> Add Faculty</legend><br>
				<label for='name'>Name: </label>
				<input name="facultyName" Type="TEXT" required><br>

				<input name="submit" Type="submit" value="Add" />
			</fieldset>
			<?php

			if (isset($_GET['success'])) {
				echo "<h3> You successfully added ".$_GET['success']." faculty!<h3>";
			}
			?>
		</form>
		<?php

			$collages = $MyDB -> query("SELECT * FROM faculty"); //gets everything in faculty, puts it in $collages

			while($collage = $collages->fetch_assoc()){
				$collageName = $collage["F_Name"];

				echo $collageName."<br>";
			}



		?>
	</div>

</body>

</html>