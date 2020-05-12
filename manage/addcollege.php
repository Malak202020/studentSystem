<?php

include('./MyDB.php');

//$MyDB = mysqli_connect("localhost","root","","student_system") or die("Connection failed :: ".mysqli_error());


$facultyName = @$_POST['facultyName'];


$MyDB->query("INSERT INTO faculty VALUES (NULL,'$facultyName')");
header("Location: AddCollegePage.php?success=".$facultyName); //takes you to the link written

//CRUD --> Create [creating a faculty] Read [write down all faculties in the add page] Update Delete

?>