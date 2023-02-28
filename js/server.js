function dodawanie()
{
    let display = document.getElementById("dodawanie");
    display.style.display = "block";
    let display2 = document.getElementById("usuwanie");
    display2.style.display = "none";
    let display3 = document.getElementById("modyfikowanie");
    display3.style.display = "none";
}

function usuwanie()
{
    let display = document.getElementById("dodawanie");
    display.style.display = "none";
    let display2 = document.getElementById("usuwanie");
    display2.style.display = "block";
    let display3 = document.getElementById("modyfikowanie");
    display3.style.display = "none";
}