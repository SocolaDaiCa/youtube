<!DOCTYPE html>
<html>

<head>
    <title>YouTube</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . '/view/css.php'; ?>
    <?php require_once __DIR__ . '/view/js.php'; ?>
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/index.css"> -->
</head>

<body>
    <div id="content">
        <img class="logo" src="images/google.png" alt=""><br>
        <h3>Đăng nhập</h3>
        <p>Tiếp tục với YouTube</p> <br><br>
        <p>Email</p>
        <input type="text" name="" id="input" class="form-control">
        <p>Mật khẩu</p>
        <input type="password" name="" id="input" class="form-control"><br>
        <a href="">Bạn quên địa chỉ email?</a><br> <br>
        <div class="option">
        	<div class="setup"><a  href="">Tùy chọn khác</a></div>
        	<button class="next"><b>TIẾP THEO</b></button>
        </div>
    </div>
    <div class="under">
    	<select class="langue" name="" id="">
    		<option value="">Tiếng Việt</option>
    		<option value="">Tiếng Anh</option>
    		<option value="">Tiếng Trung Quốc</option>
    		<option value="">Tiếng Tàu Khựa</option>
    	</select>
    	<ul class="help">
            <li><a href="">Trợ giúp</a></li>
            <li><a href="">Bảo mật</a></li>
    		<li><a href="">Điều khoản</a></li>
    	</ul>
    </div>
</body>

</html>