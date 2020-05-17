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