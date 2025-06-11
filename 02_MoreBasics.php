<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(250, 183, 183);
        margin: auto;
        padding: 23px;

    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your party status</p>
        <?php
        $age = 34;
        if($age>18){
            echo "You can go to party";
        }
        else if($age == 7){
            echo"You are 7 yrs old";
        }
        else{
            echo "You cant";
        }

        // Array

        $lang = array("python", "c++", "php", "NodeJS");
        echo "<br>";
        echo $lang[1];
        echo "<br>";
        echo count($lang);

        //Loops in php
        $a = 0;
        while ($a <= 10) {
            echo "<br> The value of a is: "; 
            echo $a;
            $a++;
        }

        // while

        $a = 0;
        while ($a < count($lang)) {
            echo "<br> The value of lang is: ";
            echo $lang[$a];
            $a++;
        }

        // do while

        $a = 200;
        while ($a <= count($lang)) {
            echo "<br> The value of a is: ";
            echo $a;
            $a++;
        } while ($a < 10);

        //for loop

        for($a = 0; $a<10; $a++){
            echo "<br> The value of a from for loop is: ";
            echo $a;
        }

        // for each

        foreach ($lang as $value){
            echo "<br> The value from for each is: ";
            echo $value;
        }

        function print_number($number){
            echo "<br> Your number is ";
            echo $number;
        }
        print_number(45);
        print_number(145);

        function print5(){
            echo "<br> FIVE";
        }
        print5();
        print5();

        ?>
    </div>
</body>
</html>