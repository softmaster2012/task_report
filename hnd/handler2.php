<?php
    require '../res/db_config.php';
    $id1 = filter_input(INPUT_POST, 'id1');
    $id2 = filter_input(INPUT_POST, 'id2');
    
    $conn = mysql_connect($db_host, $db_user, $db_pass);
    mysql_select_db($db_name);
    
    $query = "INSERT INTO likes (like_ID, liked_ID) VALUES ('$id1', '$id2')";
    mysql_query($query);
    
    mysql_close($conn);
    header('Location: ../index.php');
