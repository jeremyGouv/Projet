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
let filterRacesOptions = filterSelectRaces.options;
const filterSelectShelters = document.querySelector("#id_shelter");
const filterSheltersOptions = filterSelectShelters.options;

const cards = document.querySelectorAll(".card");

validFilter.addEventListener("click", (e) => {
    const selectedShelter = filterSheltersOptions[filterSelectShelters.selectedIndex];
    let selectedRace = filterRacesOptions[filterRacesOptions.selectedIndex].textContent;

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

                    if (selectedRace.trim() == "-") {
                        console.log("ok");
                    }

                    if (
                        filterMale.checked &&
                        filterFemale.checked &&
                        (cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) ||
                            cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name)) &&
                        (selectedRace.trim() == "-" || cat.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        cat.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) &&
                        (selectedRace.trim() == "-" || cat.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        cat.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) == false
                    ) {
                        cat.style.display = "none";
                    } else if (filterMale.checked && cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) == false) {
                        cat.style.display = "none";
                    } else if (
                        filterMale.checked &&
                        cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) &&
                        (selectedRace.trim() == "-" || cat.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        cat.style.display = "flex";
                    } else {
                        if (selectedRace.trim() == "-" || cat.querySelector("#animalRace").textContent.includes(selectedRace.trim())) {
                            cat.style.display = "flex";
                        } else {
                            cat.style.display = "none";
                        }
                    }
                }
            } else {
                cat.style.display = "none";
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
                            dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name)) &&
                        (selectedRace.trim() == "-" || dog.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        dog.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) &&
                        (selectedRace.trim() == "-" || dog.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        dog.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) == false
                    ) {
                        dog.style.display = "none";
                    } else if (filterMale.checked && dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) == false) {
                        dog.style.display = "none";
                    } else if (
                        filterMale.checked &&
                        dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) &&
                        (selectedRace.trim() == "-" || dog.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        dog.style.display = "flex";
                    } else {
                        if (selectedRace.trim() == "-" || dog.querySelector("#animalRace").textContent.includes(selectedRace.trim())) {
                            dog.style.display = "flex";
                        } else {
                            dog.style.display = "none";
                        }
                    }
                }
            } else {
                dog.style.display = "none";
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
                            (dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) &&
                                (selectedRace.trim() == "-" || dog.querySelector("#animalRace").textContent.includes(selectedRace.trim()))))
                    ) {
                        dog.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) &&
                        (selectedRace.trim() == "-" || dog.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        dog.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) == false
                    ) {
                        dog.style.display = "none";
                    } else if (filterMale.checked && dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) == false) {
                        dog.style.display = "none";
                    } else if (
                        filterMale.checked &&
                        dog.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) &&
                        (selectedRace.trim() == "-" || dog.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        dog.style.display = "flex";
                    } else {
                        if (selectedRace.trim() == "-" || dog.querySelector("#animalRace").textContent.includes(selectedRace.trim())) {
                            dog.style.display = "flex";
                        } else {
                            dog.style.display = "none";
                        }
                    }
                }
            } else {
                dog.style.display = "none";
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
                            (cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) &&
                                (selectedRace.trim() == "-" || cat.querySelector("#animalRace").textContent.includes(selectedRace.trim()))))
                    ) {
                        cat.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) &&
                        (selectedRace.trim() == "-" || cat.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        cat.style.display = "flex";
                    } else if (
                        filterFemale.checked &&
                        cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterFemale.name) == false
                    ) {
                        cat.style.display = "none";
                    } else if (filterMale.checked && cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) == false) {
                        cat.style.display = "none";
                    } else if (
                        filterMale.checked &&
                        cat.querySelector("#animalSex").textContent.toLowerCase().includes(filterMale.name) &&
                        (selectedRace.trim() == "-" || cat.querySelector("#animalRace").textContent.includes(selectedRace.trim()))
                    ) {
                        cat.style.display = "flex";
                    } else {
                        if (selectedRace.trim() == "-" || cat.querySelector("#animalRace").textContent.includes(selectedRace.trim())) {
                            cat.style.display = "flex";
                        } else {
                            cat.style.display = "none";
                        }
                    }
                }
            } else {
                cat.style.display = "none";
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

//////////////////////////////////////////////////////////////////////    RACE DISPLAY IN FILTERS    ////////////////////////////////////////////////////////////////

raceAccordion.addEventListener("click", () => {
    if ((filterCat.checked && filterDog.checked) || (filterCat.checked == false && filterDog.checked == false)) {
        for (const option of filterRacesOptions) {
            option.style.display = "block";
            if (option.value == "1") {
                option.removeAttribute("selected");
            }
            if (option.value == "none") {
                option.setAttribute("selected", "selected");
            }
        }
    } else if (filterDog.checked) {
        for (const option of filterRacesOptions) {
            option.style.display = "block";
            if (option.value == "1" || option.value == "23") {
                option.style.display = "none";
                option.removeAttribute("selected");
            }
            if (option.value == "none") {
                option.setAttribute("selected", "selected");
            }
        }
    } else if (filterCat.checked) {
        for (const option of filterRacesOptions) {
            option.style.display = "block";
            if (option.value != "1" && option.value != "23") {
                option.style.display = "none";
            }
            if (option.value == "1") {
                option.setAttribute("selected", "selected");
            }
        }
    }
});
