<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Function</title>
</head>
<body>
    <div class="content2">
        <h1>Function</h1>
        <?php
            include "files.php";
            
            use nation\{NewYork};
            use function nation\{say};

            $n = new NewYork();
            $n->say();

            say();

        ?>
    </div>

    
</body>
</html>