const consentModal = document.querySelector(".consent");
const consentBtn = document.querySelectorAll(".consent-btn");
let consent = sessionStorage.getItem("consent");

console.log(sessionStorage);
console.log(consent);

if (consent === "true") {
    consentModal.style.display = "none";
} else {
    consentModal.style.display = "block";
}

consentBtn.forEach((button) => {
    button.addEventListener("click", () => {
        consentModal.style.display = "none";
        sessionStorage.setItem("consent", "true");
        consent = sessionStorage.getItem("consent");
    });
});
