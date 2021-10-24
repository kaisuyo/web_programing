<html>
    <head><title>File List</title></head>
    <body>
        <br>
        <h4>Files's Information Unsort</h4>
        <?php
            $fileInfo = array(
                array('Vip.txt', 'txt', '2020/4/12', 12), 
                array('Image.jpg', 'jpg', '2020/5/21', 0.4),
                array('Text.odt', 'odt', '2019/10/1,', 5.5),
                array('OHOH.php', 'php', '2021/3/23', 0.1),
                array('Score.slxx', 'slxx', '2020/12/30', 2.2),
                array('Hello.mp3', 'mp3', '2018/2/22', 3.4)
            );

            $arrLength = count($fileInfo);
        ?>
        <table>
            <th>Name</th>
            <th>Type</th>
            <th>Date</th>
            <th>Size</th>

            <?php
                for($i=0; $i<$arrLength; $i++){
                    print '<tr>';
                        for($j=0; $j<4; $j++){
                            print '<td>'.$fileInfo[$i][$j].'</td>';
                        }
                    print'</tr>';
                }
            ?>
        </table>

        <br>
        Sort By Name<input type="radio" name="sort_type" id="name">
        Sort By Date<input type="radio" name="sort_type" id="date">
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </body>
</html>