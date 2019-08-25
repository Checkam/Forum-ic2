var info = document.getElementById("info_profil");
var msg = document.getElementById("msg_profil");
var sujet = document.getElementById("sujet_profil");

document.getElementById('btn_info_profil').addEventListener('click', function() {
    info.setAttribute("style", "");
    msg.setAttribute("style", "display: none !important");
    sujet.setAttribute("style", "display: none !important");
});

document.getElementById('btn_msg_profil').addEventListener('click', function() {
    info.setAttribute("style", "display: none !important");
    msg.setAttribute("style", "");
    sujet.setAttribute("style", "display: none !important");
});

document.getElementById('btn_sujet_profil').addEventListener('click', function() {
    info.setAttribute("style", "display: none !important");
    msg.setAttribute("style", "display: none !important");
    sujet.setAttribute("style", "");
});