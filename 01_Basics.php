<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first php website.
        <?php
        echo "Hello world. This is printed using php.";

        echo"<br>";

        $var1 = 5;
        $var2 = 2;
        echo $var1;
        echo $var2;

        echo $var1 + $var2;

        echo"<br>";
        echo"<br>";

        // Operators

        echo "Value of var1 + var2 is ";
        echo $var1 + $var2;
        echo"<br>";
        echo "Value of var1 - var2 is ";
        echo $var1 - $var2;
        echo"<br>";

        // Comparison Operator

        echo "Value of 1>=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        
        // Logical
        $myVar = (false) and (true);
        echo "<br>";
        echo var_dump($myVar);

        ?>

        <?php
        define('PI', 3.14);
        //DATA TYPES
        // String
        echo "<br><br> Data Types <br>";
        $var = "This is a string";
        echo var_dump($var);

        echo "<br>";

        echo PI;

        // Integer
        // Float
        // Boolean
        // Array
        // Object
        ?>

    </div>
</body>
</html>