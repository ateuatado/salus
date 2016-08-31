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
    botao_cancelar[0].addEventListener('click', function(e){
        $('[data-toggle="popover"]').popover('hide');
    });
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
* Botão Remover Prontuario
*
* Quando clicar no botão REMOVER, mostrar o popover do bootstrap para confirmar a ação.
*/

let remove_prontuario = $('#remover_prontuario');

remove_prontuario.popover({
    placement: 'bottom',
    html: true
});

remove_prontuario.on('shown.bs.popover', function() {

    remove_prontuario.css({'border-right':'none' });
    
    let cancelar_remover_prontuario = $('#cancelar_remover_prontuario');
    
    if( cancelar_remover_prontuario !== undefined ) {
        
        cancelar_remover_prontuario[0].addEventListener('click', function(e){
            remove_prontuario.popover('hide');
        });

     }

});

remove_prontuario.on('hidden.bs.popover', function() {
    remove_prontuario.css({'border-right':'1px solid #cccccc' });
});


/*
* PRONTUARIO
*/

});