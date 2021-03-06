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
								<h1 class="h4 text-gray-900 mb-4">Add Faculty!</h1>
							</div>
							<form class="user" method="POST" ACTION="./AddCollege.php" enctype="multipart/form-data" >
								<!-- <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" >
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div> -->
								<div class="form-group">
									<input type="text" name="facultyName" class="form-control form-control-user"  placeholder="Faculty Name" required>
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
			<h6 class="m-0 font-weight-bold text-primary">Current Faculties</h6>
		</div>
		<div class="card-body">

			<?php

			$collages = $MyDB->query("SELECT * FROM faculty"); //gets everything in faculty, puts it in $collages

			while ($collage = $collages->fetch_assoc()) {
				$collageName = $collage["F_Name"];

				echo $collageName . "<br>";
			}



			?>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>