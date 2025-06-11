<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php

        $str = "This is";
        echo $str . "<br>";
        $len = strlen($str);
        echo "The length of this string is " . $len . ". Thank you <br>";
        echo "The num of words in this string is " . str_word_count($str) . ". Thank you <br>";
        echo "The reversed string is " . strrev($str) . ". Thank you <br>";
        echo "The pos of 'is' in this string is " . strpos($str, "is") . ". Thank you <br>";
        echo "The replaced string is " . str_replace("is", "at", $str) . ". Thank you <br>";
        ?>
    </div>
</body>
</html>