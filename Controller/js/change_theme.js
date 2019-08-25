var NB_THEME = 2;

function changer_class(c_name, arriere, couleur) {
    var classe = document.getElementsByClassName(c_name);
    for (let i = 0; i < classe.length; i++) {
        if (arriere != null)
            classe[i].style.background = arriere;
        if (couleur != null)
            classe[i].style.color = couleur;
    }
}

function changer_id(id_name, arriere, couleur) {
    var iden = document.getElementById(id_name);
    if (iden != null) {
        if (arriere != null)
            iden.style.background = arriere;
        if (couleur != null)
            iden.style.color = couleur;
    }
}

function selection() {
    var classe = document.getElementsByClassName("theme_choisi");
    classe[0].style.background = document.getElementsByClassName("sous_theme")[0].style.background;
    classe[1].style.background = document.getElementsByClassName("header")[0].style.background;
    classe[2].style.background = document.getElementsByClassName("theme")[0].style.background;
    classe[3].style.background = document.getElementsByClassName("general")[0].style.background;
}

function changer_theme(nb) {
    if (nb == 1) {

        document.body.style.background = "#18191d";

        changer_class("header", "#5c5757", "white");

        changer_id("block_form", "#232020", "white");

        changer_class("general", "#efecec", null)

        changer_class("theme", "#232020", "white")

        changer_class("sous_theme", "#121317", "white");

        changer_class("bouton_section", "#232020", "white");

        changer_class("footer", "#5c5757", "white");

        selection();

    } else if (nb == 2) {
        document.body.style.background = "#18191d";

        changer_class("header", "#393e46", "white");

        changer_id("block_form", "#232020", "white");

        changer_class("general", "white", null)

        changer_class("theme", "#00adb5", "white")

        changer_class("sous_theme", "#222831", "white");

        changer_class("bouton_section", "#232020", "white");

        changer_class("footer", "#393e46", "white");

        selection();
    }
}

document.getElementById("select_theme").addEventListener("click", function() {
    var select_div = document.createElement("div");
    select_div.setAttribute("class", "row d-flex flex-column ");
    select_div.setAttribute("style", "position:absolute; top:32px;");

    for (let j = 0; j < NB_THEME; j++) {
        var div = document.createElement("div");
        div.setAttribute("class", "row flex-row");

        for (let i = 0; i < 4; i++) {
            var div2 = document.createElement("div");
            div2.setAttribute("class", "p-2");
            div.appendChild(div2);
        }
        select_div.appendChild(div);
    }
    this.appendChild(select_div);
});