let ville = document.querySelector("#city").textContent;
let cities = {
    Montluçon: {
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

for (let [city, coordinates] of Object.entries(cities)) {
    if (ville == city) {
        let coords = [coordinates.lat, coordinates.lon];

        // On initialise la carte (en lui passant 'map' qui est l'ID de la DIV contenant la carte)
        let map = L.map("map", { zoom: 7, center: coords });
        let marker = L.marker(coords).addTo(map);

        // On ajoute le calque permettant d'afficher les images de la carte
        L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
        }).addTo(map);
    }
}
