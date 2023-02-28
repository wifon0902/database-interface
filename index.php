<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="./css/index.css" />
    <script src="./js/index.js"></script>
</head>
<body>
    <header>
        <div class="zakladki">
            <input class="przyciski" type="button" onclick="location.href='index.php'" value="Home">
            <input class="przyciski" type="button" onclick="location.href='autor.php'" value="Autor">
        </div>
    </header>

    <article>
        <section class="container">
            <button onClick="serwer()" class="" id="switch1">Serwer</button>
            <button onClick="baza()" class="notselected" id="switch2">Baza danych</button>
                <div class="login" id="login">
                    <form method="post" action="server.php" id="form">
                        <span class="label">Panel logowania</span>
                        <input type="text" class="input" name="servername" required placeholder="Nazwa serwera"><br>
                        <input type="text" class="input" name="username" placeholder="Nazwa użytkownika"><br>
                        <input type="password" class="input" name="password" placeholder="Hasło" ><br>
                        <input type="text" class="input" id="dbname" name="dbname" placeholder="Nazwa bazy danych"><br>
                        <input type="submit" value="Zaloguj się" class="zaloguj">
                    </form>
                </div>
        </section>
    </article>

    <footer>
        <span>2023 © Wszelkie prawa zastrzeżone.</span>
    </footer>
</body>
</html>