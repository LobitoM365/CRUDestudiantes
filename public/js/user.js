
let trTableUsers = document.getElementById("trTableUsers");
let Modal = document.getElementById("Modal");
let addUser = document.getElementById("addUser");
let tbodyTable = document.getElementById("tbodyTable");
let registrarUsuario = document.getElementById("registrarUsuario");
let tdTable = document.querySelectorAll(".td-table");
let tdOptionsTable = document.querySelectorAll(".td-options-table");
let errorInput = document.querySelectorAll(".error-input");
let closeModal = document.querySelectorAll(".closeModal");
let templateTd = tdTable[0].cloneNode(true);
let templateTdOptions = tdOptionsTable[0].cloneNode(true);
let csrfToken = $("meta[name='csrf-token']").attr("content");

tdTable[0].remove();
tdOptionsTable[0].remove();
let templeteTr = trTableUsers.cloneNode(true);
trTableUsers.remove();


fetch("usuarios/listar")
    .then(reponse => reponse.json())
    .then(data => {
        let keys = [
            "id",
            "name",
            "apellido",
            "email",
            "rol"
        ]
        if (data.status == true) {
            for (let x = 0; x < data.data.length; x++) {
                let keysData = Object.keys(data.data[x]);
                let templateTrClone = templeteTr.cloneNode(true);
                let cloneTemplateTdOptions = templateTdOptions.cloneNode(true);
                for (let k = 0; k < keys.length; k++) {
                    if (keysData.includes(keys[k])) {
                        let templateTdClone = templateTd.cloneNode(true);
                        let infoTemplate = templateTdClone.querySelectorAll(".justify-center");

                        infoTemplate[0].innerHTML = data.data[x][keys[k]]
                        templateTrClone.appendChild(templateTdClone)
                    }
                }
                let divOptionsId = cloneTemplateTdOptions.querySelectorAll(".div-options-update");
                divOptionsId[0].setAttribute("data-id", data.data[x]["id"])
                templateTrClone.appendChild(cloneTemplateTdOptions)
                tbodyTable.appendChild(templateTrClone)
            }
        }
        console.log(data)
    })
    .catch(e => {
        console.log(e)
    })
addUser.addEventListener("click", function () {
    Modal.style.display = "flex"
})

for (let x = 0; x < closeModal.length; x++) {
    closeModal[x].addEventListener("click", function () {
        Modal.style.display = "none"
    })
}
$("body").on("click", "#registrarUsuario", function (event) {
    let keys = [
        "name",
        "apellido",
        "identificacion",
        "email",
        "rol"
    ]
    let formData = $("#formUser").serialize();
    formData += `&_token=${csrfToken}`;
    console.log(formData)
    $.ajax({
        type: "POST",
        url: "/usuarios/registrar",
        data: formData,
        success: function (response) {
            console.log(response)

            if (response.errors) {
                let errors = Object.keys(response.errors)
                for (let x = 0; x < keys.length; x++) {
                    if (errors.includes(keys[x])) {
                        errorInput[x].innerHTML = response.errors[keys[x]];
                        errorInput[x].style.display = "block";
                    } else {
                        errorInput[x].innerHTML = "";
                        errorInput[x].style.display = "block";
                    }
                }

            } else if (response.status == true) {
                Swal.fire({
                    icon: "success",
                    title: "Excelente",
                    text: response.mensaje
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: response.mensaje
                });

            }
        },
        error: function (response) {
            console.log(response)
        },
    })

})
