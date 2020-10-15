<?php 
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>
<link rel="stylesheet" href="css/admin.css">
<script src="js/upload-display.js"></script>
<?php
if (isset($_SESSION['uid'])) {
?>    
<div class="h-50 center-me text-center">
    <div class="my-auto upload-container">
        <form action="includes/gallery-helper.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <img src="Images/Shield.png" onclick="triggered();" id="gallery-display">
                <input type="file" name="gallery-image" id="gallery-image" onchange="preview(this)" class="form-control" style="display: none;">
                <input type="text" name="title" id="title" class="form-control" placeholder="title" required style="text-align:center">
            </div>
            <div class="form-group">
                <textarea name="descript" id="descript" cols="30" rows="3" placeholder="Description" style="text-align: center;"></textarea>
            </div>
            <div class="form-group" >
                <button type="submit" name="gallery-submit" class="btn btn-outline-success btn-lg btn-block">Upload</button>
            </div>
        </form>

    </div>
</div>



<?php 
}else{
    header("Location: ../login.php?error=Login");
    exit();
}
?>
</main>