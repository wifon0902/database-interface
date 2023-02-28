<?php
    include ("connectdb.php");
?>

<?php

    $tname = $_SESSION["tname"];
    $liczbaKolumn = $_SESSION["liczbaKolumn"];

    for($i=1; $i<$liczbaKolumn; $i++)
    {
        $kolumna[$i] = $_POST['kolumna'.$i];
    }

    $sql = "INSERT INTO $tname
    VALUES ('', ";
    
    for($i=1; $i<$liczbaKolumn-1; $i++)
    {
        $sql = $sql . "'" . $kolumna[$i] . "',";
    }

    $sql = $sql . "'" . $kolumna[$i] . "'";
    $sql = $sql . ")";
    if(mysqli_query($connect, $sql))
    {
        header("location: records.php");
    }
    else
    {
        echo "Błąd podczas dodawania";
    }
    mysqli_close($connect);
?>