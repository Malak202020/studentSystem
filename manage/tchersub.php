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
				<h1>	<a href="admin.php"><li>Home </span></li></a></h1>
		</div>
	</div>
</header>

<div class="form-style-5">
<form method = "POST" ACTION="update.php" enctype="multipart/form-data">
<fieldset>



      Select Teacher
      <br><SELECT name='teacher'>
      <?php
       //$UserRole=@$_POST['teacher'];
        $teacher = $MyDB->query("SELECT User_ID,User_Name FROM user  ");
        while($ex =   $teacher->fetch_assoc()){

          ?>
          <OPTION value="<?php echo $ex['User_Name'] ?>"><?php echo $ex['User_Name'] ?></OPTION>
          <?php
        }

       ?>

       <label for='User' >Select : </label>
       <select id="User"></br>
      Select Subject
       <br><SELECT name='subject'>
       <?php

         $subject = $MyDB->query("SELECT Sub_ID,Sub_Name FROM subject  ");
         while($ex = $subject->fetch_assoc()){

           ?>
           <OPTION value="<?php echo $ex['Sub_Name'] ?>"><?php echo $ex['Sub_Name'] ?></OPTION>
           <?php
         }

        ?>

</fieldset>
<input name="submit" Type="submit" value="UPDATE"/>


</form>

</div>

</body>
</html>