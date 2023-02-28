<?php
    include ("connectdb.php");
?>

<?php
    $tname = $_SESSION['tname'];
    $id = $_POST['id'];
    $sql = "DELETE FROM $tname WHERE id='$id'";
    if(mysqli_query($connect, $sql))
    {
        header("location: records.php");
    }
    else
    {
        echo "Błąd podczas usuwania";
    }
?>
