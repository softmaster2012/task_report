<h4>Решение 2</h4>
<table id="table2" border="0">
    <tr>
        <td class="edit">
            <fieldset>
                <legend>db_edit</legend>
                <form id="form1" action="hnd/handler1.php" method="post">
                    <br>___Имя:<input type="text" name="name" required><br>
                    <br>Оценка:<input type="number" name="grade" value="0"><br>
                    <br><input type="submit" name="submit1" value="Добавить студента в базу данных">
                </form>
                <form id="form2" action="hnd/handler2.php" method="post">
                    <br>__Имя1:<input type="text" name="name1" required><br>
                    <br>__Имя2:<input type="text" name="name2" required><br>
                    <br><input type="submit" name="submit2" value="Добавить лайк в базу данных">
                </form>
            </fieldset>
        </td>
        <td class="view" rowspan="2">
            <fieldset>
                <legend>db_view</legend>
                <table id="view1" width="100%" style="border-collapse: collapse" border="1">
                    <?php
                        require 'res/db_config.php';                        
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
                                echo '<td>'.$rec['ID'].'</td>';
                                echo '<td align="left">'.$rec['name'].'</td>';
                                echo '<td>'.$rec['grade'].'</td>';
                                echo '</tr>';
                            }
                        }
                        mysql_close($conn);
                    ?>
                </table>
            </fieldset>
        </td>
    </tr>
    <tr>
        <td class="control">
            <fieldset>
                <legend>db_control</legend>
            </fieldset>
        </td>        
    </tr>
</table>