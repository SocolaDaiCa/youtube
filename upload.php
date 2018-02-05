<?php 
	require_once 'connect.php';
	session_start();
	if(isset($_POST['btn-upload-1'])){
		if(!empty($_SESSION['email'])){
			if(isset($_FILES['video'])){
				if ($_FILES['video']['error'] > 0)
	            {
	                $error = 'Upload Bị Lỗi';
	            }
	            else{
	                // Upload file
	                $email = $_SESSION['email'];
	                $file_name = $_FILES['video']['name'];
	                $query = "INSERT INTO video (email, name_video) values ('{$email}','{$file_name}')";
	  				$result = $conn->query($query);
	  				if($result){
	  					move_uploaded_file($_FILES['video']['tmp_name'], 'store/'.$file_name);
	  					$tb = "Đã tải file lên thành công!";
	  				}
	            }
			}
			else{
				$error = "File chưa được chọn";
			}
		}
		else{
			$error = "Bạn chưa đăng nhập";
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
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- <link rel="stylesheet" type="text/css" href="/css/index.css"> -->
    <link rel="stylesheet" href="css/upload.css">
    <style>
    	
    </style>
</head>

<body>
    <?php require_once __DIR__ . '/view/navbar.php'; ?>
    
    <div id="content">
    	<?php
	        if(isset($error)){
	           	echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
	        }
	    ?> 
	    <?php
	        if(isset($tb)){
	           	echo '<div class="alert alert-success">'.$tb.'</div>';
	        }
	    ?> 
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="uploadfile">
				<a id="btn-upload" href="#">
					<i class="material-icons" style="font-size: 200px;">backup</i>
					<br>
					<span>Chọn tệp để tải lên</span>
				</a>

			</div>
			<input type="file" id="file" class="hidden" name="video">
			<button type="submit"  id="btn-upload-1" class="btn btn-primary" name="btn-upload-1">Submit</button>
		</form>
		
    </div>
    <script>
		$(document).ready(function(){
			$('#btn-upload').click(function(){
				$('#file').click();
			})
		})
	</script>
</body>
</html>