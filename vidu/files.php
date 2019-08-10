<?php
    namespace nation;
    class NewYork{
        function say(){
            echo "New York <br />";
        }
    }

    function say(){
        echo "Texas \n";
    }

    namespace useyield;
    function f1(){
        yield from f2();
    }

    function f2(){
        yield "Hello";
        yield "My name";
        yield "Duy Anh";
    }

?>