<?php

include('./MyDB.php');

$Name = @$_POST['Name'];


$MyDB->query("INSERT INTO faculty (F_ID,F_Name) VALUES (NULL,'$Name')");
header("Location: AddCollegePage.php?succes=succed");

?>