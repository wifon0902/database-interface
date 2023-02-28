let listaKolumn = new Array();
    let listaBr = new Array();

    listaKolumn.push(document.getElementById("kolumna1"));
    document.getElementById("liczbaKolumn").value=listaKolumn.length;

        function dodaj()
        {
            if(listaKolumn.length >= 6)
                return;

            let kreatorTabeli = document.getElementById("dodaj");

            let nowaKolumna = document.createElement("input");
            nowaKolumna.setAttribute("type", "text");
            nowaKolumna.setAttribute("class", "input");
            nowaKolumna.setAttribute("placeholder", "Nazwa kolumny");
            listaKolumn.push(nowaKolumna);
            nowaKolumna.setAttribute("name", "kolumna"+(listaKolumn.length));
            kreatorTabeli.appendChild(nowaKolumna);
            
            let br = document.createElement("br");
            kreatorTabeli.appendChild(br);

            listaBr.push(br);
            document.getElementById("liczbaKolumn").value=listaKolumn.length;
        }

        function usun()
        {
            if(listaKolumn.length == 1)
                return;

            let kolumna = listaKolumn.pop();
            kolumna.remove();

            let br = listaBr.pop();
            br.remove();
            if(document.getElementById("liczbaKolumn").value != 1)
            {
                document.getElementById("liczbaKolumn").value = document.getElementById("liczbaKolumn").value - 1;
            }
        }

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

        function modyfikowanie()
        {
            let display = document.getElementById("dodawanie");
            display.style.display = "none";
            let display2 = document.getElementById("usuwanie");
            display2.style.display = "none";
            let display3 = document.getElementById("modyfikowanie");
            display3.style.display = "block";
        }