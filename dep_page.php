<?php

include("header.php");
?>




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
<?php

include("footer.php");

?>