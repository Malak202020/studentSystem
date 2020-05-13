
<?php

include('./mydb.php');

if(isset($_POST['submit'])){
$User_Name = @$_POST['User_Name'];
$User_LastName = @$_POST['User_LastName'];
$User_Pass = @$_POST['User_Password'];
$User_Role = @$_POST['User_Role'];

$MyDB->query("INSERT INTO user (User_ID, User_Name, User_LastName, User_Pass, User_Role)
VALUES (NULL,'$User_Name', '$User_LastName', '$User_Pass', '$User_Role')");

header("Location:add_user_page.php?success=".$User_Name."&&role=".$User_Role);
}
?>