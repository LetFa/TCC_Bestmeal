let mostraSenha = document.getElementById('mostrar-senha-login');

mostraSenha.addEventListener('click', function(){

 let senha = document.getElementById('senha')

 if(senha.type == 'password'){
    senha.type = 'text'
 }else {
    senha.type = 'password'
 }

})