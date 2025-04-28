const patternName = /^[a-zA-Z\s'-]+$/;
const patternMail = /^[a-zA-Z0-9._-]+@[a-z]+\.[a-zA-Z]{2,3}$/;
let button = document.querySelector("#submit");
let lastname = document.querySelector("#lastname");
let firstname = document.querySelector("#firstname");
let email = document.querySelector("#email");



lastname.addEventListener("keydown", (e) => {
    if (!isNaN(e.key)) {
        alert("Ne peux pas contenir de chiffres.");
        e.preventDefault();
    }
});
firstname.addEventListener("keydown", (e) => {
    if (!isNaN(e.key)) {
        alert("Ne peux pas contenir de chiffres.");
        e.preventDefault();
    }
});
button.addEventListener("click", (e) => {
    if (patternName.test(lastname.value) === false) {
        alert("erreur de format de nom.");
        e.preventDefault();
    }
    if (patternName.test(firstname.value) === false) {
        alert("erreur de format de prénom.");
        e.preventDefault();
    }
    if (patternMail.test(email.value) === false){
        alert("erreur de format d'email.");
        e.preventDefault();
    }
});


