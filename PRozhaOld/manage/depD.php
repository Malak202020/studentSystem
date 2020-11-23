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
  			<h1><a href="">StudentSystem <span> Admin <span> </span></a></h1>
<h1>	<a href="admin.php"><li>Home </span></li></a></h1>





  		</div>
  	</div>
  </header>


  <style>
    #A{
      background-color: #c0c0c0;
      color: black;
      padding: 15px 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
    }
  </style>


       <link rel="stylesheet" href="Style.css">
     <link rel="stylesheet" type="text/css" href="Pages_CSS.css">
     <link rel="stylesheet" href="second-bar.css">
     <link rel="stylesheet" href="header-second-bar.css">
     <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
     </head>


       	<div class="form-style-5">


                 <a href="#navigation"><div id="center">^</div></a>
                 <div id="content" STYLE="TEXT-ALIGN:CENTER;">

                    <div class="form-style-22">

                      <Table border="7">
                        <Tr>
                          <Th>Department Name</Th>
                        </Tr>
                        <tr>
                          <td>
                            <?php
                              $result = $MyDB->query("SELECT * FROM department");
                              while($row = $result->fetch_assoc()){
                                $name = $row['Dep_Name'];
                                echo $name."<br />";
                                }
                            ?>
                          </td>
                        </tr>
                        <?php
                        /*
                        include('MyDB.php');
                        	error_reporting(E_ERROR | E_PARSE);
                        	$result = $MyDB->query("SELECT Dep_ID,Dep_Name,F_ID FROM department where F_ID='$faculty' ");
                        	while($row = $result->fetch_assoc()){
                        		$ID = $row['Dep_ID'];
                        		$name = $row['Dep_Name'];
                            $FID = $row['F_ID'];
                            }
                            */
                        ?>

                    </Table>
                    </div>





      </form>

   </body>
</html>
