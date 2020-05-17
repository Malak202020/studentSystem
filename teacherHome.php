<?php include('header.php'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Teacher Page</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Subjects</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Subject Name</th>
              <th>Department ID</th>
              <th>Stage</th>
              <th>Action</th>
              <!-- <th>Password</th>
                       <th>Start date</th>
                      <th>Salary</th> -->
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Subject Name</th>
              <th>Department ID</th>
              <th>Stage</th>
              <th>Action</th>
              <!--<th>Password</th>
                       <th>Start date</th>
                      <th>Salary</th> -->
            </tr>
          </tfoot>
          <tbody>
            <?php

            $b = $MyDB->query("SELECT * FROM subject WHERE subject.Sub_Teacher =" . $_SESSION['ID']);
            while ($ex = $b->fetch_assoc()) {
            ?>
              <Tr>
                <Td> <?php echo $ex['Sub_Name']; ?></Td>
                <Td><?php echo $ex['Sub_Dep']; ?></Td>
                <Td><?php echo $ex['Sub_Stage']; ?></Td>
                <td>
                <a href="uploadAssign_Page.php?sub_name=<?php echo $ex['Sub_Name']; ?>&subject_ID=<?php echo $ex['Sub_ID']; ?>&Sub_Dep=<?php echo $ex['Sub_Dep']; ?>&Sub_Stage=<?php echo $ex['Sub_Stage']; ?>" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fa fa-calendar-plus"></i>
                    </span>
                    <span class="text">Upload assignment</span>
                  </a>
                  <a href="uploadMaterial_Page.php?sub_name=<?php echo $ex['Sub_Name']; ?>&sub_teacher=<?php echo $_SESSION["ID"]; ?>&subject_ID=<?php echo $ex['Sub_ID']; ?>&Sub_Dep=<?php echo $ex['Sub_Dep']; ?>&Sub_Stage=<?php echo $ex['Sub_Stage']; ?> " class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-book"></i>
                    </span>
                    <span class="text">Upload material</span>
                  </a>
                </td>

            <?php } ?>
              </Tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Uploaded materials by <?php echo $_SESSION["UserName"] ; ?></h6>
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

              $getMaterial = $MyDB->query("SELECT * FROM material WHERE mat_teacher =".$_SESSION["ID"] );
              while ($material = $getMaterial->fetch_assoc()) {
              ?>
                <Tr>
                  <Td><?php echo $material['mat_subject']; ?> </td>
                  <Td> <?php echo $material['mat_name']; ?>
                    <a href="uploads/material/<?php echo $material['mat_subject'] . $material['mat_stage'] . $material['mat_dep'] . "/" . $material['mat_name']; ?>" class="btn btn-success btn-circle">
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
      <h6 class="m-0 font-weight-bold text-primary">Uploaded assignments by <?php echo $_SESSION["UserName"] ; ?></h6>
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
            $getAssign = $MyDB->query("SELECT * FROM assignment WHERE assign_teacher =".$_SESSION["ID"] );

            while ($assign = $getAssign->fetch_assoc()) {
            ?>
              <Td> <?php echo $assign['assign_subject']; ?> </td>
              <Td> <?php echo $assign['assign_name']; ?>
                <a href="uploads/assign/<?php echo $assign['assign_subject'].$assign['assign_stage'].$assign['assign_dep']."/".$assign['assign_name']; ?>" class="btn btn-success btn-circle">
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