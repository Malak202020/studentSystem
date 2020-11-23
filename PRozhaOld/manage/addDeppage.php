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
		<label for='faculties'>Select Faculty: </label>
			<select id="faculties" name="faculties">
			<?php
				
			$faculties = $MyDB -> query("SELECT * FROM faculty"); //gets everything in faculty, puts it in $collages

			while($faculty = $faculties->fetch_assoc()){
				$facultyName = $faculty["F_Name"];
				$facultyID = $faculty["F_ID"];

				echo "<option value='".$facultyID."'>".$facultyName."</option>";
			}
	
			?>
			</select>
			<br>
			<fieldset>
				<legend><span class="number"></span> Add Department</legend><br>
				<label for='name'>Department Name: </label>
				<input name="departmentName" Type="TEXT" required><br>

				<input name="submit" Type="submit" value="Add" />
			</fieldset>



				<?php

				if (isset($_GET['success'])) {
					echo "<h3>You successfully added " . $_GET['success'] . " department<h3>";
				}
				?>
		</form>
		<?php
		$departments = $MyDB->query("SELECT *FROM department");
		while ($department = $departments->fetch_assoc()) {
			$departmentName = $department["Dep_Name"];

			echo $departmentName . "<br>";
		}
		?>
	</div>

</body>

</html>