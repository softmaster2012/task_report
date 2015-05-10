<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
            body {
                font: 12pt consolas;
            }
            .L {
                text-align: left;
                padding-left: 10px;
            }
            .R {
                text-align: right;
                padding-right: 10px;
            }
            .C {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table id="view1" width="100%" style="border-collapse: collapse" border="1">
            <?php
                require '../res/db_config.php';                        
                $conn = mysql_connect($db_host, $db_user, $db_pass);
                mysql_select_db($db_name);

                $query = "SELECT * FROM students";
                $result = mysql_query($query);
                $N = mysql_num_rows($result);

                $records = array();
                if ($N > 0) {
                    for ($i = 0; $i < $N; $i++) {
                        $records[] = mysql_fetch_array($result);
                    }
                    foreach ($records as $rec) {
                        echo '<tr>';
                        echo '<td class="C">'.$rec['ID'].'</td>';
                        echo '<td class="L">'.$rec['name'].'</td>';
                        echo '<td class="R">'.$rec['grade'].'</td>';
                        echo '</tr>';
                    }
                }
                mysql_close($conn);
            ?>
        </table>
    </body>
</html>