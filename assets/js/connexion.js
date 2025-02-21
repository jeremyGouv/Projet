const form = document.querySelector("form");
let actionForm = document.querySelector("form").action;

function getUserStatus(pass, email) {
    if (pass === "admin" && email === "admin@admin.fr") {
        console.log(mail.value);
        console.log(email);

        console.log(password.value);
        console.log(pass);

        document.cookie = "user=admin; path=/";
        console.log(document.cookie);
    } else {
        console.log(mail.value);
        console.log(password.value);

        document.cookie = "user=guest; path=/";
        console.log(document.cookie);
    }

    return document.cookie;
}

connexion.onsubmit = (e) => {
    let userStatus = getUserStatus(password.value, mail.value).split("=")[1];
    console.log(userStatus);

    console.log(`vous etes ${userStatus}`);

    if (userStatus === "guest") {
        actionForm = "verifForm";
        form.action = actionForm;
    } else {
        actionForm = "admin";
        form.action = actionForm;
    }
    console.log(actionForm);
    console.log(form.action);
    
    
    // e.preventDefault();
};
