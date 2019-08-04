<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Image gallery</title>
</head>
<body>
    <div class="content2">
        <h1>Image gallery</h1>
        <div class="image">
            <?php
                $i = 1;
                do{
                    echo '<img src="img/02/0' . $i . '.jpg" >';
                    $flagShow = 0;
                    if (isset($_GET["show"])) {
                        $flagShow = $_GET["show"];
                        $i++;
                    }
                }while($i <= 8 && $flagShow == 1);
            ?>
            
            <a href="vd02.php?show=1">Show all</a>
            <a href="vd02.php?show=0">Show one</a>
        </div>
        
    </div>

    
</body>
</html>