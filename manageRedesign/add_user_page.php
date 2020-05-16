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
     								<h1 class="h4 text-gray-900 mb-4">Add user</h1>
     							</div>
     							<form class="user" method="POST" ACTION="./Add_user.php" enctype="multipart/form-data">
     								<!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" >
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div> -->
     								<div class="form-group">
     									<input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="User Name" name="User_Name" required>
     									<input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Last Name" name="User_LastName" required>
     									<input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="User Password" name="User_Password" required>
     								</div>
     								<label for='User_Role'>User Role: </label>
     								<select id="User_Role" name="User_Role">
     									<option value="None">--Select User Role----</option>
     									<option value="admin">Admin</option>
     									<option value="teacher">Teacher</option>
     									<option value="student">Student</option>
     								</select>
     								<div>
     									<label for='User'>Select : </label>
     									<select name='User_Department'></br>
     										Select Department
     										<?php

												$subject = $MyDB->query("SELECT * FROM department ");
												while ($ex = $subject->fetch_assoc()) {

												?>
     											<OPTION value="<?php echo $ex['Dep_ID'] ?>"><?php echo $ex['Dep_Name'] ?></OPTION>
     										<?php
												}

												?>
     									</select>
     								</div>
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
     								<input name="submit" type="submit" value="add" class="btn btn-primary btn-user btn-block">


     								<hr>
     								<?php

										if (isset($_GET['success'])) {
											echo "<h3>You added a new user with the name " . $_GET['success'] . " successfully in the role " . $_GET['role'] . "<h3>";
										}
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