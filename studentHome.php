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

$b = $MyDB->query("SELECT * FROM Department WHERE Dep_ID=".$_SESSION["User_Dep_ID"]);
while ($dep = $b->fetch_assoc()) {


    $user_dep = $dep["Dep_Name"];

    echo $user_dep."<br>";


 } 
 echo '<h3 class="m-0 font-weight-bold text-primary">Subjects </h3>';
 $b = $MyDB->query("SELECT * FROM subject WHERE Sub_Dep=".$_SESSION["User_Dep_ID"]);
while ($dep = $b->fetch_assoc()) {
    $user_subject = $dep["Sub_Name"];
    echo $user_subject."<br>";
 } ?>


<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Assignments/Material</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>Material Name</th>
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
              <th>Material Name</th>
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

            $b = $MyDB->query("SELECT DISTINCT * FROM material,assignment WHERE material.mat_dep =".$_SESSION["User_Dep_ID"]." AND assignment.assign_stage = ".$_SESSION["User_Stage"]." AND assignment.assign_dep = ".$_SESSION["User_Dep_ID"]." GROUP BY assignment.assign_stage");
            while ($ex = $b->fetch_assoc()) {
            ?>
              <Tr>
                <Td> <?php echo $ex['mat_name']; ?></Td>
                <Td> <?php echo $ex['assign_name']; ?></Td>
            <?php } ?>
              </Tr>
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