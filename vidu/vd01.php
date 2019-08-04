<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Vẽ tam giác</title>
</head>
<body>
    <div class="content1">
        <h1>Vẽ tam giác</h1>
        <ul>
            <li><a href="vd01.php?type=1"><img src="img/01/01.jpg" ></a></li>
            <li><a href="vd01.php?type=2"><img src="img/01/02.jpg" ></a></li>
            <li><a href="vd01.php?type=3"><img src="img/01/03.jpg" ></a></li>
        </ul>

        <div class="result">
            <?php
                $result = "";
                if (isset($_GET["type"])) {
                    $type = $_GET["type"];
                    
                    switch ($type) {
                        case 1:
                            $i = 1;
                            $n = 8;
                            while ($i <= $n) {
                                $result .= str_repeat("*", $i) . "<br />";
                                $i++;
                            }
                            break;

                        case 2:
                            $i = 1;
                            $n = 8;
                            while ($n >= $i) {
                                $result .= str_repeat("*", $n) . "<br />";
                                $n--;
                            }
                            break;

                        case 3:
                            $i = 1;
                            $n = 8;
                            
                            while ($i <= $n) {
                                $space      = str_repeat("&nbsp;&nbsp;", $n - $i);
                                $character  = str_repeat("*", 2*$i - 1);
                                $result .= $space . $character . "<br />";
                                $i++;
                            }
                            break;
                                               
                    }
                }
                echo $result;
            ?>
        </div>
    </div>

    
</body>
</html>