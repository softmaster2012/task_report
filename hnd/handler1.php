<?php
    require '../res/db_config.php';
    $name = filter_input(INPUT_POST, 'name');
    $grade = filter_input(INPUT_POST, 'grade');
    
    $conn1 = mysql_connect($db_host, $db_user, $db_pass);
    mysql_select_db($db_name);
    
    $query1 = "INSERT INTO students (name, grade) VALUES ('$name', '$grade')";
    mysql_query($query1);
    
    mysql_close($conn1);
    header('Location: ../index.php');
