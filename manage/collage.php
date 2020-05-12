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
			<h1><a href="#">Online<span>Shopping</span></a></h1>
				<h1>	<a href="home_manage.php"><li>Home </span></li></a></h1>
		</div>
	</div>
</header>

<div class="form-style-5">

	<Table border="10">
		<Tr>
			<Th>name</Th>
			<Th >Remove</Th>
		</Tr>
		<?php
			$b=$MyDB->query("SELECT F_ID,F_Name FROM faculty");
			while($ex = $b->fetch_assoc()){

		?>

		<Tr>
			<Td><?php echo $ex['F_name']?></Td>
			<Td><a HREF="dellCollage.php?ID=<?php echo $ex['F_ID']?>" >Del</a></Td>
		</Tr>

	<?php } ?>
	</Table>

</div>

</body>
</html>