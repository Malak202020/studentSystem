<?php

include('./MyDB.php');

$departmentName = @$_POST['departmentName'];
$facultyID = $_POST['faculties'];


$MyDB->query("INSERT INTO department  VALUES (NULL,'$departmentName','$facultyID')");
header("Location: AddDepPage.php?success=".$departmentName);

?>