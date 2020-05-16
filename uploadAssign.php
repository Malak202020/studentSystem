<?php

if(isset($_POST['submit'])) {
    $assign=$_FILES['fileUpload'];
    $assignName=$_FILES['fileUpload']['name'];
    $assignTmpName=$_FILES['fileUpload']['tmp_name'];
    $assignSize=$_FILES['fileUpload']['size'];
    $assignError=$_FILES['fileUpload']['error'];
    $assignType=$_FILES['fileUpload']['type'];
    $username=$_SESSION['username'];
    $userID=$_SESSION['userID'];
    $professionID=$_SESSION['professionID'];

    $assignExt=explode('.', $assignName);
    $assignActualExt=strtolower(end($assignExt));

    $allowed = array('jpg','jpeg','png');

    if (in_array($assignActualExt, $allowed)) {
        if ($assignError === 0) {

            $assignDestination = 'uploads/'.$username.$userID;

            if(!file_exists('$assignDestination')){
                mkdir('uploads/'.$username.$userID, 0777, true);    
            }

            $assignDestination .= '/'.$assignName;

            move_uploaded_file($assignTmpName, $assignDestination);

            $queryassign="INSERT INTO material(userID, mat_Name)
            VALUES ('$userID','$assignName')";

            mysqli_query($conn, $queryassign);

            header("location: profile.php?userID=$userID&&username=$username&&professionID=$professionID'");
        } else {
            echo "there was an error uploading your file)):";
        }
    } else {
        echo "you can't upload file of this type you scum D:<";
    }
}


?>