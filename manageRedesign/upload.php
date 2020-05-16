<?php

include('./MyDB.php');

$Name = @$_POST['Name'];


$MyDB->query("INSERT INTO assingment (Assing_ID,Assing_Name,Assing_file,Sub_ID) VALUES (NULL,'Assingment','File','1')");
header("Location: TchrHome.php?succes=succed");

?>
