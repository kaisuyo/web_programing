<html>

<head>
    <title>
        Date and Time Processing
    </title>
</head>

<body>
    <font size="5" color="blue">Enter your name and select date & time for the appointment</font>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="$_GET">
        <?php
        if (array_key_exists("day", $_GET)) {
            $day = $_GET["day"];
            $month = $_GET["month"];
            $year = $_GET["year"];
            $hour = $_GET["hour"];
            $minute = $_GET["minute"];
            $second = $_GET["second"];
        } else {
            $day = 1;
            $month = 1;
            $year = 2020;
            $hour = 0;
            $minute = 0;
            $second = 0;
        }

        function createSelectionPane($name, $value, $max)
        {
            print '<select name="' . $name . '">';
            for ($i = 1; $i <= $max; $i++)
                if ($value == $i)
                    print "<option selected>$i</option>";
                else
                    print "<option>$i</option>";
            print '</select>';
        }

        ?>

        <table>
            <tr>
                <td>Your name: </td>
                <td><input type="text" name="name" style="width: 150px;"></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><table><tr>
                            <td style="width: 40px;"><?php createSelectionPane("day", $day, 31); ?></td>
                            <td style="width: 40px;"><?php createSelectionPane("month", $month, 12); ?></td>
                            <td style="width: 60px;"><?php createSelectionPane("year", $year, 3000); ?></td>
                </tr></table></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><table><tr>
                            <td style="width: 40px;"><?php createSelectionPane("hour", $hour, 12); ?></td>
                            <td style="width: 40px;"><?php createSelectionPane("minute", $minute, 60); ?></td>
                            <td style="width: 40px;"><?php createSelectionPane("second", $second, 60); ?></td>
                </tr></table></td>
            </tr>
            <tr>
                <td></td>
                <td><table><tr>
                            <td align="right"><input type="submit" value="Submit"></td>
                            <td align="left"><input type="reset" value="Reset"></td>
                </tr></table></td>
            </tr>
        </table>

        <table>
            <?php
            if (array_key_exists("day", $_GET)) {
                function checkDate2($_year, $_month, $_day)
                {
                    // Ham kiem tra co phai nam nhuan hay ko? Date co hop le khong?
                    // Tra ve 1 neu la nam nhuan, 0 neu ko phai nam nhuan, -1 neu nhap $day sai
                    if ($_year % 400 == 0 || ($_year % 4 == 0 && $_year % 4 != 0)) {
                        switch ($_month) {
                            case 2:
                                if ($_day > "29")
                                    return -1;
                                else return 1;
                            case 4:
                            case 6:
                            case 9:
                            case 11:
                                if ($_day > "30")
                                    return -1;
                                else return 1;
                            default:
                                return 1;
                        }
                    } else {
                        switch ($_month) {
                            case 2:
                                if ($_day > "28")
                                    return -1;
                                else return 0;
                            case 4:
                            case 6:
                            case 9:
                            case 11:
                                if ($_day > "30")
                                    return -1;
                                else return 0;
                            default:
                                return 0;
                        }
                    }
                }

                if (array_key_exists("name", $_GET)) {
                    print '<font size="4">Hi ' . $_GET["name"] . '! </font>';
                }

                $checkDate = checkDate2($year, $month, $day);

                function checkDayOfMonth($_month)
                {
                    global $checkDate;
                    switch ($_month) {
                        case 2:
                            if ($checkDate == 0)
                                return 28;
                            else return 29;
                        case 4:
                        case 6:
                        case 9:
                        case 11:
                            return 30;
                        default:
                            return 31;
                    }
                }


                if ($checkDate == -1) {
                    print '<br><font size="5" color="red">Invalid Day! Please try again!</font>';
                } else {
                    print "<font><br>You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year
                    <br></br>More information:</font>";
                    if ($hour > "12") {
                        $hour = $hour - 12;
                        print "<br></br>In 12 hours, the time and date is $hour:$minute:$second PM, $day/$month/$year";
                    } else {
                        print "<br></br>In 12 hours, the time and date is $hour:$minute:$second AM, $day/$month/$year";
                    }
                    print "<br>This month has " . checkDayOfMonth($month) . " days";
                }
            }

            ?>
        </table>
    </form>
</body>

</html>