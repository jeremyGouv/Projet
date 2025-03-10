// let ville = document.querySelector("#city").textContent;
let cities = {
    Montuçon: {
        lat: 46.369,
        lon: 2.597,
    },
    Quimper: {
        lat: 47.969,
        lon: -4.11,
    },
    Luynes: {
        lat: 47.425,
        lon: 0.55,
    },
    Thionville: {
        lat: 49.406,
        lon: 6.11,
    },
    Compiègne: {
        lat: 49.422,
        lon: 2.846,
    },
    Plaisir: {
        lat: 48.799,
        lon: 1.93,
    },
    Cabourg: {
        lat: 49.278,
        lon: -0.116,
    },
    Chameyrat: {
        lat: 45.225,
        lon: 1.708,
    },
    Perpignan: {
        lat: 42.741,
        lon: 2.886,
    },
    Bouguenais: {
        lat: 47.169,
        lon: -1.658,
    },
    Briançon: {
        lat: 44.879,
        lon: 6.621,
    },
    Beaurepaire: {
        lat: 46.668,
        lon: 5.414,
    },
    Guadeloupe: {
        lat: 16.266,
        lon: -61.511,
    },
};
//////////////////////////////////////////////////////////////////////    MAP    //////////////////////////////////////////////////////////////////////

// On déclare les coordonnées de Paris
let lat = 48.852969;
let lon = 2.349903;

// On initialise la carte (en lui passant 'map' qui est l'ID de la DIV contenant la carte)
let map = L.map("map", { zoom: 5, center: [lat, lon] });

// On ajoute le calque permettant d'afficher les images de la carte
L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);

//////////////////////////////////////////////////////////////////////    MAP    //////////////////////////////////////////////////////////////////////

for (let [city, coordinates] of Object.entries(cities)) {
    let coords = [coordinates.lat, coordinates.lon];
    let marker = L.marker(coords).addTo(map);
}
