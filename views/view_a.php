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
        <table id="view3" width="100%" style="border-collapse: collapse" border="1">
            <?php
                require '../res/db_config.php';                        
                $conn = mysql_connect($db_host, $db_user, $db_pass);
                mysql_select_db($db_name);

                $query = "SELECT * FROM likes";
                $result = mysql_query($query);
                $N = mysql_num_rows($result);

                $records = array();
                if ($N > 0) {
                    for ($i = 0; $i < $N; $i++) {
                        $records[] = mysql_fetch_array($result);
                    }
                    foreach ($records as $rec) {
                        $ID1 = $rec['like_ID'];
                        $query1 = "SELECT name FROM students WHERE ID='$ID1'";
                        $res1 = mysql_query($query1);
                        $rec1 = mysql_fetch_array($res1);
                        $ID2 = $rec['liked_ID'];
                        $query2 = "SELECT name FROM students WHERE ID='$ID2'";
                        $res2 = mysql_query($query2);
                        $rec2 = mysql_fetch_array($res2);
                        echo '<tr>';
                        echo '<td class="L">'.$rec1['name'].'</td>';
                        echo '<td class="L">'.$rec2['name'].'</td>';                
                        echo '</tr>';
                    }
                }
                mysql_close($conn);
            ?>
        </table>
    </body>
</html>