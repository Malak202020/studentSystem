<?php 

include('header.php');

?>

      </div>
      <a href="#navigation">
        <div id="top">^</div>
      </a>
      <div id="content" STYLE="TEXT-ALIGN:CENTER;">

        <?php
        include('MyDB.php');

        error_reporting(E_ERROR | E_PARSE);
        $result = $MyDB->query("SELECT F_ID,F_Name FROM faculty ");
        while ($row = $result->fetch_assoc()) {
          $ID = $row['F_ID'];
          $name = $row['F_Name'];

          echo '<a class="prods cards" href="dep_page.php?F_ID=' . $ID . '" ><h1>' . $name . '</h1></a>';
        }
        ?>

      </div>

      </div>


      </div>

<?php

include('footer.php');

?>