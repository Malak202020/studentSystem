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
  			<h1><a href="">StudentSystem<span> Student  </span></a></h1>
<h1>	<a href="Logout.php"><li>Logout </span></li></a></h1>

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

       <div class="form-style-5">
         <fieldset>

         </fieldset>



       <?php
       include('MyDB.php');

        error_reporting(E_ERROR | E_PARSE);
        $result =$MyDB->query("SELECT assing_file FROM assingment");
        while($row = $result->fetch_assoc()){


     echo '<a class='.$assingment.'" ><h1>'.$assingment.'</h1></a>';
   }
       ?>


      </form>

   </body>
</html>