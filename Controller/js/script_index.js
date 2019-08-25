//Bouton section
var listTheme = document.getElementsByClassName("bouton_section");
var listSousTheme = document.getElementsByClassName("drop_theme");

function aff_enl_sec(nb) {
    if (listSousTheme[nb].style.display == "none") {
        listSousTheme[nb].style.display = "";
    } else {
        listSousTheme[nb].setAttribute("style", "display : none !important;");
    }
}
for (let i = 0; i < listTheme.length; i++)
    listTheme[i].addEventListener("click", function() { aff_enl_sec(i); });