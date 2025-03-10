const filterIcon = document.querySelector("#burger_icon");
const search_valid = document.querySelector("#search_valid");
const filters = document.querySelector(".filtres_hidden");
const dog = document.querySelector("#chien");
const cat = document.querySelector("#chat");
const race = document.querySelector("#race_accordion");
const shelter = document.querySelector("#id_shelter");
const europeen = document.getElementById("1");
const sacreDeBirmanie = document.getElementById("23");
const dogs = document.querySelectorAll(".dog");
const cats = document.querySelectorAll(".cat");

let animaux_trouve = document.querySelector(".animaux_trouve");

//////////////////////////////////////////////////////////////////////    FILTER MANAGEMENT    //////////////////////////////////////////////////////////////////////

filterIcon.addEventListener("click", () => {
    filters.classList.toggle("filtres");
});

//////////////////////////////////////////////////////////////////////    RACE DISPLAY IN FILTERS    //////////////////////////////////////////////////////////////////////

race.addEventListener("click", () => {
    console.log(cat.checked);
    console.log(dog.checked);

    if (cat.checked && dog.checked == false) {
        cats.forEach((cat) => {
            cat.classList.remove("inactive");
        });
        dogs.forEach((dog) => {
            dog.classList.add("inactive");
        });
    } else if (dog.checked && cat.checked == false) {
        cats.forEach((cat) => {
            cat.classList.add("inactive");
        });
        dogs.forEach((dog) => {
            dog.classList.remove("inactive");
        });
    } else if ((dog.checked && cat.checked) || (dog.checked == false && cat.checked == false)) {
        cats.forEach((cat) => {
            cat.classList.remove("inactive");
        });
        dogs.forEach((dog) => {
            dog.classList.remove("inactive");
        });
    }
});

// console.log(animaux_trouve);

const htmlContent = `<div class="card p-2">
                        <a href="information"><img src="/assets/img/chien_caroussel.jpg" class="card-img-top" alt="chien"></a>
                        <div class="card-body">
                            <h5 class="card-title">MAKI</h5>
                            <p class="card-text">Refuge de Troyes</p>
                        </div>
                    </div>
					`;

search_valid.addEventListener("click", () => {
    console.log(document.querySelector("#id_shelter").nodeValue);
    if (dog.checked) {
        animaux_trouve.innerHTML = `<div class="card p-2">
    									<a href="information"><img src="/assets/img/chien_caroussel.jpg" class="card-img-top" alt="chien"></a>
    									<div class="card-body">
    										<h5 class="card-title">SUSHI</h5>
    										<p class="card-text">Refuge de Troyes</p>
    									</div>
    								</div>
    								`;
        animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
        animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
        animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
    } else if (chat) {
        animaux_trouve.innerHTML = "";
    }
});

