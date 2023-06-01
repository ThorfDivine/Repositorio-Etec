function playchange() {
    var play = document.getElementById('play');
    play.src = "botões/playOn.jpg";
    var paiplay = document.getElementById('paiplay')
    var paioptions = document.getElementById('paioptions')
    var paiexit = document.getElementById('paiexit')
    play.style.marginLeft ='43.4%'
    play.style.marginTop='0'
}

function redirect() {
    window.location.href = "index.html";
}

function playChange2(play) {
    play.src = "botões/play-removebg-preview.png";
    play.style.marginLeft ='45%'
    play.style.marginTop='5.5px'
}

function optionschange() {
    var options = document.getElementById('options');
    options.src = "botões/optionsOn.jpg";
    options.style.marginLeft ='43.4%'
    options.style.marginTop='0'
}

function optionsChange2(options) {
    options.src = "botões/options-removebg-preview.png"
    options.style.marginLeft ='45%'
    options.style.marginTop='5.5px'
}

function controles() {
    
    var controles = document.getElementById('controles')
    controles.style.display = 'flex'

}

function fechar(){
    var close = document.getElementById('controles').style.display = 'none'
}

function exitchange() {
    var exit = document.getElementById('exit');
    exit.src = "botões/exitOn.jpg";
    exit.style.marginLeft ='43.4%'
    exit.style.marginTop='0'
}

function exitChange2(exit) {
    exit.src = "botões/exit-removebg-preview (1).png"
    exit.style.marginLeft ='45%'
    exit.style.marginTop='5.5px'
}
function choose() {
    document.getElementById('sure').style.display = "block";
}
function certeza() { 
    window.close();
}
function cancela() {
    document.getElementById('sure').style.display = "none";
    
}

const audio = new Audio();
audio.src = "audioClick.mp3";

