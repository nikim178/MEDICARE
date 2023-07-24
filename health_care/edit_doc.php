<?php
include('includes/pheader.php');
$report_date = "";
$type = "";
$description = "";
$file_dir = "";
if(isset($_GET['report_date'])) {
    $report_date = $_GET['report_date'];
}
if(isset($_GET['type'])) {
    $type = $_GET['type'];
}
if(isset($_GET['description'])) {
    $description = $_GET['description'];
}
if(isset($_GET['file_dir'])) {
    $file_dir = $_GET['file_dir'];
}
?>

<div id="content" class="mainbody" class="p-0 p-md-0 pt-0" style="margin-left: 10vw;">
    <div class="py-20 h-screen bg-white-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full px-4 py-6 ">
                    <form action="help.php" method="post" enctype="multipart/form-data">
                        <div class="mb-1">
                            <h1>Upload Lab Reports</h1>
                            <span class="text-sm">Report Date</span>
                            <input type="text" name="report_date" value="<?php echo $report_date;?>" class="h-12 px-3 w-full border-black-400 border-2 rounded focus:outline-none focus:border-black-600"/>
                        </div>
                        <input type="hidden" name="type" value="<?php echo $type;?>">
                        <div class="mb-1">
                            <span class="text-sm">Description</span>
                            <textarea type="text" name="description" class="h-24 py-1 px-3 w-full border-2 border-black-400 rounded focus:outline-none focus:border-black-600 resize-none"><?php echo $description;?></textarea>
                        </div>
                        <div class="mb-1">
                            <span class="text-sm text-gray-400">You will be able to edit this information later</span>
                        </div>
                        <div class="mb-1">
                            <span>Attachments</span>
                            <input type="file" name="file" size="50" value="<?php echo $file_dir;?>"/>
                            <br />
                            <input class="btn btn-primary" type="submit" style="background-color:#3B3C36; border-color:#3B3C36" value="Upload" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/script.php');
?>
