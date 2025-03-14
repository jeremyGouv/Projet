const deleteAccount = document.querySelector("#delete");
let form = document.querySelector("form");
let actionForm = "";

deleteAccount.addEventListener("click", () => {
    actionForm = "deleteAccount";
    form.action = actionForm;

    
});
