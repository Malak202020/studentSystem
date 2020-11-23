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
    <form method="POST" ACTION="teacherSubject.php" enctype="multipart/form-data">
      <fieldset>

        <label for='Subject_Name'>Subject Name: </label>
        <input name="Subject_Name" Type="TEXT" required><br>
        Select Teacher
        <br><SELECT name='Subject_Teacher'>
          <?php
          //$UserRole=@$_POST['teacher'];
          $teacher = $MyDB->query("SELECT * FROM user WHERE User_Role = 'teacher'");
          while ($ex =   $teacher->fetch_assoc()) {

          ?>
            <OPTION value="<?php echo $ex['User_ID'] ?>"><?php echo $ex['User_Name'] ?></OPTION>
          <?php
          }

          ?>

          <label for='User'>Select : </label>
          <select id="User"></br>
            Select Department
            <br><SELECT name='subject_department'>
              <?php

              $subject = $MyDB->query("SELECT * FROM department ");
              while ($ex = $subject->fetch_assoc()) {

              ?>
                <OPTION value="<?php echo $ex['Dep_ID'] ?>"><?php echo $ex['Dep_Name'] ?></OPTION>
              <?php
              }

              ?>
            </SELECT>
            <label for='Subject_Stage'>Subject stage: </label>
            <select id="Subject_Stage" name="Subject_Stage">
              <option value="1">First Stage</option>
              <option value="2">Second Stage</option>
              <option value="3">Third Stage</option>
              <option value="4">Fourth Stage</option>
            </select>
      </fieldset>
      <input name="submit" Type="submit" value="Add" />


    </form>
   <?php if (isset($_GET['success'])) {
				echo "<h3>You added a new subject with the name " . $_GET['success']."<h3>";
      }
      
      ?>
  </div>

</body>

</html>