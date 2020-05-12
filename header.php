 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <?php 
include 'login/config.php';



?>


 
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					

					<div class="right-top-bar flex-w h-full">
					      <?php 
                    
					    if(isset($_SESSION['login']))
					   {
					       if($_SESSION['login']==true){
					       $kart=$_SESSION['kart'];
					       	$q="SELECT `kart_id` FROM `order` WHERE kart_id=$kart" ;
				$result=mysqli_query($con,$q);

   $num_rows = mysqli_num_rows($result);
					           
					           ?>
					           <a href="login/login.php" class="flex-c-m trans-04 p-lr-25">
						 logout
						</a>

			
					           <?php
					           
					           
					           
					       }
					       else{
					           
					           ?>
					           
					           	<a href="login/register.php" class="flex-c-m trans-04 p-lr-25">
						 register
						</a>

						<a href="login/login.php" class="flex-c-m trans-04 p-lr-25">
						login
						</a>
					           
					           <?php 
					       }
					   }else {
					       ?>
					        	<a href="login/register.php" class="flex-c-m trans-04 p-lr-25">
						 register
						</a>

						<a href="login/login.php" class="flex-c-m trans-04 p-lr-25">
						login
						</a>
					       
					       
					       <?php
					       
					       
					       
					   }
?>
					

						

					
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
								
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>

					
							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
	<div class="flex-c-m h-full p-l-18 p-r-25 bor5">
		<a href="shoping-cart.php">
							 <?php 
					    if(isset($_SESSION['login']))
					   {
					       if($_SESSION['login']==true){
					           
					           ?>

					           

			
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify=" <?php echo $num_rows; ?>">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div></a>

						</div>
						<?php 
					}}
					?>
					

					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full m-r-15">
				<div class="flex-c-m h-full p-r-10">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>
				</div>
 <?php 
					    if(isset($_SESSION['login']))
					   {
					       if($_SESSION['login']==true){
					           
					           ?>
				<div class="flex-c-m h-full p-lr-10 bor5">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-lr-11 icon-header-noti js-show-cart" data-notify=" <?php echo $num_rows; ?>">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div> </div>
				<?php }}	?>
				
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				

				<li>
					<div class="right-top-bar flex-w h-full">
					    <?php 
					    if(isset($_SESSION['login']))
					   {
					       if($_SESSION['login']==true){
					           
					           ?>
					           <a href="login/login.php" class="flex-c-m p-lr-10 trans-04">
						 logout
						</a>

				 	<a href="login/login.php" class="flex-c-m p-lr-10 trans-04">
						 
						</a>
					           <?php
					           
					           
					           
					       }
					       else{
					           
					           ?>
					           
					           	<a href="login/login.php" class="flex-c-m p-lr-10 trans-04">
						 register
						</a>

						<a href="login/login.php" class="flex-c-m p-lr-10 trans-04">
						login
						</a>
					           
					           <?php 
					       }
					   }else {
					       ?>
					        	<a href="login/login.php" class="flex-c-m p-lr-10 trans-04">
						 register
						</a>

						<a href="login/login.php" class="flex-c-m p-lr-10 trans-04">
						login
						</a>
					       
					       
					       <?php
					       
					       
					       
					   }
?>
					

						
						
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

			
				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>
				 <form  class="wrap-search-header flex-w p-l-15" action="namesearch.php">
                

				
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input type="text" class="plh3" name="product_search" class="form-control" placeholder="Enter a product name" />  
              
				</form>
			</div>
		</div>


	
	</header>