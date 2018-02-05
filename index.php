<?php 
    require_once 'connect.php';
    $query = "select ten_tl,ma_tl from theloai";
    $result = $conn->query($query);
    $mangtheloai = [];
    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            # code...
            array_push($mangtheloai, $row);
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
        <div id="content">
            <?php foreach ($mangtheloai as $theloai): ?>
            <div class="head">
                <div class="name">
                    <img class="img_head" src="images/img.png" alt="">
                    <span class="name_head"><?php  echo $theloai['ten_tl'] ?></span>
                </div>
                <div class="row">
                    <?php

                        $query = "select name_video,channel.ten_channel,luot_xem from video,channel where video.ma_channel = channel.ma_channel and video.ma_tl = '{$theloai['ma_tl']}'";
                        $result = $conn->query($query);
                        $mang_video = [];
                        if($result->num_rows >0){
                            while ($row = $result->fetch_assoc()) {
                                # code...
                                array_push($mang_video, $row);
                            }
                        }
                        foreach ($mang_video as $video): ?>
                    <a href="">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="images/image_video.jpg" alt="">
                            <p><b><?php echo $video['name_video'] ?></b></p>
                            <p><?php echo $video['ten_channel'] ?></p>
                            <p><?php echo $video['luot_xem'] ?> Lượt xem</p>
                        </div>
                    </a>
                    <?php endforeach ?>
                </div>
            </div>
            <?php endforeach ?>
            <!--  -->
        </div>
    </body>
</html>