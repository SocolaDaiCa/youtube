<?php 
    require_once 'connect.php';
    $query = "select ten_channel,ma_channel from channel";
    $result = $conn->query($query);
    $mangchannel = [];
    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            # code...
            array_push($mangchannel, $row);
        }
    }
    
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>YouTube</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once __DIR__ . '/view/css.php'; ?>
        <?php require_once __DIR__ . '/view/js.php'; ?>
        <link rel="stylesheet" href="/css/index.css">

        
        <!-- <link rel="stylesheet" type="text/css" href="/css/index.css"> -->
    </head>
    <body>
        <?php require_once __DIR__ . '/view/navbar.php'; ?>

        <div style="max-width: 1400px; margin: 0 auto">
	        <?php require_once __DIR__ . '/view/sidebar.php'; ?>
	        <div id="content">
	            <div class="row">
		             <div class="left pull-left ">
		                <?php require_once __DIR__ . '/view/video.php'; ?>
		                <?php require_once __DIR__ . '/view/comment.php'; ?>
		            </div>
		            <div class="right pull-left clearfix">
		                <?php require_once __DIR__ . '/view/next.php'; ?>
		            </div> 
		        </div>
	        </div>
	    </div>
    </body>
</html>