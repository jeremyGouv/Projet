const deleteAccount = document.querySelector("#delete");
const patternMail = /^[a-zA-Z0-9._-]+@[a-z]+\.[a-zA-Z]{2,3}$/;
let form = document.querySelector("form");
let actionForm = "";
let lastname = document.querySelector("#lastname");
let firstname = document.querySelector("#firstname");
let email = document.querySelector("#mail");
let phone = document.querySelector("#phone");
let zip_code = document.querySelector("#zip_code");
let submit = document.querySelector("#update");


lastname.addEventListener("keydown", (e)=>{    
    if(!isNaN(e.key)){
        alert("Ne peux contenir de chiffres.");
        e.preventDefault(); 
    }
});
firstname.addEventListener("keydown", (e)=>{    
    if(!isNaN(e.key)){
        alert("Ne peux contenir de chiffres.");
        e.preventDefault(); 
    }
});
phone.addEventListener("keydown", (e)=>{    
    if(isNaN(e.key) && e.key != "Backspace" && e.key != "Delete" && e.key != "ArrowRight" && e.key != "ArrowLeft"){
        alert("Ne peux contenir que des chiffres.");
        e.preventDefault(); 
    }
});
zip_code.addEventListener("keydown", (e)=>{    
    if(isNaN(e.key) && e.key != "Backspace" && e.key != "Delete" && e.key != "ArrowRight" && e.key != "ArrowLeft"){
        alert("Ne peux contenir que des chiffres.");
        e.preventDefault(); 
    }
});
submit.addEventListener("click", (e)=>{    
    if(patternMail.test(email.value) === false){
        alert("erreur de format d'email.");
        e.preventDefault(); 
    }
});



deleteAccount.addEventListener("click", () => {
    actionForm = "deleteAccount";
    form.action = actionForm;
});
