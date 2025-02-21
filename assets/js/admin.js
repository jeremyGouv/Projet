let disconnectBtn = '';
const disconnectBtnHtml = '<button type="button" id="disconnect">Déconnecter</button>';
const width = window.matchMedia("(min-width: 992px)");
const row = `<tr class="temporary">
                <td><input type ="text"></td>
                <td><input type ="text"></td>    
                <td><input type ="text"></td>
                <td><input type ="text"></td>
                <td><input type ="text"></td>
                <td><input type ="text"></td>
                <td><input type ="text"></td>
                <td><input type ="file" id="picture"></td>
            </tr>`;
let userStatus = document.cookie.split("=")[1];
let link = document.querySelector("#profil");



//////////////////////////////////////////////////////////////////////    LINK CHANGE ON NAVBAR    /////////////////////////////////////////////////////////////////////

if (userStatus === "admin") {
    link.href = "admin";
    navbar.lastElementChild.lastElementChild.insertAdjacentHTML("afterbegin", disconnectBtnHtml);
    disconnectBtn = document.querySelector("#disconnect");
} else if (userStatus === "guest"){
    link.href = "profil";
    navbar.lastElementChild.lastElementChild.insertAdjacentHTML("afterbegin", disconnectBtnHtml);
    disconnectBtn = document.querySelector("#disconnect");
}else{
    link.href = "connexion";
}

//////////////////////////////////////////////////////////////////////    TABLE    //////////////////////////////////////////////////////////////////////
console.log(width);

if (width.matches) {
    boutonGestion.innerHTML = `<button class="btn btn-primary mb-2" id="addAnimal">Ajouter un animal</button>
                                <button class="btn btn-primary mb-2"id="deleteAnimal">Supprimer un animal</button>
                                <button class="btn btn-primary mb-2" id="showAnimal">Afficher les animaux</button>`;

    divTable.innerHTML = `<table>
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Espèce</th>
                                    <th scope="col">Race</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Sexe</th>
                                    <th scope="col">Etablissement</th>
                                    <th scope="col">Photo</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <tr class="save">    
                                    <td>
                                        <input type="submit" value="Ajouter" id="saveAnimal">
                                    </td>
                                </tr>
                            </tbody>
                          </table>`;

    addAnimal.addEventListener("click", () => {
        tbody.lastElementChild.insertAdjacentHTML("beforebegin", row);
    });

    saveAnimal.addEventListener("click", (e) => {
        // alert("Enregistrement effectué");
        let test = document.querySelectorAll(".temporary");
        console.log(test);
        test.forEach((element) => {
            element.remove();
        });

        e.preventDefault();
    });




} else {
    boutonGestion.innerHTML = `<button class="btn btn-primary mb-2" id="addAnimal">Ajouter un animal</button>
                                <button class="btn btn-primary mb-2" id="showAnimal">Afficher les animaux</button>`;

    addAnimal.addEventListener("click", () => {
        divTable.innerHTML = `<form action="" class="formulaire">
                            <label for="id">ID : </label> <input type="text" id="id" name="id"> <br>
                            <label for="species">Espece : </label> <input type="text" id="species" name="species"> <br>
                            <label for="race">Race : </label> <input type="text" id="race" name="race"> <br>
                            <label for="name">Nom : </label> <input type="text" id="animalName" name="name"> <br>
                            <label for="sex">Sexe : </label> <input type="text" id="sex" name="sex"> <br>
                            <label for="age">Age : </label> <input type="text" id="age" name="age"> <br>
                            <label for="etablissement">Etablissement : </label> <input type="text" id="lieu" name="etablissement"> <br>
                            <label for="picture">Photo :</label> <br>
                            <input type="file" id="picture" name="picture"> <br>
                            <div id="dsubmit">
                                <input type="submit" value="Ajouter" id="saveAnimal">
                            </div>
                           </form>`;

        saveAnimal.addEventListener("click", (e) => {
            // alert("Enregistrement effectué");
            id.value = "";
            species.value = "";
            race.value = "";
            animalName.value = "";
            age.value = "";
            sex.value = "";
            lieu.value = "";

            e.preventDefault();
        });
    });



}

///////////////////////////////////////////////////////    TABLE ON WINDOW RESIZE    ///////////////////////////////////////////////////////

window.addEventListener("resize", () => {
    if (width.matches) {
        boutonGestion.innerHTML = `<button class="btn btn-primary mb-2" id="addAnimal">Ajouter un animal</button>
                                    <button class="btn btn-primary mb-2"id="deleteAnimal">Supprimer un animal</button>
                                    <button class="btn btn-primary mb-2" id="showAnimal">Afficher les animaux</button>`;

        divTable.innerHTML = `<table>
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Espèce</th>
                                    <th scope="col">Race</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Sexe</th>
                                    <th scope="col">Etablissement</th>
                                    <th scope="col">Photo</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <tr>    
                                    <td class="save">
                                    <input type="submit" value="Ajouter" id="saveAnimal">
                                    </td>
                                </tr>
                            </tbody>
                           </table>`;

        addAnimal.addEventListener("click", () => {
            tbody.lastElementChild.insertAdjacentHTML("beforebegin", row);

            saveAnimal.addEventListener("click", (e) => {
                // alert("Enregistrement effectué");

                let test = document.querySelectorAll(".temporary");

                test.forEach((element) => {
                    element.remove();
                });

                e.preventDefault();
            });
        });




    } else {
        boutonGestion.innerHTML = `<button class="btn btn-primary mb-2" id="addAnimal">Ajouter un animal</button>
                                    <button class="btn btn-primary mb-2" id="showAnimal">Afficher les animaux</button>`;
        divTable.innerHTML = "";

        addAnimal.addEventListener("click", () => {
            divTable.innerHTML = `<form action="" class="formulaire">
                                <label for="id">ID : </label> <input type="text" id="id" name="id"> <br>
                                <label for="species">Espece : </label> <input type="text" id="species" name="species"> <br>
                                <label for="race">Race : </label> <input type="text" id="race" name="race"> <br>
                                <label for="name">Nom : </label> <input type="text" id="animalName" name="name"> <br>
                                <label for="sex">Sexe : </label> <input type="text" id="sex" name="sex"> <br>
                                <label for="age">Age : </label> <input type="text" id="age" name="age"> <br>
                                <label for="etablissement">Etablissement : </label> <input type="text" id="lieu" name="etablissement"> <br>
                                <label for="picture">Photo :</label> <br>
                                <input type="file" id="picture" name="picture"> <br>
                                <div id="dsubmit">
                                    <input type="submit" value="Ajouter" id="saveAnimal">
                                </div>
                              </form>`;

            saveAnimal.addEventListener("click", (e) => {
                // alert("Enregistrement effectué");
                id.value = "";
                species.value = "";
                race.value = "";
                animalName.value = "";
                age.value = "";
                sex.value = "";
                lieu.value = "";

                e.preventDefault();
            });
        });


        
    }
});



//////////////////////////////////////////////////////////////////////    DECONNEXION    //////////////////////////////////////////////////////////////////////

disconnectBtn.addEventListener("click", ()=>{
    document.cookie = 'user=';
    userStatus = document.cookie.split("=")[1];
    
    if (userStatus === "") {
        link.href = "connexion";
    }
    
    window.location.replace("/index");
    

});













// addAnimal.addEventListener("click", () => {
//     table.innerHTML = `<table><tbody><tr><th><label for="id">ID</label></th><td><input type='text' id='id' name='id'></td></tr><tr><th><label for="species">Espèce</label></th><td><input type='text' id='species' name='animal_species'></td></tr><tr><th><label for="species">Race</label></th><td><input type='text' id='race' name='animal_race'></td></tr><tr><th><label for="name">Nom</label></th><td><input type='text' id='animalName' name='animal_name'></td></tr><tr><th><label for="age">Age</label></th><td><input type='text' id='age' name='animal_age'></td></tr><tr><th><label for="sex">Sexe</label></th><td><input type='text' id='sex' name='animal_sex'></td></tr><tr><th><label for="etablissement">Etablissement</label></th><td><input type='text' id='etablissement' name='animal_etablissement'></td></tr><tr><td><input type="submit" value="Enregistrer" id="saveAnimal"></td></tr></tbody></table>`;

//     saveAnimal.addEventListener("click", () => {
//         alert("Enregistrement effectué");
//         id.value = "";
//         species.value = "";
//         race.value = "";
//         animalName.value = "";
//         age.value = "";
//         sex.value = "";
//         etablissement.value = "";
//     });
// });

// addAnimal.addEventListener("click", () => {
//     table.innerHTML = `<form action="" class="formulaire">
//                         <label for="species">Espece : </label> <input type="text" id="species" name="species"> <br>
//                         <label for="race">Race : </label> <input type="text" id="race" name="race"> <br>
//                         <label for="name">Nom : </label> <input type="text" id="animalName" name="name"> <br>
//                         <label for="sex">Sexe : </label> <input type="text" id="sex" name="sex"> <br>
//                         <label for="age">Age : </label> <input type="text" id="age" name="age"> <br>
//                         <label for="location">Etablissement : </label> <input type="text" id="location" name="location"> <br>
//                         <label for="picture">Photo :</label> <br>
//                         <input type="file" id="picture" name="picture"> <br>
//                         <div id="dsubmit">
//                             <input type="submit" value="Ajouter" id="saveAnimal">
//                         </div>
//                         </form>`;

//     saveAnimal.addEventListener("click", (e) => {
//         alert("Enregistrement effectué");
//         species.value = "";
//         race.value = "";
//         animalName.value = "";
//         age.value = "";
//         sex.value = "";
//         location.value = "";

//         e.preventDefault();
//     });
// });
