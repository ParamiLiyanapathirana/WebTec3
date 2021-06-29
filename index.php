<?php
  //include form submission script
include 'upload.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Notices Upload Using PHP</title>
	<style>
		body {
            background-color: linen;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
<img src="background.jpg">
<h1> Upload Notices </h1>
    <?php
    if(!empty($statusMsg)){ ?>
    <p class="status 
    	<?php 
    	echo $status; 
    	?>">
    	<?php 
    	echo $statusMsg;
    	?>	
    </p>

    <?php } ?>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Select Notice:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
</form>
</body>
</html>