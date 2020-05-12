<?php
 session_start();

	include('MyDB.php'); // Database connection

	 if(isset($_GET['User_ID']) && $_GET['User_ID']!='')
	 {
		$MyDB->query("DELETE FROM user WHERE User_ID =".$_GET['User_ID']);

	 }
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

  </style>


       <link rel="stylesheet" href="Style.css">
     <link rel="stylesheet" type="text/css" href="Pages_CSS.css">
     <link rel="stylesheet" href="second-bar.css">
     <link rel="stylesheet" href="header-second-bar.css">
     <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
     </head>





     <a href="#navigation"><div id="center">^</div></a>
     <div id="content" STYLE="TEXT-ALIGN:CENTER;">

        <div class="form-style-22">

          <Table border="7">
            <Tr>
              <Th>User_ID</Th>
              <Th >User_Name</Th>
                <Th >User_Role</Th>
                <Th >User_Pass</Th>
                <Th >UPDATE</Th>


            </Tr>
            <?php
              $b=$MyDB->query("SELECT User_ID,User_Name,User_Role,User_Pass FROM user");
              while($ex = $b->fetch_assoc()){

            ?>
            <Tr>
              <Td>  <?php echo $ex['User_ID']?></Td>
              <Td><?php echo $ex['User_Name']?></Td>
                <Td><?php echo $ex['User_Role']?></Td>
                  <Td> <?php echo $ex['User_Pass']?></Td>
              <Td><a HREF="delUser.php?ID= <?php echo $ex['User_ID']?>
                <?php echo $ex['User_Name']?><?php echo $ex['User_Role']?>
                <?php echo $ex['User_Pass']?>" ></a></Td>
<Td><a HREF="Update.php?ID= <?php echo $ex['User_ID']?>
            </Tr>

          <?php } ?>

        </Table>
        </div>



    }
