<!DOCTYPE html>
<html>

<head>
    <title>YouTube</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once __DIR__ . '/view/css.php'; ?>
    <?php require_once __DIR__ . '/view/js.php'; ?>
    <!-- <link rel="stylesheet" type="text/css" href="/css/index.css"> -->
</head>

<body>
    <?php require_once __DIR__ . '/view/navbar.php'; ?>
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <?php require_once __DIR__ . '/view/video.php'; ?>
                <?php require_once __DIR__ . '/view/comment.php'; ?>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <?php require_once __DIR__ . '/view/next.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>