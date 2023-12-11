const horas = document.getElementById('horas');
const minutos = document.getElementById('minutos');
const segundos = document.getElementById('segundos');

function zeroMais(tempo){
    if (tempo < 10) {
        tempo = "0" + tempo
    }
    return tempo
}

const relogio = setInterval(function time(){
    let dataHoje = new Date();
    let hora = zeroMais(dataHoje.getHours());
    let minuto = zeroMais(dataHoje.getMinutes());
    let segundo = zeroMais(dataHoje.getSeconds());
    horas.textContent = hora;
    minutos.textContent = minuto;
    segundos.textContent = segundo;

})