<?php

include('./MyDB.php');

$departmentName = @$_POST['departmentName'];


$MyDB->query("INSERT INTO department  VALUES (NULL,'$departmentName','1')");
header("Location: AddDepPage.php?success=".$departmentName);

?>