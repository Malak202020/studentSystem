<?php

 session_start();
include('./mydb.php');
$Error = "";
?>




Testing commits





  </head>


  <body bgcolor="#E6E6FA">

  <header class="header-two-bars">
  	<div class="header-first-bar">
  		<div class="header-limiter">
  			<h1><a href="">StudentSystem<span> Facultis  </span></a></h1>
       <h1><a href="aboutus.php"><li>About salahadin UNI</span></li></a></h1>


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

	error_reporting(E_ERROR | E_PARSE);
	$result = $MyDB->query("SELECT F_ID,F_Name FROM faculty ");
	while($row = $result->fetch_assoc()){
		$ID = $row['F_ID'];
		$name = $row['F_Name'];

    echo '<a class="prods cards" href="dep_page.php?F_ID='.$ID.'" ><h1>'.$name.'</h1></a>';


  }
?>

</div>

</div>


 </div>

</body>
</html>
