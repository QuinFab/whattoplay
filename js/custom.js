function Platzhalter() {
    alert("Die Funktion gibts noch nicht, hör auf da drauf zu klicken! Später gibts dann was sinnvolles")
}

/*
function redirectZuRegistrieren(){
    window.location.href = "registrieren.php";
}
*/
function redirectEinloggen() {
    window.location.href = "einloggen.php";
}

/*
function registererror(str) {
    alert(str);
}
*/
function dBFailisdaabernichtsooschlimm() {
    alert("Insert does not work")
}

function passwortVergessen() {
    window.location.href = "passwortVergessen.php";

}


function redirectAccountInformation() {
    window.location.href = "AccountInformationen.php"
}

function redirectPraeferenzen() {
    window.location.href = "Praeferenzen.php"

}

function PraeferenzenAbschicken() {
    document.getElementById("FormGenre").submit();
    document.getElementById("FormPlattform").submit();
    document.getElementById("FormZeit").submit();
    document.getElementById("FormAlter").submit();
    document.getElementById("FormSingleMulti").submit();
    document.getElementById("FormBudget").submit();
}

function SpielevorschlagGenerieren() {
    window.location.href = "RandomSpielvorschlag.php"
    //FUNKTION DAMIT SPIEL AUCH WIRKICH GENERIERT WIRD
}

function gotoRandom() {
    window.location.href = "RandomSpielvorschlag.php";
}

function gotoUser() {
    window.location.href = "UserSpielvorschlag.php";
}

function AccountLoeschen() {
    alert("Account wurde erfolgreich Gelöscht!\nWenn du trotzdem unsere Seite Nutzen möchtest dann kannst du dich gerne hier wieder registrieren.");
    window.location.href = "AccountLoeschen.php"
}

function gotoUserPage() {
    window.location.href = "AccountLoeschen.php";
}

function seitenReloadFuerNeueSpielausgabe() {
    location.reload();
}
