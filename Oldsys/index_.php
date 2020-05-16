<?php
 session_start();
?>
<!DOCTYPE html>

<html>
<head id="Head1" runat="server">

<link rel="stylesheet" href="Style.css">
</head>
<body>

<div id="wrapper">
<img src="shop.png" alt="shop" style="width:100%;height:300px;">


<div id="navigation">
<ul id="nav">
<a href="Index_.php"><li>Home</li></a>
<a href="brand_page.php"><li>Brands</li></a>


<?php
  if (isset($_SESSION['UserName'])) {
	echo "<a HREF='mycart.php'><LI>My Card</LI></a>";
    echo "<LI><a HREF='logout.php'>LOGOUT</a></LI>";
} else {
  echo "<a href='Login_Page.php'><LI>Log in</LI></a>&nbsp &nbsp";
  echo "<LI><a href='Registeration_Page.php.php'>Signup</a></LI>&nbsp &nbsp";
}
?>
</ul>
</div>


<?php
include('./MyDB.php');

	error_reporting(E_ERROR | E_PARSE);
	$result = $MyDB->query("SELECT name,ph FROM prods");
	while($row = $result->fetch_assoc()){

    $name = $row['name'];
    $ph = $row['ph'];
    $pr = $row['pr'];
    $brand_ID = $row['barnd_ID'];
/*    echo '<a class="prods cards" href="prod_page.php?brandID='.$name.'" ><h1>'.$ph.'</h1></a>';*/
    echo '<a class="prods cards" href="brand_page.php?prodID='.$ID.'" >
          <img src="data:image/jpeg;base64,'
          .base64_encode($row['ph']).
          '" width="100" height="105" /><br><b>'.$name.'</b><br>'.$brand_ID .'</br><h3></h3></a>';

  }
?>


<div id="content" STYLE="TEXT-ALIGN:CENTER;">


</div>

</div>

</body>
</html>