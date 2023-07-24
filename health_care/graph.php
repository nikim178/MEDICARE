<?php

$name = $_REQUEST['name'];

$con  = mysqli_connect("localhost","root","","healthcare");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="UPDATE graph SET count = '0'";
         $result = mysqli_query($con,$sql);

         $sql1 ="SELECT * FROM patient_data";
         $result1 = mysqli_query($con,$sql1);
         $chart_data="";
         while ($row1 = mysqli_fetch_array($result1)) {
 
            $state  = $row1['state'];
            $ocr = $row1['ocr_text'];

            if(strpos($ocr, $name) !== false)
            {


                 $sql2 ="SELECT * FROM `graph` WHERE state = '$state'";
                 $result2 = mysqli_query($con,$sql2);

                  while ($row2 = mysqli_fetch_array($result2)) 
                 {
                    $count = $row2['count'];
                    $count = $count +1;

                     $sql3 ="UPDATE graph set count = '$count' WHERE state = '$state'";


                     $result3 = mysqli_query($con,$sql3);                

                 }
            }

 

        }

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
                        labels:<?php echo json_encode($productname); ?>,
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
                            data:<?php echo json_encode($sales); ?>,
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