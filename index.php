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
        <div id="content">
            <?php for ($i=0; $i <10 ; $i++):  ?>
            <div class="head">
                <div class="name">
                    <img class="img_head" src="images/img.png" alt="">
                    <span class="name_head">Thịnh hành</span>
                </div>
                <div class="row">
                    <?php for ($j=0; $j <4 ; $j++): ?>
                    <a href="">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="images/image_video.jpg" alt="">
                            <p><b>Video chứa nội dung 18+. Vui lòng cân nhắc trước khi xem</b></p>
                            <p>Tenstudy Chanel</p>
                            <p>100 Tr lượt xem - 1 ngày trước</p>
                        </div>
                    </a>
                    <?php endfor ?>
                </div>
            </div>
            <?php endfor ?>
            <!--  -->
        </div>
    </body>
</html>