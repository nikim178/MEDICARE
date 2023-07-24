<?php
include('includes/dheader.php');
?>
<div id="content" class="mainbody" class="p-0 p-md-0 pt-0" style="margin-left: 10vw;">
  

  <div class="py-20 h-screen bg-white-300 px-2">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
      <div class="md:flex">
        <div class="w-full px-4 py-6 ">
        <form action="dhelp.php" method="post" enctype="multipart/form-data">
          <div class="mb-1">
          <h1>Upload Certificates</h1>
            <span class="text-sm">Date</span>
            <input type="date" name="report_date" class="h-12 px-3 w-full border-black-400 border-2 rounded focus:outline-none focus:border-black-600"/>
          </div>
          

          <div class="mb-1">
            <span class="text-sm">Description</span>
            <textarea type="text" name="description" class="h-24 py-1 px-3 w-full border-2 border-black-400 rounded focus:outline-none focus:border-black-600 resize-none"></textarea>
          </div>

          <div class="mb-1">
            <span class="text-sm text-gray-400"></span>
          </div>

          <div class="mb-1">

            <span>Attachments</span>

            

              <input type="file" name="file" size="50" />

              <br />

              <input class="btn btn-primary" type="submit" style="background-color:#3B3C36; border-color:#3B3C36" value="Upload" />

            </form>



          </div>
        </div>
      </div>
    </div>

</div>
<?php
include('includes/dscript.php');
?>