<?php
    include ("connectdb.php");
?>

<?php

    $name = $_POST["table_name"];
    $iloscKolumn = $_POST["liczbaKolumn"];
    for($i=1; $i<$iloscKolumn; $i++)
    {
        $kolumny[$i] = $_POST["kolumna$i"] ." VARCHAR(20) NOT NULL, ";
    }
    $kolumny[$iloscKolumn] = $_POST["kolumna$iloscKolumn"] .' VARCHAR(20) NOT NULL )';

        $sql = "CREATE TABLE $name(
            ID INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY, ";
        
        for($i=1; $i<=$iloscKolumn; $i++)
        {
            $sql = $sql.$kolumny[$i];
        }


        if(mysqli_query($connect, $sql))
        {
            header("location: database.php");
        }
        else
        {
            echo "Błąd podczas tworzenia";
        }
?>