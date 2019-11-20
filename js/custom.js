function Platzhalter(){
    alert("Die Funktion gibts noch nicht, hör auf da drauf zu klicken! Später gibts dann was sinnvolles")
}
function redirectZuRegistrieren(){
    window.location.href = "registrieren.php";
}
function redirectEinloggen(){
    window.location.href = "einloggen.php";
}
function registrierungBestätigen() {
}
function achtung(){
    var answer = window.confirm("Achtung! Sind sie sich ganz sicher, dass sie ihr Konto löschen wollen? Dies kann nicht mehr rückgangig gemacht werden")
    if (answer) {
        //DELETE ACCOUNT
    }
    else {
        alert("Ihr Account wurde nicht gelöscht")
    }
}
function redirectAccountInformation(){
    window.location.href = "AccountInformationen.html"
}
function redirectPräferenzen(){
    window.location.href = "Präferenzen.html"
}