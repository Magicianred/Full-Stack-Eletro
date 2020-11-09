//Menu Header
function imgOn(obj) {
    obj.style.width = "110px";
}

function imgOff(obj) {
    obj.style.width = "100px";
}

function navOn(obj) {

    obj.style.backgroundColor = "#B0C4DE";
    obj.style.borderRadius = "50px";
}

function navOff(obj) {
    obj.style.backgroundColor = "";
}

// página inicial
let mOn = (obj) => {
    obj.innerHTML = "Olá, seja bem vindo(a)!";
}

let mOff = (obj) => {
    obj.innerHTML = "Obrigado pela preferência";
}
let amostraOn = (obj) => {
    obj.style.width = "35%";
}
let amostraOff = (obj) => {
    obj.style.width = "25%";
}

// Produtos

function prodsOn(obj) {
    obj.style.fontSize = "16pt";
    obj.style.fontWeight = "bold";
}

function prodsOff(obj) {
    obj.style.fontSize = "12pt";
    obj.style.fontWeight = "Lighter";

}


// nossas lojas


//fale conosco

function sucessOn(obj) {
    alert("Mensagem enviada com sucesso. Retornaremos o contato em breve.");
}

function botaOn(obj) {
    obj.style.backgroundColor = "white";
}


function botaOff(obj) {
    obj.style.backgroundColor = "plum";
}