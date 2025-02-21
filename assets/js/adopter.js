const filter = document.querySelector("#burger_icon");
const search_valid = document.querySelector("#search_valid");
const disconnectBtnHtml = '<button type="button" id="disconnect">Déconnecter</button>';
let disconnectBtn = "";
let animaux_trouve = document.querySelector(".animaux_trouve");
let userStatus = document.cookie.split("=")[1];
let link = document.querySelector("#profil");

console.log(userStatus);
console.log(link);

//////////////////////////////////////////////////////////////////////    LINK CHANGE ON NAVBAR    //////////////////////////////////////////////////////////////////////

if (userStatus === "admin") {
    link.href = "admin";
    navbar.lastElementChild.lastElementChild.insertAdjacentHTML("afterbegin", disconnectBtnHtml);
    disconnectBtn = document.querySelector("#disconnect");
} else if (userStatus === "guest") {
    link.href = "profil";
    navbar.lastElementChild.lastElementChild.insertAdjacentHTML("afterbegin", disconnectBtnHtml);
    disconnectBtn = document.querySelector("#disconnect");
} else {
    link.href = "connexion";
}

//////////////////////////////////////////////////////////////////////    FILTER MANAGEMENT    //////////////////////////////////////////////////////////////////////

filter.addEventListener("click", () => {
    document.querySelector(".filtres_hidden").classList.toggle("filtres");
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

//////////////////////////////////////////////////////////////////////    DECONNEXION    //////////////////////////////////////////////////////////////////////

disconnectBtn.addEventListener("click", () => {
    document.cookie = "user=";
    userStatus = document.cookie.split("=")[1];

    if (userStatus === "") {
        link.href = "connexion";
    }

    window.location.replace("index");
});
