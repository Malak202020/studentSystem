
<?php

include('./mydb.php');

if(isset($_POST['submit'])){
$Subject_Name = @$_POST['Subject_Name'];
$subject_department = @$_POST['subject_department'];
$Subject_Stage = @$_POST['Subject_Stage'];
$Subject_Teacher = @$_POST['Subject_Teacher'];



$MyDB->query("INSERT INTO subject (Sub_ID, Sub_Name, Sub_Teacher, Sub_Dep, Sub_Stage)
VALUES (NULL,'$Subject_Name', '$Subject_Teacher', '$subject_department', '$Subject_Stage')");

print_r($_POST);

header("Location:teacherSubject_Page.php?success=".$Subject_Name);
}
?>