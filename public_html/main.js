function fazGet(url) {
    let request = new XMLHttpRequest()
    request.open("GET", url, false)
    request.send()
    return request.responseText
}

function criaLinha(veiculo) {
    console.log(veiculo)
    linha = document.createElement("tr");
    tdId = document.createElement("td");
    tdNome = document.createElement("td");
    tdId.innerHTML = veiculo.id
    tdFabricante.innerHTML = veiculo.fabricante
	tdVeiculo.innerHTML = veiculo.veiculo
	tdAno.innerHTML = veiculo.ano
	tdDescricao.innerHTML = veiculo.descricao
	tdCriado.innerHTML = veiculo.criado
	

    linha.appendChild(tdId);
    linha.appendChild(tdFabricante);
	linha.appendChild(tdVeiculo);

    return linha;
}


function main() {
    let data = fazGet("http://127.0.0.1:9501/get/carros");
    let veiculo = JSON.parse(data);
    let tabela = document.getElementById("tabela");
    veiculos.forEach(element => {
        let linha = criaLinha(element);
        tabela.appendChild(linha);
    });
    // Para cada veiculo
        // criar uma linha
        // adicionar na tabela
}

main()