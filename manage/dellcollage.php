<?php

  include('./MyDB.php');
  $F_ID = $_GET['F_ID'];
  $MyDB->query("SELECT F_ID,F_Name DELETE FROM faculty where F_ID='$FID' ");
header("Location: ./admin.php");

?>