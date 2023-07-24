<?php
include('includes/pheader.php');
?>


<div id="content" class="mainbody" class="p-0 p-md-0 pt-0">
<div id="content" style="margin-left: 2vw; width: 70vw;" class="p-0 p-md-0 pt-0">
      <div class="container">
      <div class="row">
        <h1>History</h1>
          <?php
           $sql = "SELECT * FROM `patient_data`  WHERE `patient_id` = $pid ORDER BY type DESC";
           $result_sql = mysqli_query($mysqli, $sql);
       
              if(mysqli_num_rows($result_sql) > 0){
               
                  while($row = mysqli_fetch_assoc($result_sql)){
                      $pid = $row['patient_id'];
                      $file_id = $row['id'];
                      $type = $row['type'];
                      $description = $row['description'];
                      $report_date = $row['report_date'];
                      $file_dir = $row['file_dir'];
                      $ocr_text = $row['ocr_text'];

                      $time=$row["upload_date"];
                      $date = date('d-m-y',$time);

                      if($type == 'lab'){ $type = "Lab Report";}
                      if($type == 'pre'){ $type = "Prescription";}
                      if($type == 'history'){ $type = "Medical History";}
                      if($type == 'allergies'){ $type = "Allergies";}
                      

          ?>
          <div class="col-lg-4">
              <div class="card card-margin h-60">
                  <div class="card-header no-border">
                      <h5 class="card-title" style="color:#3B3C36;" name="type"><?php echo $type; ?></h5>
                      <div class="card-title" name="date" style="margin-left: auto;"><?php echo $report_date; ?></div>
                      <div class="card-title" name="date" style="margin-left: auto;"><?php echo $date; ?></div>
                  </div>
                  <div class="card-body pt-0">
                      <div class="widget-49">
                          <div class="widget-49-title-wrapper">
                              
                              <div class="widget-49-meeting-info">
                                  <a href="testupload/<?php echo $pid; ?>/<?php echo $file_dir; ?>" class="widget-49-pro-title" name="link"><?php echo $file_dir?></a>
                                  
                              </div>
                          </div>
                          <div name="desc" class="widget-49-meeting-points">
                              <?php echo $description; ?>
                          </div>
                          
                      </div>
                   
                  </div>
                  <form>
          <div class="container d-flex justify-content-center mb-3" >
          <a title="Delete" href="deletedoc.php?file_delete=<?php echo $file_id; ?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">DELETE</button></a>
         
          </div>
            </form>
            
                
              </div>
              
          </div>
          <?php

        }
    }
    else{
        echo '<div style="text-align: center;">No history found</div>';
    }
    ?>
</div>
</div>
</div>
</div>
<?php
include('includes/script.php');
?>