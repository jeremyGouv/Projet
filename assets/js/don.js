let userStatus = document.cookie.split("=")[1];
let link = document.querySelector("#profil");
let disconnectBtn = "";
const disconnectBtnHtml = '<button type="button" id="disconnect">Déconnecter</button>';

console.log(userStatus);
console.log(link);

//////////////////////////////////////////////////////////////////////    LINK CHANGE ON NAVBAR    //////////////////////////////////////////////////////////////////////

if (userStatus === "admin") {
    link.href = "admin";
    navbar.lastElementChild.lastElementChild.insertAdjacentHTML("afterbegin", disconnectBtnHtml);
    disconnectBtn = document.querySelector("#disconnect");
} else if (userStatus === "guest") {
    link.href = "profil";
    navbar.lastElementChild.lastElementChild.insertAdjacentHTML("afterbegin", disconnectBtnHtml);
    disconnectBtn = document.querySelector("#disconnect");
} else {
    link.href = "connexion";
}

//////////////////////////////////////////////////////////////////////    DECONNEXION    //////////////////////////////////////////////////////////////////////

disconnectBtn.addEventListener("click", () => {
    document.cookie = "user=";
    userStatus = document.cookie.split("=")[1];

    if (userStatus === "") {
        link.href = "connexion";
    }

    window.location.replace("index");
});

console.log(document.cookie);
