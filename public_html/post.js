
function fazPost(url, body) {
    console.log("Body=", body)
    let request = new XMLHttpRequest()
    request.open("POST", url, true)
    request.setRequestHeader("Content-type", "application/json")
    request.send(JSON.stringify(body))

    request.onload = function() {
        console.log(this.responseText)
    }

    return request.responseText
}


function cadastraVeiculo() {
    event.preventDefault()
    let url = "http://127.0.0.1:9501/carros"
    let fabricante = document.getElementById("fabricante").value
    let veiculo = document.getElementById("veiculo").value
    let ano = document.getElementById("ano").value
    let descricao = document.getElementById("descricao").value
	let criado = document.getElementById("criado").value
	
    console.log(fabricante)
    console.log(veiculo)
	console.log(ano)
    console.log(descricao)
	console.log(criado)
  

    body = {
        "name": fabricante,
        "email": veiculo,
		"email": ano,
		"email": descricao,
		"email": criado
    }

    fazPost(url, body)
}