
    function CreateDiv() {

        var div = document.createElement("iframe");
        div.id = "divVideo";
        div.style.width = "100%";
        div.style.height = "100%";

        //div.style.top = "10%";
        //div.style.left = "10%";
        div.src = "https://steamcdn-a.akamaihd.net/steam/apps/256718805/movie480.webm?t=1538045905";
        div.style.position = "relative";
        //document.body.appendChild(div);


        var but = document.createElement("button");
        but.id = "divButton";
        but.style.width = "5%";
        but.style.height = "5%";

        but.style.top = "-100%";
        but.style.left = "80%";
        but.style.background = "green";
        but.innerHTML = "X";
        but.style.position = "relative";
        but.addEventListener("click", destroyDiv);

        document.getElementById("space").appendChild(div);
        document.getElementById("space").appendChild(but);
    }

    function destroyDiv() 
    {
        var div = document.getElementById("divVideo");
        var but = document.getElementById("divButton");

        document.getElementById("space").removeChild(div);
        document.getElementById("space").removeChild(but);
    }