let animaux_trouve = document.querySelector(".animaux_trouve");
const filterIcon = document.querySelector("#burger_icon");
const valid = document.querySelector("#valid");
const filters = document.querySelector(".filtres_hidden");
const raceAccordion = document.querySelector("#race_accordion");
const europeen = document.getElementById("1");
const sacreDeBirmanie = document.getElementById("23");
const dogs = document.querySelectorAll(".dog");
const cats = document.querySelectorAll(".cat");

const filterDog = document.querySelector("#chien");
const filterCat = document.querySelector("#chat");
const filterMale = document.querySelector("#male");
const filterFemale = document.querySelector("#femelle");
const filterAnimalName = document.querySelector("#nom_animal");
const filterSelectRaces = document.querySelector("#race");
const filterRacesOptions = filterSelectRaces.options;
const filterSelectShelters = document.querySelector("#id_shelter");
const filterSheltersOptions = filterSelectShelters.options;

const shelters = document.querySelectorAll("#shelterName");
const cards = document.querySelectorAll(".card");

valid.addEventListener("click", (e) => {
    console.log("valid");

    /////////////////// SHELTER FILTER  ///////////////////

    // console.log(filterSheltersOptions[filterSelectShelters.selectedIndex].textContent);
    // marche pas
    cards.forEach((card) => {
        if (card.querySelector("#shelterName").textContent != filterSheltersOptions[filterSelectShelters.selectedIndex].textContent) {
            console.log("pas ok");

            card.classList.add("inactive");
        } else {
            console.log("ok");
            card.classList.remove("inactive");
        }
    });

    // cards.forEach((card) => {
    //     if (filterSheltersOptions[filterSelectShelters.selectedIndex].textContent != shelter.textContent){
    //         console.log("pas ok");
    //         shelter.classList.add("inactive");
    //     }else {
    //         console.log("ok");
    //         shelter.classList.remove("inactive");
    //     }

    // });

    /////////////////// SPECIES FILTER  ///////////////////

    if ((filterDog.checked && filterCat.checked) || (filterDog.checked == false && filterCat.checked == false)) {
        cats.forEach((cat) => {
            cat.classList.remove("inactive");
        });
        dogs.forEach((dog) => {
            dog.classList.remove("inactive");
        });
    } else if (filterDog.checked && filterCat.checked == false) {
        cats.forEach((cat) => {
            cat.classList.add("inactive");
        });
        dogs.forEach((dog) => {
            dog.classList.remove("inactive");
        });
    } else if (filterCat.checked && filterDog.checked == false) {
        cats.forEach((cat) => {
            cat.classList.remove("inactive");
        });
        dogs.forEach((dog) => {
            dog.classList.add("inactive");
        });
    }

    e.preventDefault();
});

//////////////////////////////////////////////////////////////////////    FILTER MANAGEMENT    //////////////////////////////////////////////////////////////////////

filterIcon.addEventListener("click", () => {
    filters.classList.toggle("filtres");
});

//////////////////////////////////////////////////////////////////////    RACE DISPLAY IN FILTERS    //////////////////////////////////////////////////////////////////////
