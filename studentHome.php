<?php include('header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Student Page</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Student information</h6>
    </div>
    <h3 class="m-0 font-weight-bold text-primary">Student Name: <?php echo $_SESSION["UserName"]; ?></h3>
    <h3 class="m-0 font-weight-bold text-primary">Student Stage: <?php echo $_SESSION["User_Stage"]; ?></h3>
    <?php
    echo '<h3 class="m-0 font-weight-bold text-primary">Faculty: </h3>';

    $b = $MyDB->query("SELECT * FROM Department WHERE Dep_ID=" . $_SESSION["User_Dep_ID"]);
    while ($dep = $b->fetch_assoc()) {


      $user_dep = $dep["Dep_Name"];

      echo $user_dep . "<br>";
    }
    echo '<h3 class="m-0 font-weight-bold text-primary">Subjects </h3>';
    $b = $MyDB->query("SELECT * FROM subject WHERE Sub_Dep=" . $_SESSION["User_Dep_ID"]);
    while ($dep = $b->fetch_assoc()) {
      $user_subject = $dep["Sub_Name"];
      echo $user_subject . "<br>";
    } ?>

</div>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Assignments/Material</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Subject Name</th>
                <th>Material Name</th>
                <!-- <th>Department ID</th>
              <th>Stage</th>
              <th>Action</th>
               <th>Password</th>
                       <th>Start date</th>
                      <th>Salary</th> -->
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Subject Name</th>
                <th>Material Name</th>
                <!-- <th>Department ID</th>
              <th>Stage</th>
              <th>Action</th>
              <th>Password</th>
                       <th>Start date</th>
                      <th>Salary</th> -->
              </tr>
            </tfoot>
            <tbody>
              <?php

              $getMaterial = $MyDB->query("SELECT * FROM material WHERE mat_dep =".$_SESSION["User_Dep_ID"]." AND mat_stage = ". $_SESSION["User_Stage"]);
              while ($material = $getMaterial->fetch_assoc()) {
              ?>
                <Tr>
                  <Td><?php echo $material['mat_subject']; ?> </td>
                  <Td> <?php echo $material['mat_name']; ?>
                    <a href="uploads/material/<?php echo $material['mat_subject'] . $material['mat_stage'] . $material['mat_subject_ID'] . "/" . $material['mat_name']; ?>" class="btn btn-success btn-circle">
                      <i class="fas fa-check"></i>
                    </a>
                  </Td>
                <?php }
                ?>
                </Tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Assignments</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Subject Name</th>
              <th>Assignment Name</th>
              <!-- <th>Department ID</th>
              <th>Stage</th>
              <th>Action</th>
               <th>Password</th>
                       <th>Start date</th>
                      <th>Salary</th> -->
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Subject Name</th>
              <th>Assignment Name</th>
              <!-- <th>Department ID</th>
              <th>Stage</th>
              <th>Action</th>
              <th>Password</th>
                       <th>Start date</th>
                      <th>Salary</th> -->
            </tr>
          </tfoot>
          <tbody>
            <?php
            $getAssign = $MyDB->query("SELECT  * FROM assignment WHERE assign_dep =" . $_SESSION["User_Dep_ID"] . " AND assign_stage = " . $_SESSION["User_Stage"]);

            while ($assign = $getAssign->fetch_assoc()) {
            ?>
            <tr>
              <Td> <?php echo $assign['assign_subject']; ?> </td>
              <Td> <?php echo $assign['assign_name']; ?>
                <a href="uploads/assign/<?php echo $assign['assign_subject'].$assign['assign_stage'].$assign['assign_subject_ID']."/".$assign['assign_name']; ?>" class="btn btn-success btn-circle">
                  <i class="fas fa-check"></i>
                </a>
              </Td>
              </Tr>

            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>



<?php include('footer.php'); ?>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>