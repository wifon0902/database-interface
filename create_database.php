<?php
    include ("connect.php");

    $nazwa = $_POST['db_name'];
    $sql = "CREATE DATABASE $nazwa";
    if(mysqli_query($connect, $sql))
    {
        header("location: server.php");
    }
    else
    {
        echo "Błąd podczas tworzenia";
    }
?>