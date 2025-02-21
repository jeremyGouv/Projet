let userStatus = document.cookie.split("=")[1];
let link = document.querySelector("#profil");
let disconnectBtn = '';
const disconnectBtnHtml = '<button type="button" id="disconnect">Déconnecter</button>';

console.log(userStatus);
console.log(link);

//////////////////////////////////////////////////////////////////////    LINK CHANGE ON NAVBAR    //////////////////////////////////////////////////////////////////////

if (userStatus === "admin") {
  link.href = "admin";
  navbar.lastElementChild.lastElementChild.insertAdjacentHTML("afterbegin", disconnectBtnHtml);
  disconnectBtn = document.querySelector("#disconnect");
} else if (userStatus === "guest"){
  link.href = "profil";
  navbar.lastElementChild.lastElementChild.insertAdjacentHTML("afterbegin", disconnectBtnHtml);
  disconnectBtn = document.querySelector("#disconnect");
}else{
  link.href = "connexion";
}

//////////////////////////////////////////////////////////////////////    MAP    //////////////////////////////////////////////////////////////////////

// On initialise la latitude et la longitude de Paris (centre de la carte)
let lat = 48.852969;
let lon = 2.349903;
let macarte = null;
// Fonction d'initialisation de la carte
function initMap() {
  // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
  macarte = L.map("map").setView([lat, lon], 10);
  // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
  L.tileLayer("https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png", {
    // Il est toujours bien de laisser le lien vers la source des données
    attribution:
      'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
    minZoom: 1,
    maxZoom: 10,
  }).addTo(macarte);
}
window.onload = function () {
  // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
  initMap();
};

//////////////////////////////////////////////////////////////////////    DECONNEXION    //////////////////////////////////////////////////////////////////////

disconnectBtn.addEventListener("click", ()=>{
    document.cookie = 'user=';
    userStatus = document.cookie.split("=")[1];
    
    if (userStatus === "") {
        link.href = "connexion";
    }
    
    window.location.replace("index");
    

});