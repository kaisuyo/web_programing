<html>

<head>
    <title>Convert radians to degrees and vice versa</title>
</head>

<body>
    <font size="5" color="blue">Enter a number from 1 to 100</font>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_GET_POST">
        <!-- <?php

        ?> -->
        <br>
        Value: <input type="text" name="value"><br><br>
        <input type="radio" name="selection" value="1">Radian to Degree<br>
        <input type="radio" name="selection" value="2">Degree to Radian<br><br>
        <input type="submit" value="Convert">

        <?php 
        if(array_key_exists("selection", $_GET)){
            $value = $_GET["value"];

            if(array_key_exists("selection", $_GET)){
                print '<font size="5" color="blue"><br></br>Result = </font>';
                $selection = $_GET["selection"];
                if($selection == "1") print $value*180/3.14;
                else print $value*3.14/180;
            } else{
                print '<font size="5" color="red"><br></br>Please choose 1 conversion method!</font>';
            }
        } else{
            print '<font size="5" color="red"><br></br>Please enter the value!</font>';
        }
        
        ?>

    </form>
</body>

</html>