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

        <div>
            <?php require_once __DIR__ . '/view/sidebar.php'; ?>
            <div id="content">
                
                <form action="">    
                    <div>Keo tha file de upload</div>
                    <img id="preview" src="store/avatar.jpg" alt="">
                    <video id="previewvideo" controls autoplay></video>
                </form>
            </div>
        </div>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script>
            $('#content').on("dragover", e => e.preventDefault());
            $('#content').on("drop", (e) => {
                e.preventDefault();
                var reader = new FileReader();

                reader.onload = function(event) {
                  $('#previewvideo').attr('src', event.target.result);
                }

                reader.readAsDataURL(e.dataTransfer.files[0]);
                // uploadFile(e.dataTransfer.files[0]);
            })
        </script>
    </body>
</html>