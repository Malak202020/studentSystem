<?php

include('./MyDB.php');

$User = @$_POST['User_Role'];


$MyDB->query("UPDATE INTO user  VALUES ('$User')");
header("Location: update.php?succes=succed");

?>