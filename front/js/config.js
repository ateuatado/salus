$('document').ready(function(){

/**
 * 
 *  Inicializar o popover do bootstrap
 * 
 */
$('[data-toggle="popover"]').popover();

$('[data-toggle="popover"]').on('shown.bs.popover', function(e) {
    
    // Quando clicar em cancelar esconder o popover
    let botao_cancelar = $(e.target.dataset.cancelar);
    
    if(typeof botao_cancelar[0] !== undefined ) {
        botao_cancelar[0].addEventListener('click', function(e){
            $('[data-toggle="popover"]').popover('hide');
        });
    }
});

/*
* PRONTUARIO
*/

/*
* Botão Salvar Prontuario 
*
* Quando clicar no botão SALVAR, executar a funcao `submit()` do formulario.
*/

let salvarProntuario = document.getElementById('salvarProntuario');

if( salvarProntuario !== null ) {

    salvarProntuario.addEventListener('click', function(e){
        let formProntuario = document.getElementById('prontuarios_form');
        formProntuario.submit();
        return false;
    });

}


/*
* PRONTUARIO
*/

});