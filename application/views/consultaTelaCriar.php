<?php
  $this->load->view('fixos/cabecalho');
  $this->load->helper('form');
?>
    <form name="cadastro" action="<?php echo base_url('consultas/cadastrarPage'); ?>" method="post">
        
        <label>Usuário</label>
        <select name="usuario_selecionado">
            <?php foreach($usuarios_ativos as $usuario): ?>    
                <option value="<?php echo $usuario['id_usuario']; ?>"><?php echo $usuario['nome_usuario']; ?></option>
            <?php endforeach; ?>
        </select>
        
        <br>
        
        <label>Data da consulta</label>
            <input type="text" name="data_consulta">
        <label>Hora da consulta</label>
            <input type="text" name="data_consulta">
        <label>Paciente compareceu</label>        

id_paciente,id_usuario,observacao_paciente,observacao_estagiario
        <?php echo form_submit('mysubmit', 'Criar consulta'); ?>

    </form>
    
<?php
  $this->load->view('fixos/rodape');
?>