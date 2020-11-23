<?php

include('./MyDB.php');

//$MyDB = mysqli_connect("localhost","root","","student_system") or die("Connection failed :: ".mysqli_error());


$facultyName = @$_POST['facultyName'];


$MyDB->query("INSERT INTO faculty VALUES (NULL,'$facultyName')");

print_R($_POST);
header("Location: AddCollegePage.php?success=".$facultyName); //takes you to the link written

//CRUD --> Create [creating a faculty] Read [write down all faculties in the add page] Update Delete

?>