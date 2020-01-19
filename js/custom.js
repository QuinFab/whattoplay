function Platzhalter() {
    alert("Die Funktion gibts noch nicht, hör auf da drauf zu klicken! Später gibts dann was sinnvolles")
}

function redirectEinloggen() {
    window.location.href = "einloggen.php";
}

function passwortVergessen() {
    window.location.href = "passwortVergessen.php";

}
function emaillink() {
    window.location.href = "emailversenden.php";

}

function redirectAccountInformation() {
    window.location.href = "AccountInformationen.php"
}

function redirectPraeferenzen() {
    window.location.href = "Praeferenzen.php"

}

function gotoRandom() {
    window.location.href = "RandomSpielvorschlag.php";
}

function gotoUser() {
    window.location.href = "UserSpielvorschlag.php";
}

function AccountLoeschen() {

    if (confirm("Willst du deinen Account wirklich löschen? Das kann nicht mehr rückganig gemacht werden!")) {
        alert("Account wurde erfolgreich Gelöscht!\nWenn du trotzdem unsere Seite Nutzen möchtest dann kannst du dich gerne hier wieder registrieren.");
        window.location.href = "AccountLoeschen.php"
    } else {
        alert("Dein Account wurde nicht gelöscht");
    }

}

function gotoUserPage() {
    window.location.href = "AccountLoeschen.php";
}

