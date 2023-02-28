<?php
    include ("connectdb.php");
?>

<head>
  <meta charset="UTF-8">
  <script src="./js/database.js"></script>
  <link rel="stylesheet" href="./css/database.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet"/>
</head>
  
<body>
    <nav class="navbar">
      <ul class="navbar-nav">
        <li class="logo">
          <a href="#" class="nav-link">
            <span class="link-text logo-text">PANEL</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
              class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x"
            >
              <g class="fa-group">
                <path
                  fill="currentColor"
                  d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z"
                  class="fa-secondary"
                ></path>
                <path
                  fill="currentColor"
                  d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z"
                  class="fa-primary"
                ></path>
              </g>
            </svg>
          </a>
        </li>
  
        <li class="nav-item">
          <a href="#" onClick="dodawanie()" class="nav-link">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
                <path
                  fill="currentColor"
                  d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z"
                  class="fa-primary"
                ></path>
            </svg>
            <span class="link-text">DODAJ</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a href="#" onClick="usuwanie()" class="nav-link">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 576 512"
            >
                <path
                  fill="currentColor"
                  d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"
                  class="fa-primary"
                ></path>
            </svg>
            <span class="link-text">USUŃ</span>
          </a>
        </li>
  
        <li class="nav-item">
          <a href="#" onClick="modyfikowanie()" class="nav-link">
            <svg 
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
            >
                <path
                  fill="currentColor"
                  d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.8 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"
                  class="fa-primary"
                ></path>
            </svg>
            <span class="link-text">MODYFIKUJ</span>
          </a>
        </li>
      </ul>
    </nav>
  
    <header>
      <div class="zakladki">
          <input class="przyciski" type="button" onclick="location.href='index.php'" value="Home">
          <input class="przyciski" type="button" onclick="location.href='autor.php'" value="Autor">
          <a href="index.php"><div class="logout"><img src="./img/logout.png" class="img">Wyloguj się</div></a>
      </div>
    </header>
    
    <article class="zarzadzanie">
      <span class="label">Panel zarządzania</span>
      <div class="container">
        <div id="dodawanie">
            <div>
              <form method="post" action="table.php">
                  <span class="label2">Tworzenie tabeli</span><br>
                  <input type="text" name="table_name" class="input" placeholder="Nazwa tabeli"><br>
                  <input type="button" value="+" onClick="dodaj()" class="button1">
                  <input type="button" value="–" onClick="usun()" class="button2">
                  <span class="label2">Kolumny</span><br>
                  <input type="text" id="id" name="id" class="input" value="ID" readonly>
                  <input type="text" name="kolumna1" class="input" id="kolumna1" placeholder="Nazwa kolumny"><br>
                  <span id="dodaj"></span>
                  <input type="submit" id="tabela" value="Utwórz" class="button"><input type="hidden" value="1" id="liczbaKolumn" name="liczbaKolumn">
              </form>
            </div>
        </div>

        <div id="usuwanie">
            <div>
              <form method="post" action="table_delete.php">
                  <span class="label2">Usuwanie tabeli</span><br>
                  <?php
                      $zapytanie = mysqli_query($connect,"SHOW TABLES");
                      echo '<select name="tabele" class="tabele">';
                      echo '<option value="" disabled selected hidden>Wybierz tabelę</option>';
                      while($nazwy = mysqli_fetch_array($zapytanie))
                      {
                          echo '<option value="'.$nazwy[0].'">'.$nazwy[0].'</option>';
                      }
                      echo '</select>';
                  ?>
                  <input type="submit" id="tabela" value="Usuń" class="button">
              </form>
            </div>
        </div>

        <div id="modyfikowanie">
            <div>
              <form method="post" action="records.php">
                  <span class="label2">Modyfikowanie tabeli</span><br>
                  <?php
                      $zapytanie = mysqli_query($connect,"SHOW TABLES");
                      echo '<select name="tabele2" class="tabele">';
                      echo '<option value="" disabled selected hidden>Wybierz tabelę</option>';
                      while($nazwy = mysqli_fetch_array($zapytanie))
                      {
                          echo '<option value="'.$nazwy[0].'">'.$nazwy[0].'</option>';
                      }
                      echo '</select>';
                  ?>
                  <input type="submit" id="tabela" value="Modyfikuj" class="button">
              </form>
            </div>
        </div>
      </div>
  </article>
  <footer>
      <span>2023 © Wszelkie prawa zastrzeżone.</span>
  </footer>
  </body>