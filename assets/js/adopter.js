const filterIcon = document.querySelector("#burger_icon");
const search_valid = document.querySelector("#search_valid");
const filters = document.querySelector(".filtres_hidden");

let rect = filters.getBoundingClientRect();
let animaux_trouve = document.querySelector(".animaux_trouve");

console.log(rect.left);

//////////////////////////////////////////////////////////////////////    FILTER MANAGEMENT    //////////////////////////////////////////////////////////////////////

filterIcon.addEventListener("click", () => {
    filters.classList.toggle("filtres");
});


console.log(animaux_trouve);

const htmlContent = `<div class="card p-2">
                        <a href="information"><img src="/assets/img/chien_caroussel.jpg" class="card-img-top" alt="chien"></a>
                        <div class="card-body">
                            <h5 class="card-title">MAKI</h5>
                            <p class="card-text">Refuge de Troyes</p>
                        </div>
                    </div>
					`;

search_valid.addEventListener("click", () => {
    if (chien.checked) {
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
