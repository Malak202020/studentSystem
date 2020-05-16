<?php
include('./MyDB.php');
if(isset($_POST['submit'])) {
    $assign=$_FILES['fileUpload'];
    $assignName=$_FILES['fileUpload']['name'];
    $assignTmpName=$_FILES['fileUpload']['tmp_name'];
    $assignSize=$_FILES['fileUpload']['size'];
    $assignError=$_FILES['fileUpload']['error'];
    $assignType=$_FILES['fileUpload']['type'];

    $assign_sub = $_GET["subject_ID"];
    $assign_dep = $_GET["Sub_Dep"];
    $assign_stage = $_GET["Sub_Stage"];
    $assign_teacher = $_GET["sub_teacher"];
    $assign_name = $_GET["sub_name"];

    $assignExt=explode('.', $assignName);
    $assignActualExt=strtolower(end($assignExt));

    $allowed = array('jpg','jpeg','png','docx','pdf','ppt');

    if (in_array($assignActualExt, $allowed)) {
        if ($assignError === 0) {

            $assignDestination = 'uploads/assign/'.$assign_name.$assign_stage.$assign_sub;

            if(!file_exists('$assignDestination')){
                mkdir('uploads/assign/'.$assign_name.$assign_stage.$assign_sub, 0777, true);    
            }

            $assignDestination .= '/'.$assignName;

            move_uploaded_file($assignTmpName, $assignDestination);

            $queryassign="INSERT INTO assignment(assign_ID, assign_name, assign_teacher, assign_dep, assign_stage)
            VALUES (NULL,'$assignName','$assign_teacher','$assign_dep', '$assign_stage')";

            mysqli_query($MyDB, $queryassign);

           header("location: uploadassign_Page.php?sub_teacher=$assign_teacher&&subject_ID=$assign_sub&&Sub_Dep=$assign_dep&&Sub_Stage=$assign_stage");
                
           echo "Successfully uploaded!";
        } else {
            echo "there was an error uploading your file)):";
        }
    } else {
        echo "you can't upload file of this type you scum D:<";
    }
}


?>