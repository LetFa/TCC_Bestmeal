
var url_string = window.location.href;
var url_split = url_string.split('/')
var url = url_split[url_split.length - 1]
var create = $("#create").attr('id')
var created = $("#created").attr('id')
var account = $("#account").attr('id')
var login = $("#login").attr('id')


if(url == '') {
    $("#home").addClass('active')
}else {
    $("#home").removeClass('active') 
}

if(url == create) {
    $("#create").addClass('active')
}else {
    $("#create").removeClass('active') 
}

if(url == created) {
    $("#created").addClass('active')
}else {
    $("#created").removeClass('active') 
}
if(url == account) {
    $("#account").addClass('active')
}else {
    $("#account").removeClass('active') 
}
if(url == login) {
    $("#login").addClass('active')
}else {
    $("#login").removeClass('active') 
}

let sequencia = []
let code = "rodtutzdev"
window.addEventListener("keydown", function(evento){
    const teclaPressionada = evento.key
    sequencia.push(teclaPressionada)
    const frase = sequencia.join('')

    if(frase.includes(code)) {
        const secret = this.document.getElementById("secret")
        secret.classList.remove("hide")
        secret.classList.add("show")
    }
})