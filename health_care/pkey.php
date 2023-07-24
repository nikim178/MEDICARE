<?php
include('includes/pheader.php');
?>
<div id="content" class="mainbody" class="p-0 p-md-0 pt-0" style="margin-left: 10vw;">
<section class="login-clean">

          <form method="post">
            <h1><strong>Generate Password</strong></h1>
            <div class="mt-5 mb-5"></div>
            <div class="mb-3">
              <input class="form-control" type="text" id="pass" placeholder="Click the Generate Password Button" value=<?php echo $uid; ?>>
            </div>
            <div class="mb-3 ">

              <button class="btn btn-primary d-block w-100 " type="button" style="background-color:#3B3C36; border-color:#3B3C36"  onclick="generate_password(<?php echo $pid; ?>);">Generate Password</button>
            </div>
            <div class="toggle-wrapper">
                <div class="toggle checkcross">
                  <?php
                  $sql15 = "SELECT `status` FROM `patient` WHERE `pid` = $pid";
                 
                  $result_sql15 = mysqli_query($mysqli, $sql15);
                  if (mysqli_num_rows($result_sql15) > 0) {
                    while ($row15 = mysqli_fetch_assoc($result_sql15)) {
                        $status=$row15['status'];
                    }
                  }
                  if($status==1)
                  {

                    ?>
                    
                  <input id="checkcross" name="checkcross" value="checkcross"  type="checkbox"  checked />
                
                    <?php
                  }
                  else{
                    ?>
                     <input id="checkcross" name="checkcross" value="checkcross"  type="checkbox" />
                    <?php
                  }
                  ?>
                  
                <label class="toggle-item" for="checkcross">
                        <div class="check">

                        </div>
                    </label>
                </div> 
            </div>
          </form>
          <div id="toast">Password Copied !</div>
        </section>
      </div>
<?php
include('includes/script.php');
?>