<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('pront_radio_input'))
{

    function pront_radio_input($fields = array(), $selected = null)
    {
        $html = '';

        foreach($fields as $field) {

            // Array ( 
            //         [0] => Array ( [id_opcoes] => 1 [campo] => adm_visao [opcao] => presente [obs] => ) 
            //         [1] => Array ( [id_opcoes] => 2 [campo] => adm_visao [opcao] => ausente [obs] => ) 
            //         [2] => Array ( [id_opcoes] => 3 [campo] => adm_visao [opcao] => parcial - acompanha objeto mas não fixa [obs] => ) 
            // )  

            $selected_input = ( $selected == $field['id_opcoes'] ) ? 'checked=""' : '';

            $html .= '<label class="radio-inline">';
            $html .= '<input type="radio" name="'.$field['campo'].'" value="'.$field['id_opcoes'].'"'. $selected_input .'> ' . $field['opcao'];
            $html .= '</label>';

        }

        return $html;
    }

}