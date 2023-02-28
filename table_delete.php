<?php
    include ("connectdb.php");
?>

<?php
$selected = $_POST['tabele'];
$sql = "DROP TABLE $selected";
if(mysqli_query($connect, $sql))
{
    header("location: database.php");
}
else
{
    echo "Błąd podczas usuwania";
}
?>