<?php
    include ("connectdb.php");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel zarządzania</title>
    <link rel="stylesheet" href="./css/records.css" />
    
</head>
<body>
    <header>
        <div class="zakladki">
            <input class="przyciski" type="button" onclick="location.href='index.php'" value="Home">
            <input class="przyciski" type="button" onclick="location.href='autor.php'" value="Autor">
            <a href="index.php"><div class="logout"><img src="./img/logout.png" class="img">Wyloguj się</div></a>
        </div>
    </header>
    <article>
        <div class="box">
            <span class="label">Dodawanie rekordów do tabeli</span>
                    <form action="record_create.php" method="post">
            <table class="tabela">
                        <?php
                        if(isSet($_POST['tabele2']))
                        {
                            $_SESSION['tname'] = $_POST['tabele2'];
                        }
                        $tname = $_SESSION['tname'];
                            echo '<div class="container">';
                            

                            $sql = "SHOW COLUMNS FROM $tname";
                            $results = mysqli_query($connect, $sql);
                            $i = 0;
                            echo '<tr>';
                            while($nazwy = mysqli_fetch_assoc($results))
                            {
                                if($nazwy['Field'] == "ID")
                                {
                                    echo '<td><input type="text" readonly class="input" name="kolumna' . $i . '" placeholder="' . $nazwy['Field'] . '"></td>';
                                }
                                else
                                {
                                    
                                    echo '<td><input type="text" class="input" name="kolumna' . $i . '" placeholder="' . $nazwy['Field'] . '"></td>';
                                }
                                $i++;
                            }
                            echo '</tr>';

                            echo '</div>';
                            $_SESSION['liczbaKolumn'] = $i; 
                        ?>
                        <input type="submit" id="tabela" value="Dodaj" class="button">
                    </form>

                <?php
                    $sql = "SHOW COLUMNS FROM $tname";
                    $results = mysqli_query($connect, $sql);
                    $z = 1;
                    echo '<tr>';
                    while($nazwy = mysqli_fetch_assoc($results))
                    {
                        $n[$z] = $nazwy['Field'];
                        echo '<th>'.$n[$z].'</th>';
                        $z++;
                    }
                    echo '<th></th></tr>';

                    $sql = "SELECT * FROM $tname";
                    $results = mysqli_query($connect, $sql);
                    while($nazwy = mysqli_fetch_assoc($results))
                    {
                        echo '<tr>';
                        for($i=1; $i<$z; $i++)
                        {
                            echo '<td>'.$nazwy[$n[$i]].'</td>';
                        }
                        echo '<td><form method="post" action="record_delete.php"><button type="submit" class="cross"><img src=./img/cross.png></button><input type="hidden" name="id" value="'. $nazwy['ID'] .'"></form></td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
    </article>
    <footer>
        <span>2023 © Wszelkie prawa zastrzeżone.</span>
    </footer>
</body>
</html>