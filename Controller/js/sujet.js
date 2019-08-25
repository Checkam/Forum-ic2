function setCookie(cnom, cvaleur, exjour) {
    var d = new Date();
    d.setTime(d.getTime() + (exjour * 24 * 60 * 60 * 1000));
    var expire = "expires=" + d.toUTCString();
    document.cookie = cnom + "=" + cvaleur + ";" + expire + ";path=/";
}

document.getElementById("btn").addEventListener("click", function() {
    document.getElementById("add").setAttribute("style", "display: block !important");
});

var cliquer = 1;
document.getElementById("form").addEventListener("click", function() {
    cliquer = 0;
});

document.getElementById("add").addEventListener("click", function() {
    if (cliquer) {
        document.getElementById("add").setAttribute("style", "display: none !important");
        setCookie("erreur", "", 0);
    }
    cliquer = 1;
});

