const key = '3eb2d1bfaf11f5dca7a0461b0ddd0120'

function pesquisar() {
    let cidade = document.querySelector('.inputCidade').value
    buscarDados(cidade);
}

async function buscarDados(nomeCidade) {
    let dados = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${nomeCidade}&appid=${key}`);
    inserirDados(dados);
}

function inserirDados(jsonApi) {
    console.log(jsonApi);
    document.querySelector('.tituloCidade').innerHTML = "Tempo em: " +  jsonApi.name;
    document.querySelector('.graus').innerHTML = Math.floor(jsonApi.main.temp) + ' ºC';
    document.querySelector('.textoPrevisao').innerHTML = jsonApi.weather[0].description;
    document.querySelector('.imgPrevisao').src = `https://openweathermap.org/img/wn/${dados.weather[0].icon}.png`;
    document.querySelector('.umidade').innerHTML = "Umidade relativa: " + dados.main.humidity + "%"
}

document.addEventListener("keypress", function (e) {
    if (e.key === 'Enter') {
        const btn = document.querySelector(".btn");
        btn.click();
    }
});