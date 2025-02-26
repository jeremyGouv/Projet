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

//////////////////////////////////////////////////////////////////////    TABLE    //////////////////////////////////////////////////////////////////////
console.log(width);

if (width.matches) {
    boutonGestion.innerHTML = `<button class="btn btn-primary mb-2" id="addUser">Supprimer un utilisateurs</button>
                                <button class="btn btn-primary mb-2" id="showUsers">Afficher les utilisateurs</button>`;

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
                                        <input type="submit" value="Supprimer" id="saveUser">
                                    </td>
                                </tr>
                            </tbody>
                          </table>`;

    addUser.addEventListener("click", () => {
        tbody.lastElementChild.insertAdjacentHTML("beforebegin", row);
    });
} else {
    // <button class="btn btn-primary mb-2" id="showUsers" name="showUsers">Afficher les utilisateur</button>
    // boutonGestion.innerHTML = `<form method="post" action="adminUsers"><input type="submit" value="Afficher les utilisateur" name="showUsers" id="showUsers"></form>`;
                                                //  !!!!!!!!!!!!!!!!!   PASSER LE CLICK EN BACK    !!!!!!!!!!!!!!!!!!!!!!!!!!
    // showUsers.addEventListener("click", (e) => {
    //     divTable.innerHTML = `<form action="adminUsers" method="post" class="formulaire">
    //                         <label for="id_user">ID : </label> <input type="text" id="id_user" name="id_user"> <br>
    //                         <label for="lastname">Nom : </label> <input type="text" id="lastname" name="lastname"> <br>
    //                         <label for="firstname">Prénom : </label> <input type="text" id="firstname" name="firstname"> <br>
    //                         <label for="email">Email : </label> <input type="email" id="email" name="email"> <br>
    //                         <div id="dsubmit">
    //                             <input type="submit" value="Supprimer" name="deleteUser" id="deleteUser">
    //                         </div>
    //                        </form>`;
    //     e.preventDefault();
    // });
}

///////////////////////////////////////////////////////    TABLE ON WINDOW RESIZE    ///////////////////////////////////////////////////////

window.addEventListener("resize", () => {
    if (width.matches) {
        boutonGestion.innerHTML = `<button class="btn btn-primary mb-2" id="addUser">Supprimer un utilisateur</button>
                                    <button class="btn btn-primary mb-2"id="deleteUser">Supprimer un utilisateur</button>
                                    <button class="btn btn-primary mb-2" id="showUsers">Afficher les utilisateurs</button>`;

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
                                    <input type="submit" value="Supprimer" id="saveUser">
                                    </td>
                                </tr>
                            </tbody>
                           </table>`;

        addUser.addEventListener("click", () => {
            tbody.lastElementChild.insertAdjacentHTML("beforebegin", row);

            saveUser.addEventListener("click", (e) => {
                // alert("Enregistrement effectué");

                let test = document.querySelectorAll(".temporary");

                test.forEach((element) => {
                    element.remove();
                });

                e.preventDefault();
            });
        });
    } else {
        // boutonGestion.innerHTML = `<form method="post" action="adminUsers"><input type="submit" value="Afficher les utilisateur" name="showUsers" id="showUsers"></form>`;
        // divTable.innerHTML = "";

        // showUsers.addEventListener("click", (e) => {
        //     divTable.innerHTML = `<form action="adminUsers" method="post" class="formulaire">
        //                     <label for="id_user">ID : </label> <input type="text" id="id_user" name="id_user"> <br>
        //                     <label for="lastname">Nom : </label> <input type="text" id="lastname" name="lastname"> <br>
        //                     <label for="firstname">Prénom : </label> <input type="text" id="firstname" name="firstname"> <br>
        //                     <label for="email">Email : </label> <input type="email" id="email" name="email"> <br>
        //                     <div id="dsubmit">
        //                         <input type="submit" value="Supprimer" name="deleteUser" id="deleteUser">
        //                     </div>
        //                    </form>`;
        //     e.preventDefault();
        // });
    }
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
