<?php
include('includes/pheader.php');
?>
<div id="content" class="mainbody" class="p-0 p-md-0 pt-0">


      <div class="row">
<div class="col-md-11">
    <div class="card m-b-30">
        <div class="card-header">                                
            <div class="row align-items-center">
                <div class="col-8">
                    <h5 class="card-title mb-0">Important Files</h5>
                </div>
                <div class="col-4">
                    <ul class="list-inline-group text-right mb-1 pl-0">
                        <li class="list-inline-item mr-0 font-12"><i class="feather icon-more-vertical- font-20 text-primary"></i></li>
                    </ul>                                        
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="product-file-type">
      <ul class="list-unstyled">
        
        <?php

          $directory = "testupload/".$pid;
          if(is_dir($directory)){
            $files = scandir($directory);
          
         
          function is_dir_empty($directory) {
            if (!is_readable($directory)) return null; 
            return (count(scandir($directory)) == 2);
          }
          for($i = 2; $i < count($files); $i++){
            $path = $directory."/".$files[$i];
          
            if(!is_dir_empty($directory)){

            
        ?>
         <li class="media mb-3">
         <span class="mr-3  align-self-center img-icon primary-rgba text" style="color:#3B3C36;">.doc</span>
         <div class="media-body mt-3">
         
         <a href="<?php echo $path; ?>"><?php echo $files[$i]; ?></a>
         
          </div>
          
        </li>

        
        <?php
            }
            else{
              echo "No documents found, please upload  document";
            }
          }
          
          }
          else{
            echo "No documents found, please upload  document";
          }
        ?> 
        
      </ul>
     
        </div>
        <?php
include('includes/script.php');
?>