<?php
    session_start();
?>

<?php
    if(isSet($_POST['servername']))
    {
        $_SESSION['servername'] = $_POST['servername'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
    }
    
    $connect = mysqli_connect($_SESSION['servername'], $_SESSION['username'], $_SESSION['password']);
    if($connect)
    {
        
    }
    else
    {
        echo "<script> location.href='index.php'; </script>";
        exit;
    }

?>