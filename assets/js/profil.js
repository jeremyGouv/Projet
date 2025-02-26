const deleteAccount = document.querySelector("#delete");
let form = document.querySelector("form");
let actionForm = "";

deleteAccount.addEventListener("click", (e) => {
    actionForm = "deleteAccount";
    form.action = actionForm;

    // e.preventDefault();
});
