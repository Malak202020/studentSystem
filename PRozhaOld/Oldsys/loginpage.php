@@ -1,90 +0,0 @@
<?php

 session_start();
include('./mydb.php');
$Error = "";

if(isset($_POST['sub'])){
   $UserName=@$_POST['UserName'];
   $Password=@$_POST['Password'];


   $res=$MyDB->query("SELECT User_ID,User_name,User_Pass,User_Role FROM user WHERE User_name='$UserName' and User_Pass='$Password'");

   if($row = $res->fetch_assoc()){
     $_SESSION['ID'] = $row['User_ID'];
     $_SESSION['UserName'] = ['User_Name'];

     if($row['User_Role']== 'admin'){

     header('Location: http://localhost/studentsystem/manage/admin.php');
     exit();
   }

   elseif($row['User_Role']== 'teacher'){

     header('Location: http://localhost/studentsystem/TchrHome.php');
     exit();
   }

  elseif($row['User_Role']== 'student'){

     header('Location: http://localhost/studentsystem/studentPage.php');
     exit();
   }

   	  }else{
         $Error= "WRONG NAME OR PASSWORD";
       }

   }

   ?>


   <body bgcolor="#E6E6FA">

   <header class="header-two-bars">
   	<div class="header-first-bar">
   		<div class="header-limiter">
   			<h1><a href="">StudentSystem<span> Login Page</span></a></h1>
<h1>	<a href="index.php"><li>Home </span></li></a></h1>

   		</div>
   	</div>
   </header>

<html>
<head>


  <link rel="stylesheet" href="Style.css">
<link rel="stylesheet" type="text/css" href="Pages_CSS.css">
<link rel="stylesheet" href="second-bar.css">
<link rel="stylesheet" href="header-second-bar.css">
<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body bgcolor="#E6E6FA">




<div class="form-style-5">
<Form METHOD="POST">

<legend><span class="number"></span> Login</legend>
<label >UserName:</label>
<input name="UserName" Type="text" placeholder="Your UserName *" required>
<label >Password:</label>
<input name="Password" Type="password" placeholder="Your Password *" required>
<span class="error"><?php echo $Error;?></span>
<br><br>
<input name="sub" Type="SUBMIT" value="Login"/>

</Form>
</div>

</body>
</html>