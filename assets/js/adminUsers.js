const width = window.matchMedia("(min-width: 992px)");
const table = document.querySelector("#table");
const cards = document.querySelector("#cards");
const deleteButton = document.querySelectorAll(".deleteUser");
const formShowUser = document.querySelector("#formShowUser");

if (width.matches) {
    cards.classList.add("inactive");
    table.classList.remove("inactive");
} else {
    cards.classList.remove("inactive");
    table.classList.add("inactive");
}

width.addEventListener("change", () => {
    console.log("change");
    cards.classList.toggle("inactive");
    table.classList.toggle("inactive");
});

deleteButton.forEach((e) => {
    e.addEventListener("click", (e) => {
        if (confirm("Voulez-vous supprimer cet utilisateur ?")) {
            formShowUser.submit();
            location.reload();
        } else {
            e.preventDefault();
        }
    });
});


