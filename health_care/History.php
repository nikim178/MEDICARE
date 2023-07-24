<?php
    include 'config.php';
    session_start();

    if(isset($_REQUEST['pid'])){
        $pid = $_REQUEST['pid'];
    }

    $sql = "SELECT * FROM `patient_data` WHERE `patient_id` = $pid ";
    $result_sql = mysqli_query($mysqli, $sql);

    
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Doctor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
	<!-- <script type="text/javascript">
    function preventBack() {window.history.forward()};
    setTimeout("preventBack()",0);
    window.onunload-function(){null; }
    </script> -->
  </head>
  <body>

  <div class="wrapper d-flex align-items-stretch">
    <?php
    include('includes/dnavbar.php');
    ?>
    <div id="content" class="p-0 p-md-0 pt-0">
<div class="container">
<div class="row">
    <?php
        if(mysqli_num_rows($result_sql) > 0){
            while($row = mysqli_fetch_assoc($result_sql)){
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
        <div class="card card-margin">
            <div class="card-header no-border">
                <h5 class="card-title" style="color:blue" name="type"><?php echo $type; ?></h5>
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
        </div>
    </div>
    <?php

        }
    }
    ?>
</div>
</div>
</div>
</div>
<?php
include('includes/dscript.php');
?>