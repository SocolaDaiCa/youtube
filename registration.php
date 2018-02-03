<!DOCTYPE html>
<html>

<head>
    <title>YouTube</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . '/view/css.php'; ?>
    <?php require_once __DIR__ . '/view/js.php'; ?>
    <link rel="stylesheet" href="css/registration.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/index.css"> -->
</head>

<body>
    <div id="content">
        <img class="logo" src="images/LG.png" alt=""><br>
        <h3>Đăng kí</h3>
        <p>Tiếp tục với YouTube</p> <br>
        <p>Email</p>
        <input type="text" class="form-control">
        <p>Mật khẩu</p>
        <input type="password" class="form-control">
        <p>Xác nhận mật khẩu</p>
        <input type="password" class="form-control"><br>
        <button class="next"><b>ĐĂNG KÍ</b></button>
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