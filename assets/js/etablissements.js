let lieu = document.querySelector("#etablissements");

// Tableaux associatifs avec le nom des refuges
let cities = {
    Montuçon: {
        lat: 46.369,
        lon: 2.597,
        phone: "04 70 29 63 23",
        infos: "Lundi, Mercredi & Vendredi : 13h30 - 17h. <br> Mardi & Jeudi: Fermé au public. <br> Samedi & Dimanche : 10h30-12h30h puis 14h-17h30."
    },
    Quimper: {
        lat: 47.969,
        lon: -4.11,
        phone: "02 98 64 87 35",
        infos: "Lundi, Mercredi & Vendredi : 13h30 - 17h. <br> Mardi & Jeudi: Fermé au public. <br> Samedi & Dimanche : 10h30-12h30 puis 14h-17h30."
    },
    Luynes: {
        lat: 47.425,
        lon: 0.55,
        phone: "02 47 42 10 47",
        infos: "Ouvert du lundi au dimanche de 14h à 17h.<br>Fermeture les jeudis."
    },
    Thionville: {
        lat: 49.406,
        lon: 6.11,
        phone: "03 82 50 31 45",
        infos: "Tous les jours de 13h30 à 17h00. <br> Samedi, Dimanche : 10h30 à 12h30 - 14h à 17h30."
    },
    Compiègne: {
        lat: 49.422,
        lon: 2.846,
        phone: "03 44 40 21 20",
        infos: "Ouvert tous les jours de 13h30 à 17h00. <br> Les week-end de 10h00 à 12h30 et de 13h30 à 17h00. <br> Fermé tous les jeudis."
    },
    Plaisir: {
        lat: 48.799,
        lon: 1.93,
        phone: "01 34 89 05 47",
        infos: "Lundi, Mercredi & Vendredi : 13h30 - 17h. <br> Mardi & Jeudi: Fermé au public. <br> Samedi & Dimanche : 10h30-12h30h puis 14h-17h30."
    },
    Cabourg: {
        lat: 49.278,
        lon: -0.116,
        phone: "02 31 28 09 71",
        infos: "Lundi Mercredi, Vendredi : 13h30 à 17h. <br> Samedi, Dimanche : 10h30 à 12h30 et 14h à 17h30. "
    },
    Chameyrat: {
        lat: 45.225,
        lon: 1.708,
        phone: "05 55 27 26 81",
        infos: "Ouvert tous les jours sauf mardis de 14h à 17h, y compris certains jours fériés."
    },
    Perpignan: {
        lat: 42.741,
        lon: 2.886,
        phone: "04 68 57 52 53",
        infos: "Lundi, Mercredi & Vendredi : 13h30 - 17h. <br> Mardi & Jeudi: Fermé au public. <br> Samedi & Dimanche : 10h30-12h30h puis 14h-17h30."
    },
    Bouguenais: {
        lat: 47.169,
        lon: -1.658,
        phone: "02 49 62 81 02",
        infos: "Ouvert lundi, mardi, mercredi, vendredi et samedi de 14h30 à 17h30."
    },
    Briançon: {
        lat: 44.879,
        lon: 6.621,
        phone: "04 92 21 15 29",
        infos: "Ouvert de 14h30 à 17h, sauf les jeudis (fermé au public)."
    },
    Beaurepaire: {
        lat: 46.668,
        lon: 5.414,
        phone: "03 84 24 82 20",
        infos: "Lundi, Mercredi, Vendredi : 13h30 - 17h00. <br> Samedi, Dimanche : 10h30 - 12h30 puis 14h00 - 17h30"
    },
    Guadeloupe: {
        lat: 16.266,
        lon: -61.511,
        phone: "05 90 21 12 80",
        infos: "Ouvert tous les jours, sauf le mercredi, de 13h à 16h."
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


// Affichage informations etablissements
for (let [city, info] of Object.entries(cities)) {
    lieu.innerHTML += `<div id="${city}" class="lieuTrouve"><h5>${city}</h5><p>${info.phone}</p><p><small>${info.infos}</small></p></div>`;
}

// Ajout de marqueurs et de pop-up
for (let [city, infos] of Object.entries(cities)) {
    let coords = [infos.lat, infos.lon];
    let popup = `<div><h5>${city}</h5><p>${infos.phone}</p><p>${infos.infos}</p></div>`;
    let marker = L.marker(coords).addTo(map);
    marker.bindPopup(popup);
}



