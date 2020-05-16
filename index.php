<?php 


session_start();
include('./MyDB.php');
$Error = "";

if(isset($_POST['sub'])){
   $UserName=@$_POST['UserName'];
   $Password=@$_POST['Password'];


   $res=$MyDB->query("SELECT * FROM user WHERE User_Name='$UserName' and User_Pass='$Password'");

   if($row = $res->fetch_assoc()){
     $_SESSION['ID'] = $row['User_ID'];
     $_SESSION['UserName'] = $row['User_Name'];
     $_SESSION['User_Role'] = $row['User_Role'];
     $_SESSION['User_Stage'] = $row['User_Stage'];
     $_SESSION['User_Dep_ID'] = $row['User_Department'];

     if($row['User_Role']== 'admin'){

     header('Location: http://localhost/studentsystem/manageredesign/admin.php');
     exit();
   }

   elseif($row['User_Role']== 'teacher'){

     header('Location: http://localhost/studentsystem/teacherHome.php');
     exit();
   }

  elseif($row['User_Role']== 'student'){

     header('Location: http://localhost/studentsystem/studentHome.php');
     exit();
   }

   	  }else{
         $Error= "WRONG NAME OR PASSWORD";
       }

   }
   include('loginheader.php');
   ?>

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
                <h1 class="h4 text-gray-900 mb-4">login page</h1>
              </div>
              <form class="user" METHOD="POST">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <!--  <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>  -->
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="UserName" placeholder="your username">
                  <input type="text" class="form-control form-control-user" id="exampleInputEmail"name ="Password" placeholder="your password">
                </div>

                <input name="sub" Type="submit" value="Login" class="btn btn-primary btn-user btn-block" />
								<hr>
								
                <hr>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div> 
<?php include('footer.php'); ?>