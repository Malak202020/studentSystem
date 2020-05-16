<?php
include('./MyDB.php');
if(isset($_POST['submit'])) {
    $material=$_FILES['fileUpload'];
    $materialName=$_FILES['fileUpload']['name'];
    $materialTmpName=$_FILES['fileUpload']['tmp_name'];
    $materialSize=$_FILES['fileUpload']['size'];
    $materialError=$_FILES['fileUpload']['error'];
    $materialType=$_FILES['fileUpload']['type'];

    $material_sub = $_GET["subject_ID"];
    $material_dep = $_GET["Sub_Dep"];
    $material_stage = $_GET["Sub_Stage"];
    $material_teacher = $_GET["sub_teacher"];
    $material_name = $_GET["sub_name"];

    $materialExt=explode('.', $materialName);
    $materialActualExt=strtolower(end($materialExt));

    $allowed = array('jpg','jpeg','png','docx','pdf','ppt');

    if (in_array($materialActualExt, $allowed)) {
        if ($materialError === 0) {

            $materialDestination = 'uploads/'.$material_name.$material_stage.$material_sub;

            if(!file_exists('$materialDestination')){
                mkdir('uploads/'.$material_name.$material_stage.$material_sub, 0777, true);    
            }

            $materialDestination .= '/'.$materialName;

            move_uploaded_file($materialTmpName, $materialDestination);

            $querymaterial="INSERT INTO material(mat_ID, mat_name, mat_teacher, mat_dep, mat_stage)
            VALUES (NULL,'$materialName','$material_teacher','$material_dep', '$material_stage')";

            mysqli_query($MyDB, $querymaterial);

           // header("location: uploadMaterial_Page.php?sub_teacher=$material_teacher&&subject_ID=$material_sub&&Sub_Dep=$material_dep&&Sub_Stage=$material_stage");

           echo "Successfully uploaded!";
        } else {
            echo "there was an error uploading your file)):";
        }
    } else {
        echo "you can't upload file of this type you scum D:<";
    }
}


?>