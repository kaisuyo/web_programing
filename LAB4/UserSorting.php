<html>

<head>
    <title>User Sorting</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_POST">

        <p>
            <input type="radio" name="sort_type" value="sort" /> Standard sort<br />
            <input type="radio" name="sort_type" value="rsort" /> Reverse sort<br />
            <input type="radio" name="sort_type" value="usort" /> User-defined sort<br />
            <input type="radio" name="sort_type" value="ksort" /> Key sort<br />
            <input type="radio" name="sort_type" value="krsort" /> Reverse key sort<br />
            <input type="radio" name="sort_type" value="uksort" /> User-defined key sort<br />
            <input type="radio" name="sort_type" value="asort" /> Value sort<br />
            <input type="radio" name="sort_type" value="arsort" /> Reverse value sort<br />
            <input type="radio" name="sort_type" value="uasort" /> User-defined value sort<br />
        </p>

        <?php
        function user_sort($a, $b)
        {
            // smarts is all-important, so sort it first
            if ($b == 'smarts') {
                return 1;
            } else if ($a == 'smarts') {
                return -1;
            }

            return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
        }

        $values = array(
            'name' => 'Buzz Lightyear',
            'email_address' => 'buzz@starcommand.gal',
            'age' => 32,
            'smarts' => 'some'
        );

        $check_key_exist = array_key_exists("sort_type", $_POST);print $check_key_exist;
        if ($check_key_exist) {
            $sort_type = $_POST["sort_type"];
            print $sort_type;
            if ($sort_type == 'usort' || $sort_type == 'uksort' || $sort_type == 'uasort') {
                // $sort_type($values, 'user_sort');
            } else {
                // $sort_type($values);
            }
        }
        ?>

        <p align="center">
            <input type="submit" value="Sort" name="submitted" />
        </p>

        <p>
            Values <?php print $check_key_exist ? "sorted by $sort_type" : "unsorted"; ?>:
        </p>

        <ul>
            <?php
            foreach ($values as $key => $value) {
                echo "<li><b>$key</b>: $value</li>";
            }
            ?>
        </ul>
    </form>

</body>

</html>