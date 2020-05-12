<?php

include('./MyDB.php');

$Name = @$_POST['Name'];


$MyDB->query("INSERT INTO department (Dep_ID,Dep_Name,F_ID) VALUES (NULL,'$Name','1')");
header("Location: AddDepPage.php?succes=succed");

?>