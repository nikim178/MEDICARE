
<?php
include("config.php");
session_start();

if (isset($_SESSION['pid'])) {
    $pid = $_SESSION['pid'];
$sent_value = $_POST['value'];

if(isset($sent_value)){
    if ($sent_value == 1) {
        $update = "update `patient` set status = $sent_value where pid = $pid";
        $resultl = mysqli_query($mysqli, $update);
    }
    else {
        $update = "update `patient` set status = $sent_value where pid = $pid";
        $resultl = mysqli_query($mysqli, $update);
    }
}
else{
    echo "Error" ;
}
}
?>