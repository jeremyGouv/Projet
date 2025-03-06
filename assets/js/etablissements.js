let userStatus = document.cookie.split("=")[1];
let link = document.querySelector("#profil");
let disconnectBtn = "";
const disconnectBtnHtml = '<button type="button" id="disconnect">Déconnecter</button>';

console.log(userStatus);
console.log(link);


//////////////////////////////////////////////////////////////////////    MAP    //////////////////////////////////////////////////////////////////////
// On déclare les coordonnées de Paris
let lat = 48.852969;
let lon = 2.349903;

// On initialise la carte (en lui passant 'map' qui est l'ID de la DIV contenant la carte)
let map = L.map("map", {
    zoom: 13,
    center: [lat, lon]
});

// On ajoute le calque permettant d'afficher les images de la carte
L.tileLayer("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png", {
    minZoom: 1,
    maxZoom: 20,
    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>'
}).addTo(map);