<?php
  $this->load->view('fixos/cabecalho');
  $this->load->helper('form');
?>
    <div class="section">
        <div class="container">
            <legend align="center"><h2>Consultas</h2></legend>

                <?php echo anchor(base_url('consultas/cadastrar'), '+', 'class="btn btn-primary"');?>
                
                <br />
                <br />
                   
                <table class="table table-condensed">
                    <tr>
                        <th>Id</th>
                        <th>Paciente</th>
                        <th>Usuário</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>C. Paciente</th>
                        <th>C. Estagiário</th>
                        <th>Obs. Paciente</th>
                        <th>Obs. Estagiário</th>
                        <th>Ações</th>
                    </tr>
                
                    <?php foreach($consultas as $consulta): ?>
                        <tr>
                            <td><?php echo $consulta->getId_consulta();?><td>
                            <td><?php echo $consulta->getId_paciente(); ?><td>
                            <td><?php echo $consulta->getId_usuario(); ?><td>
                            <td><?php echo $consulta->getData(); ?><td>
                            <td><?php echo $consulta->getHora(); ?><td>
                            <td><?php echo $consulta->getComparecimento_paciente(); ?><td>
                            <td><?php echo $consulta->getComparecimento_estagiario(); ?><td>
                            <td><?php echo $consulta->getObservacao_paciente(); ?><td>
                            <td><?php echo $consulta->getObservacao_estagiario(); ?><td>                        
                        </tr>
                    <?php endforeach; ?>
                </table>
                    
<?php
       
      /*$this->table->add_row(array($row['id_consulta'], 
                                  $row['id_paciente'], 
                                  $row['id_usuario'], 
                                  $row['data'], 
                                  $row['hora'],
                                  $row['comparecimento_estagiario'],
                                  $row['comparecimento_paciente'],
                                  $row['observacao_estagiario'],
                                  $row['observacao_paciente']));


    
    $template = array('table_open' => '<table border="1" cellpadding="2" cellspacing="1" align="center">');
    $this->table->set_template($template);
    
    echo $this->table->generate();


    */
?>
    </body>
    
<?php
  $this->load->view('fixos/rodape');
?>