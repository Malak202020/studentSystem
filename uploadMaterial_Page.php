<?php include('header.php'); ?>
<div class="container-fluid">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block "></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-left">
                <h1 class="h4 text-gray-900 mb-4">Upload Material</h1>
              </div>
              <form action="uploadMaterial.php?sub_name=<?php echo $_GET["sub_name"]; ?>&sub_teacher=<?php echo $_SESSION['ID']; ?>&subject_ID=<?php echo $_GET['subject_ID']; ?>&Sub_Dep=<?php echo $_GET['Sub_Dep']; ?>&Sub_Stage=<?php echo $_GET['Sub_Stage']; ?>" method="POST" enctype="multipart/form-data" class="user" >
                <p><input type="file" name="fileUpload" id="fileUpload" style="width:100%" required></p>
                <p><button type="submit" name="submit"> UPLOAD </button></p>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div> 
<?php include('footer.php'); ?>