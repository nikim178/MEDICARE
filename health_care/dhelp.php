<?php
include("config.php");
session_start();
if (isset($_SESSION['did'])) {

}else
{
    echo "<script>
      window.location.href='index.html';
     </script>";
}
?>


<?php


$did= $_SESSION['did'];

 $sql = "SELECT * FROM `doctor` WHERE `did` = $did";
  $result = mysqli_query($mysqli, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
     
        }
    }




if($_REQUEST['report_date'] != "")
{
    $report_date=$_REQUEST['report_date'];
}

if($_REQUEST['description'] != "")
{
    $description=$_REQUEST['description'];
}


$targetfolder = "testupload2/".$_SESSION['did']."/";

if(!is_dir("testupload2/".$_SESSION['did'])){
    mkdir("testupload2/".$_SESSION['did']);
}

$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
$pdfText = ''; 


    
    // If file is selected 
    if(!empty($_FILES["file"]["name"])){
        // File upload path 
        $fileName = basename($_FILES["file"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

        if($fileType == 'pdf')
            {

            }else
            {

                    echo "<script>
                           alert('Upload PDF files only');
                           window.location.href='Doctor2.php';
                        </script>";
                         die();
            }
         
        // Allow certain file formats 
        $allowTypes = array('pdf'); 
        if(in_array($fileType, $allowTypes)){ 
            // Include autoloader file 
            include 'vendor/autoload.php'; 
             
            // Initialize and load PDF Parser library 
            $parser = new \Smalot\PdfParser\Parser(); 
             
            // Source PDF file to extract text 
            $file = $_FILES["file"]["tmp_name"]; 
             
            // Parse pdf file using Parser library 
            $pdf = $parser->parseFile($file); 
             
            // Extract text from PDF 
            $text = $pdf->getText();



             
            // Add line break 
            $pdfText = nl2br($text);

            if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

                {
                    $file_dir = $_FILES['file']['name'];
                    echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
                    //header("location:Patient.php"); 
                }

                else {

                echo "Problem uploading file";

                }



        }else{ 
            $statusMsg = '<p>Sorry, only PDF file is allowed to upload.</p>'; 
        } 
    }else{ 
        $statusMsg = '<p>Please select a PDF file to extract text.</p>';
        $file_dir = "";
    } 

 
// Display text content 
// echo $pdfText;

$time = time();

$pdfText = str_replace("'",'"', $pdfText);



$sql = "INSERT INTO `doctor_data`(`description`, `report_date`, `doctor_id`, `file_dir`, `ocr_text`,`upload_date`) VALUES ('$description','$report_date',$did,'$file_dir','$pdfText','$time')";
$result_sql = mysqli_query($mysqli, $sql);

header("location:ddocument.php");

?>