<html>

<head>
    <title>
        Guess a number
    </title>
</head>

<body>
    <font size="5" color="blue">Enter a number from 1 to 100</font>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_GET">
        <?php
            $random = -1;
            if($random == -1){
                srand ((double) microtime() * 10000000);
                $random = rand(0, 10);
            }
            define('randomValue', $random);
        ?>
        <br><input type="submit" value="Submit">

        <?php
            echo randomValue;
        ?>

    </form>
</body>

</html>