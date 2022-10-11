alert("Olá, Mundo!");

function mostraAlerta() {
    alert("Funciona!");
}

var botao = document.querySelector("#botaoEnviar");
botao.onclick = mostraAlerta;