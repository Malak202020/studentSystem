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
    $uploadStatus="";

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
            $uploadStatus = "Successfully uploaded!";

           header("location: ./teacherHome.php");
        } else {
            $uploadStatus = "there was an error uploading your file";
        }
    } else {
        $uploadStatus = "you can't upload file of this type";
    }
}


?>