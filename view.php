<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Get image data from database 
$result = $db->query("SELECT image FROM images ORDER BY uploaded DESC"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>NOTICES</title>
	<style>
		body {
            background-color: linen;
			
			justify-content: center;
			align-items: center;
			
		}
	</style>
</head>
<body>
	<h1><center>NOTICES</h1></center>
	<?php if($result->num_rows > 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" height="400" width="400" /> 
        <?php } ?> 
    </div> 
    <?php }
    else{ ?> 
    	 <p class="status error">Image(s) not found...</p> 
    	<?php 
    } 
    ?>
</body>
</html>





