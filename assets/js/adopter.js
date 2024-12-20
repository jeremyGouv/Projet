const filter = document.querySelector("#burger_icon");
const search_valid = document.querySelector("#search_valid");
let animaux_trouve = document.querySelector('.animaux_trouve');


filter.addEventListener("click", () => {
  document.querySelector(".filtres_hidden").classList.toggle('filtres');
});

console.log(animaux_trouve);

const htmlContent = `<div class="card p-2">
                        <img src="/assets/img/chien_caroussel.jpg" class="card-img-top" alt="chien">
                        <div class="card-body">
                            <h5 class="card-title">MAKI</h5>
                            <p class="card-text">Refuge de Troyes</p>
                        </div>
                    </div>
					`;


search_valid.addEventListener("click", () => {

    if (chien.checked) {
        
        animaux_trouve.innerHTML = `<div class="card p-2">
										<img src="/assets/img/chien_caroussel.jpg" class="card-img-top" alt="chien">
										<div class="card-body">
											<h5 class="card-title">SUSHI</h5>
											<p class="card-text">Refuge de Troyes</p>
										</div>
									</div>
									`;
		animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
		animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
		animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
		animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
		animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
		animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
		animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
		animaux_trouve.lastElementChild.insertAdjacentHTML("afterend", htmlContent);
        
    }else if (chat) {
		animaux_trouve.innerHTML = "";
	
    }
    
    
  
});

