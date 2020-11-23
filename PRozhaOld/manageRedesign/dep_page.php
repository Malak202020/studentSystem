<?php

 session_start();
include('./mydb.php');
$Error = "";
?>

<html>
<body>



  </head>


  <body bgcolor="#E6E6FA">

  <header class="header-two-bars">
  	<div class="header-first-bar">
  		<div class="header-limiter">
  			<h1><a href="">StudentSystem<span> Departments  </span></a></h1>
       <h1><a href="aboutus.php"><li>About salahadin UNI</span></li></a></h1>
       <h1><a href="index.php"><li>Home</span></li></a></h1>


  		</div>
  	</div>
  </header>




       <link rel="stylesheet" href="Style.css">
     <link rel="stylesheet" type="text/css" href="Pages_CSS.css">
     <link rel="stylesheet" href="second-bar.css">
     <link rel="stylesheet" href="header-second-bar.css">
     <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
     </head>

     <body bgcolor="#E6E6FA">


  </ul>

</div>
<a href="#navigation"><div id="top">^</div></a>
<div id="content" STYLE="TEXT-ALIGN:CENTER;">

  <?php
  include('MyDB.php');
    $faculty= $_GET['F_ID'];
  	error_reporting(E_ERROR | E_PARSE);
  	$result = $MyDB->query("SELECT Dep_ID,Dep_Name,F_ID FROM department where F_ID='$faculty' ");
  	while($row = $result->fetch_assoc()){
  		$ID = $row['Dep_ID'];
  		$name = $row['Dep_Name'];
      $FID = $row['F_ID'];

      echo '<a class="prods cards" href="Loginpage.php?F_ID='.$ID.'" ><h1>'.$name.'</h1></a>';

      }
  ?>

</div>

</div>


 </div>

</body>
</html>
