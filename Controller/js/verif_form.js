
var tab_connexion = new Array(0, 0);
var tab_inscription = new Array(0, 0, 0, 0, 0);

/* fonctions annexes */
function envoie(nom, tab_envoie) {
    var verif = 1;
    for (let i = 0; i < tab_envoie.length && verif; i++) {
        if (tab_envoie[i] == 0)
            verif = 0;
    }
    if (verif) {
        document.getElementsByName(nom)[0].disabled = false;
    } else {
        document.getElementsByName(nom)[0].disabled = true;
    }
}

function init_tab(){
    if (document.getElementById('pseudo_i').value.length <= 50 && document.getElementById('pseudo_i').value.length > 0) {
        tab_inscription[0] = 1;
    } else {
        tab_inscription[0] = 0;
    }

    tab_inscription[1] = document.getElementById('mdp_i').value.length;
    tab_inscription[2] = document.getElementById('mdp2_i').value.length;
    tab_inscription[3] = document.getElementById('mail_i').value.length;
    tab_inscription[4] = document.getElementById('mail2_i').value.length;

    tab_connexion[0] = document.getElementById('pseudo_c').value.length;
    tab_connexion[1] = document.getElementById('mdp_c').value.length;
}

/* Verification formulaire inscription */
document.getElementById('pseudo_i').addEventListener('input', function() {
    if (this.value.length > 0 && this.value.length <= 50) {
        tab_inscription[0] = 1;
    } else {
        tab_inscription[0] = 0;
    }
    envoie("inscription", tab_inscription);
});

document.getElementById('mdp_i').addEventListener('input', function() {
    if (this.value.length > 0) {
        tab_inscription[1] = 1;
    } else {
        tab_inscription[1] = 0;
    }
    envoie("inscription", tab_inscription);
});

document.getElementById('mdp2_i').addEventListener('input', function() {
    if (this.value.length > 0) {
        tab_inscription[2] = 1;
    } else {
        tab_inscription[2] = 0;
    }
    envoie("inscription", tab_inscription);
});

document.getElementById('mail_i').addEventListener('input', function() {
    if (this.value.length > 0) {
        tab_inscription[3] = 1;
    } else {
        tab_inscription[3] = 0;
    }
    envoie("inscription", tab_inscription);
});

document.getElementById('mail2_i').addEventListener('input', function() {
    if (this.value.length > 0) {
        tab_inscription[4] = 1;
    } else {
        tab_inscription[4] = 0;
    }
    envoie("inscription", tab_inscription);
});

/* Verification formulaire connexion */
document.getElementById('pseudo_c').addEventListener('input', function() {
    if (this.value.length > 0) {
        tab_connexion[0] = 1;
    } else {
        tab_connexion[0] = 0;
    }
    envoie("connexion", tab_connexion);
});

document.getElementById('mdp_c').addEventListener('input', function() {
    if (this.value.length > 0) {
        tab_connexion[1] = 1;
    } else {
        tab_connexion[1] = 0;
    }
    envoie("connexion", tab_connexion);
});

document.getElementById("inscri_btn").addEventListener("click", function() {
    envoie("inscription", tab_inscription);
});

document.getElementById("connect_btn").addEventListener("click", function() {
    envoie("connexion", tab_connexion);
});

/* Initialisation */
init_tab();
