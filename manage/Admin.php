<?php

session_start();
include('./MyDB.php');
$Error = "";
?>

<html>

<head>
  <style>
    #A {
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

<body bgcolor="#E6E6FA">

  <header class="header-two-bars">
    <div class="header-first-bar">
      <div class="header-limiter">
        <h1><a href="">StudentSystem <span> Admin <span> </span></a></h1>
        <h1>
          <a href="Logout.php">
            <li><span>Logout </span></li>
          </a>
        </h1>
      </div>
    </div>
  </header>

  <div class="form-style-5">

    <Table border="10">

      <tr>
        <Th><a id="A" href="AddCollegePage.php">Add Faculty</br></li></a></Th>
      </tr>

      <tr>
        <Th><a id="A" href="AddDepPage.php">Add Department</br></li></a></Th>
      </tr>

      <tr>
        <Th><a id="A" href="add_User_page.php"> Add User </br></li></a></Th>
      </tr>

      <tr>
        <Th><a id="A" href="collageD.php">show Collages</br></li></a></Th>
      </tr>
      <tr>
        <Th><a id="A" href="depD.php">show Department</br></li></a></Th>
      </tr>

      <tr>
        <Th><a id="A" href="user_page.php"> show User</br></li></a></Th>
      </tr>
      <tr>
        <Th><a id="A" href="tchersub.php"> Teacher Subject</br></li></a></Th>
      </tr>
    </Table>

</body>

</html>