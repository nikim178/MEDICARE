<?php
    include 'config.php';
    session_start();

    if(isset($_SESSION['pid'])){
        $pid = $_SESSION['pid'];
    }

    $sql = "SELECT * FROM `patient_data` WHERE `patient_id` = $pid";
    $result_sql = mysqli_query($mysqli, $sql);

    if(mysqli_num_rows($result_sql) > 0){
        while($row = mysqli_fetch_assoc($result_sql)){
            $type = $row['type'];
            $description = $row['description'];
            $report_date = $row['report_date'];
            $file_dir = $row['file_dir'];
            $ocr_text = $row['ocr_text'];
        }

        echo $type;
    }
?>