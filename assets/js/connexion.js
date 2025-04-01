const patternMail = /^[a-zA-Z0-9._-]+@[a-z]+\.[a-zA-Z]{2,3}$/;
let submit = document.querySelector("#submit");
let email = document.querySelector("#mail");


submit.addEventListener("click", (e)=>{    
    if(patternMail.test(email.value) === false){
        alert("erreur de format d'email.");
        e.preventDefault(); 
    }
});
