$('document').ready(function(){

/****************************************************************
* PADRAO
****************************************************************/


/**
 *  Inicializar o popover do bootstrap
 */
$('[data-toggle="popover"]').popover();

$('[data-toggle="popover"]').on('shown.bs.popover', function(e) {
    let botao_cancelar = $(e.target.dataset.cancelar);
    
    if(typeof botao_cancelar[0] !== undefined ) {
        botao_cancelar[0].addEventListener('click', function(e){
            $('[data-toggle="popover"]').popover('hide');
        });
    }
});


/****************************************************************
* PADRAO
****************************************************************/



/****************************************************************
* PRONTUARIO
****************************************************************/

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

/**
 * Ativar campo obs. quando existir para uma opção do prontuário
 */

let campos_com_obs = $('[data-obs]');

campos_com_obs.each(function(index, element){

    let conjunto = $('[name='+ element.name +']');
    gerenciar_obs(element, conjunto.get().some( function(value, index, arr) { return (typeof value.dataset.obs !== 'undefined' &&  value.checked === true ) ? true : false; } ) );

    conjunto.change(function(){

        if(element.checked === true) {
            gerenciar_obs(element, true);
        } else {

            if( !conjunto.get().some( function(value, index, arr) { return (typeof value.dataset.obs !== 'undefined' &&  value.checked === true ) ? true : false; } ) ) {
                gerenciar_obs(element, false);
            } 
            
        }

    });

});

/**
 * Funcao para mostrar/esconder os campos de OBS. 
 */
function gerenciar_obs(obs_input, mostrar) {

    let elem_obs_container = $('#' + obs_input.dataset.obs);
    let elem_obs_input = $('[name='+ obs_input.dataset.obs +']');

    if(mostrar === false) {
        elem_obs_container.css({'display': 'none'});
        elem_obs_input.val('');
    } else {
        elem_obs_container.css({'display': 'block' });
    }

}
/****************************************************************
* PRONTUARIO
****************************************************************/



/***************************************************************
 * PACIENTE
 **************************************************************/


/**
 * Abas na pagina de Paciente Unico
 */

let hash = window.location.hash;
hash && $('#abas_paciente a[href="' + hash + '"]').tab('show');

$('#abas_paciente a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
    window.location.hash = this.hash;
});

/***************************************************************
 * PACIENTE
 **************************************************************/


/***************************************************************
 * BATERIA
 **************************************************************/

/*
* Botão Salvar Prontuario 
*
* Quando clicar no botão SALVAR, executar a funcao `submit()` do formulario.
*/

let salvarBateria = document.getElementById('salvarBateria');

if( salvarBateria !== null ) {

    salvarBateria.addEventListener('click', function(e){
        let formBateria = document.getElementById('baterias_form');
        formBateria.submit();
        return false;
    });

}

/***************************************************************
 * BATERIA
 **************************************************************/



});

