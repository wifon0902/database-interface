<?php
    include ("connect.php");
?>

<?php
    $selected = $_POST['bazy'];
    $sql = "DROP DATABASE $selected";
    if(mysqli_query($connect, $sql))
    {
        header("location: server.php");
    }
    else
    {
        echo "Błąd podczas usuwania";
    }
?>
