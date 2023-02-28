<?php
    session_start();
?>

<?php
    if(isSet($_POST['servername']))
    {
        $_SESSION['servername'] = $_POST['servername'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['dbname'] = $_POST['dbname'];
    }
    
    $connect = mysqli_connect($_SESSION['servername'], $_SESSION['username'], $_SESSION['password'], $_SESSION['dbname']);
    if($connect)
    {
        
    }
    else
    {
        echo "<script> location.href='index.php'; </script>";
        exit;
    }
    

?>