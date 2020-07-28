function updateLocal(local) {

    if (local.logradouro) {
        document.getElementById("logradouro").value = local.logradouro
    }
    if (local.complemento) {
        document.getElementById("complemento").value = local.complemento
    }
    if (local.bairro) {
        document.getElementById("bairro").value = local.bairro
    }
    if (local.uf) {
        document.getElementById("uf").value = local.uf
    }
    if (local.localidade) {
        document.getElementById("cidade").value = local.localidade
    }
}

function findLocalByCEP() {
    document.getElementById("cep").addEventListener("keyup", (e) => {
        const cep = e.target.value

        if (cep.length === 8) {
            const xhttp = new XMLHttpRequest()

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    const response = JSON.parse(this.responseText)
                    updateLocal(response)
                }
            }
            xhttp.open("POST", "/locais/find", true)
            xhttp.setRequestHeader("Content-type", "application/json")
            //xhttp.setRequestHeader("X-CSRF-Token", "48e21341ba57b6abebfd4fc3457938933c4a6621c69c34ceb5391b78")
            xhttp.send("{\"cep\": \"" + cep + "\"}")
        }
    })
}

findLocalByCEP()