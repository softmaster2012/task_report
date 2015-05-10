<h4>Решение 2</h4>
<table id="table2" border="0">
    <tr>
        <td class="edit">
            <fieldset>
                <legend>db_edit</legend>
                <form id="form1" action="hnd/handler1.php" method="post">
                    <br>___Имя:<input type="text" name="name" class="inp1" required>
                    <br>Оценка:<input type="number" name="grade" class="inp1" value="0">
                    <br><input type="submit" name="submit1" class="b" value="Добавить студента в базу данных">
                </form>
                <form id="form2" action="hnd/handler2.php" method="post">
                    <br>___ID1:<input type="text" name="id1" class="inp1" required>
                    <br>___ID2:<input type="text" name="id2" class="inp1" required>
                    <br><input type="submit" name="submit2" class="b" value="Добавить лайк в базу данных">
                </form>
            </fieldset>
        </td>
        <td class="view" rowspan="2">
            <fieldset>
                <legend>db_view</legend>
                <iframe id="frame3" name="frame3" src=""></iframe>
            </fieldset>
        </td>
    </tr>
    <tr>
        <td class="control">
            <fieldset>
                <legend>db_control</legend>
                <br>
                <button id="view_students"  class="b">Вывести список студентов</button>
                <button id="view_likes"  class="b">Вывести список лайков</button>
                <button id="view_a"  class="b">Выборка по заданию (а)</button>
                <button id="view_b"  class="b">Выборка по заданию (b)</button>
                <button id="view_c"  class="b">Выборка по заданию (c)</button>
            </fieldset>
        </td>        
    </tr>
</table>