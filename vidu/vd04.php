<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Session 3</title>
</head>
<body>
    <div class="content2">
        <h1>Session 3</h1>
        <?php
            include "files.php"; // Contain Class and Function
        
            // Use yield
            use function useyield\{f1};

            $f = f1();
            foreach ($f as $value){
                echo "$value <br />";
            }

            // use dirname()
            $path = 'aptech/php/website/lab/vidu';
            echo dirname($path, 2);

            
            // use operator spaceship <=>
            $x = 5;
            $y = 7;
            echo "<br />";
            echo $x <=> $y;

            $str1 = 'Duy';
            $str2 = 'Anh';
            echo "<br />";
            echo $str1 <=> $str2;

            $arr1 = array(2,3,4);
            $arr2 = array(2,3,4);
            echo "<br />";
            echo "<pre>";
            print_r($arr1);
            echo "</pre>";
            echo $arr1 <=> $arr2;

            // use call() method
            class Greeting{
                private $word = "Hello ";
            }

            $greeting = function ($whom){
                echo "<br /> $this->word $whom";
            };

            $obj = new Greeting();
            $greeting -> call($obj, 'Duy Anh');
            $greeting -> call($obj, 'Mini Huỳnh');

            // View php version
            echo "<br />";
            echo PHP_VERSION;

            // Operator
            $a = 5;
            $b = &$a;
            echo "$a=" . $a . "<br />";
            echo "$b=" . $b . "<br />";

            $a = 9;
            echo "$a=" . $a . "<br />";
            echo "$b=" . $b . "<br />";

            // Session 12.6
            echo "--------------------------------------<br />";
            for ($i = 0; $i<5;){
                do {
                    echo $i;
                    break;
                }
                while ($i > 0);
                $i++;
            }

            // Session 12.7
            // echo "<br />--------------------------------------<br />";
            // for ($num = 15; ; $num++){
            //     if ($num > 50){
            //         break;
            //     }
            //     echo "<br />$num";
            // }

            // Session 14
            echo "<br />--------------------------------------<br />";
            echo strcmp("Hello EFG!", "Hello DEF");
            echo "<br />--------------------------------------<br />";
            echo strcmp('Hello ABC!', 'Hello ABC!');
            echo "<br />--------------------------------------<br />";
            $arr = array (
                        1 => 'ID',
                        2 => 'Username',
                        3 => 'Password'
                    );
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
            echo "<br />--------------------------------------<br />";
            echo 'arr[2]: ' . $arr[2];
            echo "<br />--------------------------------------<br />";
            foreach ($arr as $key => $value){
                echo "<br />" . $key . " = " . $value;
            }
            echo "<br />--------------------------------------<br />";
                        
            $arr2 = array (
                        1 => 'SV01',
                        2 => 'whjtemask',
                        3 => '12345679'
            );

            $arr3 = array (
                1 => 'SV02',
                2 => 'freemask',
                3 => '12345689'
            );

            $arr4 = array_combine($arr, $arr3);
            foreach ($arr4 as $key => $value){
                echo "<br />" . $key . " = " . $value;
            }
            echo "<br />--------------------------------------<br />";


                    
        ?>
    </div>

    
</body>
</html>