<?php
  //Connect to database
  require'connectDB.php';

    $sql = "SELECT * FROM users WHERE del_fingerid=0 ORDER BY id DESC";
    $result = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($result, $sql)) {
        echo '<p class="error">SQL Error</p>';
    }
    else{
      mysqli_stmt_execute($result);
        $resultl = mysqli_stmt_get_result($result);
      if (mysqli_num_rows($resultl) > 0){
          while ($row = mysqli_fetch_assoc($resultl)){
  ?>
              <TR>
              	<TD>
                  <div class="row">
                    <div class="col-6">
                      <?php if ($row['fingerprint_select'] == 1) : ?>

                      <img src="icons/ok_check.png" title="The selected UID" style="width: 25px">

                      <?php endif; ?>

                      <?php
                        $fingerid = $row['fingerprint_id'];
                      ?>
                    </div>

                    <div class="col-6">
                      <form>
                        <button class="btn btn-sm <?php if ($row['fingerprint_select'] == 1){echo "btn-success";}else{echo "btn-secondary";} ?> select_btn" type="button" id="<?php echo $fingerid;?>" title="select this UID"><?php echo $fingerid;?></button>
                      </form>
                    </div>
                  </div>
                  
                	
                </TD>
              <TD><?php echo $row['username'];?></TD>
              <TD><?php echo $row['email'];?></TD>
              <TD><?php echo $row['serialnumber'];?></TD>
              <TD><?php echo $row['user_date'];?></TD>
              <TD><?php echo $row['time_in'];?></TD>
              </TR>
<?php
        }   
    }
  }
?>