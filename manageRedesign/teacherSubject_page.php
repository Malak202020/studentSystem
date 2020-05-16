<?php include('header.php'); ?>
<div class="container-fluid">

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">

    <div class="col-lg-12">
      <div class="p-5">
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">Add subject</h1>
        </div>
        <form class="user" method="POST" ACTION="./teacherSubject.php" enctype="multipart/form-data">
          <!-- <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" >
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
            </div>
          </div> -->
           <div class="form-group ">
            <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="subject Name" name="Subject_Name">
        
          </div>
          <label for='Subject_Teacher'>Select Teacher: </label>
          <SELECT  name='Subject_Teacher'>
          <?php
          //$UserRole=@$_POST['teacher'];
          $teacher = $MyDB->query("SELECT * FROM user WHERE User_Role = 'teacher'");
          while ($ex =   $teacher->fetch_assoc()) {

          ?>
            <OPTION value="<?php echo $ex['User_ID'] ?>"><?php echo $ex['User_Name'] ?></OPTION>
          <?php
          }

          ?>

          <label for='User'>Select : </label>
          <select id="User"></br>
            Select Department
            <SELECT name='subject_department'>
              <?php

              $subject = $MyDB->query("SELECT * FROM department ");
              while ($ex = $subject->fetch_assoc()) {

              ?>
                <OPTION value="<?php echo $ex['Dep_ID'] ?>"><?php echo $ex['Dep_Name'] ?></OPTION>
              <?php
              }

              ?>
            </SELECT>
          
  <div>
  <label for='User_Stage'>Student* stage: </label>
  <select id="User_Stage" name="User_Stage">
    <option value="0">No Stage</option>
    <option value="1">First Stage</option>
    <option value="2">Second Stage</option>
    <option value="3">Third Stage</option>
    <option value="4">Fourth Stage</option>
  </select>
  </div>
  
          <!-- <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
            </div>
            <div class="col-sm-6">
              <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
            </div>
          </div> -->
          <input name="submit" Type="submit" value="add" class="btn btn-primary btn-user btn-block" />

          <hr>
          <?php 
                if (isset($_GET['success'])) {
			       	echo "<h3>You added a new subject with the name " . $_GET['success']."<h3>"; }
                          
          ?>
          <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Register with Google
          </a>
          <a href="index.html" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
          </a> -->
        </form>

        <!-- <div class="text-center">
          <a class="small" href="forgot-password.html">Forgot Password?</a>
        </div>
        <div class="text-center">
          <a class="small" href="login.html">Already have an account? Login!</a>
        </div> -->
      </div>
    </div>
  </div>
</div>
</div>
                </div>
  <?php include('footer.php'); ?>