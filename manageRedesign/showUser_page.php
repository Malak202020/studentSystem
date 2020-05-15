<?php include('header.php'); ?>

    <a href="#navigation">
      <div id="center">^</div>
    </a>
    <div id="content" STYLE="TEXT-ALIGN:CENTER;">
      <div class="form-style-22">
        <Table border="7">
          <Tr>
            <Th>User_ID</Th>
            <Th>User_Name</Th>
            <Th>User_Role</Th>
            <Th>User_Pass</Th>
            <Th>UPDATE</Th>


          </Tr>
          <?php
          $b = $MyDB->query("SELECT * FROM user");
          while ($ex = $b->fetch_assoc()) {

          ?>
            <Tr>
              <Td> <?php echo $ex['User_ID']; ?></Td>
              <Td><?php echo $ex['User_Name']; ?></Td>
              <Td><?php echo $ex['User_Role']; ?></Td>
              <Td> <?php echo $ex['User_Pass']; ?></Td>
              <Td>
                <a HREF="delUser.php?ID= <?php echo $ex['User_ID']; ?>
                <?php echo $ex['User_Name']; ?>
                <?php echo $ex['User_Role']; ?>
                <?php echo $ex['User_Pass']; ?>">
                </a>
              </Td>
              <Td><a HREF="Update.php?ID= <?php echo $ex['User_ID']; ?>">   
             </Tr>

          <?php } ?>

        </Table>




    }
    <?php include('footer.php'); ?>