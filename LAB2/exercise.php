<html>

<head>
    <title>Receiving Input</title>
</head>

<body>
    <font size=5>Thank you: Got your input.</font>
    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $school = $_POST["school"];
    $class = $_POST["class"];
    // $hobby1 = $_POST["hobby1"];
    // $hobby2 = $_POST["hobby2"];
    // $hobby2 = $_POST["hobby2"];
    // $hobby3 = $_POST["hobby3"];
    // $hobby4 = $_POST["hobby4"];
    // $hobby5 = $_POST["hobby5"];
    // $hobby6 = $_POST["hobby6"];

    $count = 1;

    function getHobby($hobby)
    {
        global $count;

        if (array_key_exists($hobby, $_POST)) {
            $hb = $_POST[$hobby];
            if ($hb != "Other") {
                echo $count;
                $count++;
                echo ". " . $hb . "<br></br>";
            } else {
                if (array_key_exists("other", $_POST)) {
                    echo $count;
                    $count++;
                    echo ". " . $_POST["other"] . "<br></br>";
                }
            }
        }
    }

    print "<br></br>Name: $name";
    print "<br></br>Email: $email";
    print "<br></br>Age: $age";
    print "<br></br>School: $school";
    print "<br></br>Class: $class";
    print "<br></br>Hobby: <br></br>";
    getHobby("hobby1");
    getHobby("hobby2");
    getHobby("hobby3");
    getHobby("hobby4");
    getHobby("hobby5");
    getHobby("hobby6");
    ?>
</body>

</html>