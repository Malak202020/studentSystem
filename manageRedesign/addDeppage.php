
<?php include('header.php'); ?>	



<div class="container-fluid">
	<div class="container">
		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">

					<div class="col-lg-12">
								<label for='faculties'>Select Faculty: </label>
			<select id="faculties" name="faculties">
			<?php
				
			$faculties = $MyDB -> query("SELECT * FROM faculty"); //gets everything in faculty, puts it in $collages

			while($faculty = $faculties->fetch_assoc()){
				$facultyName = $faculty["F_Name"];
				$facultyID = $faculty["F_ID"];

				echo "<option value='".$facultyID."'>".$facultyName."</option>";
			}
	
			?>
			</select>
						<div class="p-5">
							
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Add Department!</h1>
							</div>
							<form class="user" method="POST" ACTION="./AddDep.php" enctype="multipart/form-data">
								<!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" >
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div> -->
								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Department Name" name="departmentName">
								</div>

								<!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div> -->
				<input name="submit" Type="submit" value="Add" class="btn btn-primary btn-user btn-block" />
								<hr>
								<?php

								if (isset($_GET['success'])) {
									echo "<h3> You successfully added " . $_GET['success'] . " faculty!<h3>";
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
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Current Departments</h6>
		</div>
		<div class="card-body">

		<?php
		$departments = $MyDB->query("SELECT *FROM department");
		while ($department = $departments->fetch_assoc()) {
			$departmentName = $department["Dep_Name"];

			echo $departmentName . "<br>";
		}
		?>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>