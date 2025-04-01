const patternName = /^[a-zA-Z\s'-]+$/;
let button = document.querySelector("#submit");
let lastname = document.querySelector("#lastname");
let firstname = document.querySelector("#firstname");
let email = document.querySelector("#email");


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
submit.addEventListener("click", (e)=>{    
    if(patternName.test(lastname.value) === false){
        alert("erreur de format de nom.");
        e.preventDefault(); 
    }else if(patternName.test(firstname.value) === false){
        alert("erreur de format de prénom.");
        e.preventDefault(); 
    }
});
