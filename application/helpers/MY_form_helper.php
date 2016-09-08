<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('pront_radio_input'))
{

    function pront_radio_input($fields = array(), $selected = null)
    {
        $html = '';

        foreach($fields as $field) {

            $selected_input = ( $selected == $field['id_opcoes'] ) ? 'checked=""' : '';
            $obs_ativo = ( $field['obs'] == 's' ) ? 'data-obs="' . $field['campo'] . '_obs"' : '';
            
            $html .= '<label class="radio-inline pront_radio_input">';
            $html .= '<input type="radio" name="' . $field['campo'] . '" value="' . $field['id_opcoes'] . '"' . $selected_input . ' ' . $obs_ativo . '> ' . $field['opcao'];
            $html .= '</label>';

        }

        return $html;
    }

}