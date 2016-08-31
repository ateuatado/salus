/*
* PRONTUARIO
*
* Quando clicar no botão SALVAR, executar a funcao `submit()` do formulario.
*/

let salvarProntuario = document.getElementById('salvarProntuario');
salvarProntuario.addEventListener('click', function(e){
    let formProntuario = document.getElementById('prontuarios_form');
    formProntuario.submit();
    return false;
});

/*
* PRONTUARIO
*/
