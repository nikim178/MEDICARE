<?php


$state = $_REQUEST['state'];

if (isset($_REQUEST['disease1'])) {
    $disease1 = $_REQUEST['disease1'];
   
}
if (isset($_REQUEST['disease2'])) {
    $disease2 = $_REQUEST['disease2'];
   
}
if (isset($_REQUEST['disease3'])) {
    $disease3 = $_REQUEST['disease3'];
  
}
if (isset($_REQUEST['disease4'])) {
    $disease4 = $_REQUEST['disease4'];
   
}
if (isset($_REQUEST['disease5'])) {
    $disease5 = $_REQUEST['disease5'];
   
}
if (isset($_REQUEST['disease6'])) {
    $disease6 = $_REQUEST['disease6'];
    
}

$con  = mysqli_connect("localhost","root","","healthcare");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="UPDATE graph SET count = '0'";
         $result = mysqli_query($con,$sql);

         $sql1 ="SELECT * FROM `patient_data` WHERE `state` = '$state'";
         $result1 = mysqli_query($con,$sql1);
         $chart_data="";
         $corona = 0;
         $dengu = 0;
         $malaria = 0;
         $hiv = 0;
         $asthama = 0;
         $chickenpox = 0;
         $diseases = array();
        $count = array();

         

         while ($row1 = mysqli_fetch_array($result1)) {

 
            $state  = $row1['state'];
            $ocr = $row1['ocr_text'];

            if(isset($disease1)) {
                if(strripos($ocr, $disease1) !== false){
                    $corona += 1;
                }
            }

           if(isset($disease2)) {
            
                if(strripos($ocr, $disease2) !== false){
                    $dengu += 1;

                }
            }

            if(isset($disease3)) {
                if(strripos($ocr, $disease3) !== false){
                    $malaria += 1;
                }
            }

            if(isset($disease4)) {
                if(strripos($ocr, $disease4) !== false){
                    $hiv += 1;

                }
            }

            if(isset($disease5)) {
                if(strripos($ocr, $disease5) !== false){
                    $asthama +=1;
                }
            }
            if(isset($disease6)) {
                if(strripos($ocr, $disease6) !== false){
                    $chickenpox +=1;
                }
            }

            {


                 $sql2 ="SELECT * FROM `graph` WHERE state = '$state'";
                 $result2 = mysqli_query($con,$sql2);

                  while ($row2 = mysqli_fetch_array($result2)) 
                 {
                    $count1 = $row2['count'];
                    $count1 = $count1 +1;

                     $sql3 ="UPDATE graph set count = '$count1' WHERE state = '$state'";


                     $result3 = mysqli_query($con,$sql3);                

                 }
            }

 

        }

        if(isset($disease1)) {
            array_push($diseases, $disease1);
           
            array_push($count, $corona);
        }

       if(isset($disease2)) {
        array_push($diseases, $disease2);
        array_push($count, $dengu);
        }

        if(isset($disease3)) {
            array_push($diseases, $disease3);
            array_push($count, $malaria);
        }

        if(isset($disease4)) {
            array_push($diseases, $disease4);
            array_push($count, $hiv);
        }

        if(isset($disease5)) {
            array_push($diseases, $disease5);
            array_push($count, $asthama);
        }
        if(isset($disease6)) {
            array_push($diseases, $disease6);
            array_push($count, $chickenpox);
        }

        array_push($count, 0);

       

         $sql ="SELECT * FROM `graph` WHERE 1";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['state'];
            $sales[] = $row['count'];
        }
 
  
 }
 

 
?>

<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
    </head>
    <body>
        <div style="width:60%;hieght:20%;text-align:center">
            <h2 class="page-header" >Analytics Reports </h2>
            <div>state wise analysis </div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($diseases); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e"
                            ],
                            data:<?php echo json_encode($count); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>