function setCookie(cnom, cvaleur, exjour) {
    var d = new Date();
    d.setTime(d.getTime() + (exjour * 24 * 60 * 60 * 1000));
    var expire = "expires=" + d.toUTCString();
    document.cookie = cnom + "=" + cvaleur + ";" + expire + ";path=/";
}

if(document.getElementById("inscri_btn")){
    document.getElementById("inscri_btn").addEventListener("click", function() {
        document.getElementById("inscription").setAttribute("style", "display: block !important");
    });
}

if(document.getElementById("connect_btn")){
    document.getElementById("connect_btn").addEventListener("click", function() {
        document.getElementById("connexion").setAttribute("style", "display: block !important");
    });
}

var cliquer = 1;
if(document.getElementsByClassName("block_form")[1]){
    console.log(this);
    document.getElementsByClassName("block_form")[1].addEventListener("click", function() {
        cliquer = 0;
    });
}

if(document.getElementById("inscription")){
    document.getElementById("inscription").addEventListener("click", function() {
        if (cliquer) {
            document.getElementById("inscription").setAttribute("style", "display: none !important");
            setCookie("erreur", "", 0);
        }
        cliquer = 1;
    });
}

if(document.getElementsByClassName("block_form")[0]){
    document.getElementsByClassName("block_form")[0].addEventListener("click", function() {
        cliquer = 0;
    });
}

if(document.getElementById("connexion")){
    document.getElementById("connexion").addEventListener("click", function() {
        if (cliquer) {
            document.getElementById("connexion").setAttribute("style", "display: none !important");
            setCookie("erreur2", "", 0);
        }
        cliquer = 1;
    });
}