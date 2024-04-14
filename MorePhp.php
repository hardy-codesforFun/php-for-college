<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorials</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: white;
        }
        .container {
            width: 50%;
            margin: auto;
            background-color: rgb(171, 117, 117);
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
    <div class="container">
        <h1>going deeper in php</h1>
        <?php
        $str="This is a string";
        $len=strlen($str);
        echo "the length of the string is $len <br>";
        echo strrev($str)."<br>";
        ?>
    </div>
</body>

</html>
