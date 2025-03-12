let animaux_trouve = document.querySelector(".animaux_trouve");
const filterIcon = document.querySelector("#burger_icon");
const validFilter = document.querySelector("#valid");
const filters = document.querySelector(".filtres_hidden");
const raceAccordion = document.querySelector("#race_accordion");
const europeen = document.getElementById("1");
const sacreDeBirmanie = document.getElementById("23");
const dogs = document.querySelectorAll(".chien");
const cats = document.querySelectorAll(".chat");

const filterDog = document.querySelector("#chien");
const filterCat = document.querySelector("#chat");
const filterMale = document.querySelector("#male");
const filterFemale = document.querySelector("#femelle");
const filterAnimalName = document.querySelector("#nom_animal");
const filterSelectRaces = document.querySelector("#race");
const filterRacesOptions = filterSelectRaces.options;
const filterSelectShelters = document.querySelector("#id_shelter");
const filterSheltersOptions = filterSelectShelters.options;

const cards = document.querySelectorAll(".card");


validFilter.addEventListener("click", (e) => {
    const selectedShelter = filterSheltersOptions[filterSelectShelters.selectedIndex];

/////////////////// SPECIES FILTERS  ///////////////////

    if ((filterDog.checked && filterCat.checked) || (filterDog.checked == false && filterCat.checked == false)) {
        cats.forEach((cat) => {
            if (cat.querySelector("#shelterName").textContent == selectedShelter.textContent || selectedShelter.value == "none") {
                cat.style.display = "flex";

                if (
                    filterAnimalName.value != "" &&
                    cat.querySelector("#animalName").textContent.trim().toLowerCase().includes(filterAnimalName.value.toLowerCase())
                ) {
                    cat.style.display = "flex";
                } else if (
                    cat.querySelector("#animalName").textContent.trim().toLowerCase().includes(filterAnimalName.value.toLowerCase()) == false
                ) {
                    cat.style.display = "none";
                } else if (filterAnimalName.value == "") {
                    cat.style.display = "flex";

                    if (
                        filterMale.checked &&
                        filterFemale.checked &&
                        (cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) ||
                            cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name))
                    ) {
                        cat.style.display = "flex";
                    } else if (filterFemale.checked && cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name)) {
                        cat.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) == false
                    ) {
                        cat.style.display = "none";
                    } else if (filterMale.checked && cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) == false) {
                        cat.style.display = "none";
                    } else if (filterMale.checked && cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name)) {
                        cat.style.display = "flex";
                    } else {
                        console.log("pas de filtre");
                        cat.style.display = "flex";
                    }
                }
            }
        });
        dogs.forEach((dog) => {
            if (dog.querySelector("#shelterName").textContent == selectedShelter.textContent || selectedShelter.value == "none") {
                dog.style.display = "flex";

                if (
                    filterAnimalName.value != "" &&
                    dog.querySelector("#animalName").textContent.trim().toLowerCase().includes(filterAnimalName.value.toLowerCase())
                ) {
                    dog.style.display = "flex";
                } else if (
                    dog.querySelector("#animalName").textContent.trim().toLowerCase().includes(filterAnimalName.value.toLowerCase()) == false
                ) {
                    dog.style.display = "none";
                } else if (filterAnimalName.value == "") {
                    dog.style.display = "flex";

                    if (
                        filterMale.checked &&
                        filterFemale.checked &&
                        (dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) ||
                            dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name))
                    ) {
                        dog.style.display = "flex";
                    } else if (filterFemale.checked && dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name)) {
                        dog.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) == false
                    ) {
                        dog.style.display = "none";
                    } else if (filterMale.checked && dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) == false) {
                        dog.style.display = "none";
                    } else if (filterMale.checked && dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name)) {
                        dog.style.display = "flex";
                    } else {
                        console.log("pas de filtre");
                        dog.style.display = "flex";
                    }
                }
            }
        });
    } else if (filterDog.checked && filterCat.checked == false) {
        cats.forEach((cat) => {
            cat.style.display = "none";
        });
        dogs.forEach((dog) => {
            if (dog.querySelector("#shelterName").textContent == selectedShelter.textContent || selectedShelter.value == "none") {
                dog.style.display = "flex";

                if (
                    filterAnimalName.value != "" &&
                    dog.querySelector("#animalName").textContent.trim().toLowerCase().includes(filterAnimalName.value.toLowerCase())
                ) {
                    dog.style.display = "flex";
                } else if (
                    dog.querySelector("#animalName").textContent.trim().toLowerCase().includes(filterAnimalName.value.toLowerCase()) == false
                ) {
                    dog.style.display = "none";
                } else if (filterAnimalName.value == "") {
                    dog.style.display = "flex";

                    if (
                        filterMale.checked &&
                        filterFemale.checked &&
                        (dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) ||
                            dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name))
                    ) {
                        dog.style.display = "flex";
                    } else if (filterFemale.checked && dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name)) {
                        dog.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) == false
                    ) {
                        dog.style.display = "none";
                    } else if (filterMale.checked && dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) == false) {
                        dog.style.display = "none";
                    } else if (filterMale.checked && dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name)) {
                        dog.style.display = "flex";
                    } else {
                        console.log("pas de filtre");
                        dog.style.display = "flex";
                    }
                }
            }
        });
    } else if (filterCat.checked && filterDog.checked == false) {
        cats.forEach((cat) => {
            if (cat.querySelector("#shelterName").textContent == selectedShelter.textContent || selectedShelter.value == "none") {
                cat.style.display = "flex";

                if (
                    filterAnimalName.value != "" &&
                    cat.querySelector("#animalName").textContent.trim().toLowerCase().includes(filterAnimalName.value.toLowerCase())
                ) {
                    cat.style.display = "flex";
                } else if (
                    cat.querySelector("#animalName").textContent.trim().toLowerCase().includes(filterAnimalName.value.toLowerCase()) == false
                ) {
                    cat.style.display = "none";
                } else if (filterAnimalName.value == "") {
                    cat.style.display = "flex";

                    if (
                        filterMale.checked &&
                        filterFemale.checked &&
                        (cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) ||
                            cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name))
                    ) {
                        cat.style.display = "flex";
                    } else if (filterFemale.checked && cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name)) {
                        cat.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) == false
                    ) {
                        cat.style.display = "none";
                    } else if (filterMale.checked && cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) == false) {
                        cat.style.display = "none";
                    } else if (filterMale.checked && cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name)) {
                        cat.style.display = "flex";
                    } else {
                        console.log("pas de filtre");
                        cat.style.display = "flex";
                    }
                }
            }
        });
        dogs.forEach((dog) => {
            dog.style.display = "none";
        });
    }

    e.preventDefault();
});

//////////////////////////////////////////////////////////////////////    FILTER MANAGEMENT    //////////////////////////////////////////////////////////////////////

filterIcon.addEventListener("click", () => {
    filters.classList.toggle("filtres");
});

//////////////////////////////////////////////////////////////////////    RACE DISPLAY IN FILTERS    //////////////////////////////////////////////////////////////////////
