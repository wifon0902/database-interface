function serwer()
{
    let inputDB = document.getElementById("dbname");
    inputDB.style.display = "none";
    let form = document.getElementById("form");
    form.setAttribute("action", "server.php");
    let login = document.getElementById("login");
    login.setAttribute("class", "login");
    let button1 = document.getElementById("switch1");
    button1.setAttribute("class", "");
    let button2 = document.getElementById("switch2");
    button2.setAttribute("class", "notselected");
}


function baza()
{
    let inputDB = document.getElementById("dbname");
    inputDB.style.display = "block";
    let form = document.getElementById("form");
    form.setAttribute("action", "database.php");
    let login = document.getElementById("login");
    login.setAttribute("class", "login2");
    let button1 = document.getElementById("switch1");
    button1.setAttribute("class", "notselected");
    let button2 = document.getElementById("switch2");
    button2.setAttribute("class", "selected");
}