<?php

 session_start();
include('./MyDB.php');

$Error = "";
?>

<html>
<body>


  </head>

  <body bgcolor="#E6E6FA">

  <header class="header-two-bars">
  	<div class="header-first-bar">
  		<div class="header-limiter">
        <link rel="stylesheet" href="Style.css">
      <link rel="stylesheet" type="text/css" href="Pages_CSS.css">
      <link rel="stylesheet" href="second-bar.css">
      <link rel="stylesheet" href="header-second-bar.css">
      <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      </head>

      <body bgcolor="#E6E6FA">
  			<h1><a href="">StudentSystem<span> Teacher  </span></a></h1>
<h1>	<a href="Logout.php"><li>Logout </span></li></a></h1>



  		</div>
  	</div>
  </header>

  <div class="form-style-5">
    <fieldset>
      <h1 for='post' >Select Post Type: </h1>
      <select id="post">
      	<option value="None">--Select----</option>
      	<option value="ID01">Home Work</option>
      			<option value="ID03">Assingment</option>
      			<option value="ID02">Quiz</option> </br>
    </fieldset>

<form action="upload.php" method="post" enctype="multipart/form-data">

  <label for='file' >select File to upload: </label>
  <select id="file">
  <h2><a href="">select File to upload:  </span></a></h2>

    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="submit" name="submit">


-----------------------------------------------------------------------------------
</br> <h3>latest post
</h3>
-----------------------------------------------------------------------------------
</br>
    <?php
    include('MyDB.php');

    	error_reporting(E_ERROR | E_PARSE);
    	$result =$MyDB->query("SELECT assing_file FROM assingment");
    	while($row = $result->fetch_assoc()){


  echo '<a class='.$assingment.'" ><h1>'.$assingment.'</h1></a>';
}
    ?>


</form>
</div>
<a href="#navigation"><div id="top">^</div></a>
<div id="content" STYLE="TEXT-ALIGN:CENTER;">


   </body>
</html>