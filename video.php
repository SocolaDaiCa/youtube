<!DOCTYPE html>
<html>

<head>
    <title>YouTube</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . '/view/css.php'; ?>
    <?php require_once __DIR__ . '/view/js.php'; ?>
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <style>
        .container{
            width: 1400px;
            margin: 0 auto;
        }
        .container:hover{
            background-color: white;
        }
        .left{
            width: 60%;
            padding-left: 10px;
            height: 900px;
        }
        .right{
            padding-left: 30px;
        }
        @media only screen and (max-width: 1401px){
            .container{
                width: 900px;
                margin: 0 auto;
            }
            .left{
                width: 100%;
            }
            .right{
                width: 80%;
            }
        }
    </style>
</head>

<body>
    <?php require_once __DIR__ . '/view/navbar.php'; ?>
    <div id="content" class="container">
        <div class="row clearfix">
            <div class="left pull-left ">
                <?php require_once __DIR__ . '/view/video.php'; ?>
                <?php require_once __DIR__ . '/view/comment.php'; ?>
            </div>
            <div class="right pull-left clearfix">
                <?php require_once __DIR__ . '/view/next.php'; ?>
            </div>
        </div>
    </div>
</body>
<script src="js/autoplay.js"></script>
</html>