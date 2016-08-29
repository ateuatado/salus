<?php
    $this->load->view('fixos/cabecalho');
    $this->load->helper('form');
?>
    <div class="section">
        <div class="container" >
            <div class="row">
                <legend align="center"><h2>Editar Bateria</h2></legend>
                    <div class="col-md-7" align="right">

                        <?php 
                            if(!empty($bateria)) {
                        
                                echo form_open('baterias/editar_page'); 
                                
                                echo form_input(array('type'=>'hidden', 'name'=>'editar_id_bateria'), $bateria->getId_bateria()).'<br>';

                                echo form_label('Nome Bateria: ');
                                echo form_input(array('name'=>'editar_nome_bateria'), $bateria->getNome_bateria()).'<br>';
                            
                                echo form_label('Data Início: ');
                                echo form_input(array('name'=>'editar_data_inicio'), $bateria->getData_inicio()).'<br>';
                            
                                echo form_label('Data Fim: ');
                                echo form_input(array('name'=>'editar_data_fim'), $bateria->getData_fim()).'<br>';
                            
                                echo form_label('Semestre: ');
                                echo form_input(array('name'=>'editar_semestre'), $bateria->getSemestre()).'<br>';
                            
                                echo form_label('Ano: ');
                                echo form_input(array('name'=>'editar_ano'), $bateria->getAno()).'<br>';
                        
                                echo form_submit('submit', 'Editar Bateria', 'class="btn btn-default"');
                                echo anchor(base_url('baterias/index'), 'Cancelar', 'class="btn btn-default"');

                                echo form_close();
                            }
                    
                            if(isset($editado)) {
                                if($editado == 1) {
                                        echo "<script type='text/javascript'>alert('Bateria atualizada com sucesso!');</script>";
                                        echo anchor(base_url('baterias/index'), 'Voltar', 'class="btn btn-default"');
                                }
                                if($editado == 0)
                                    echo "<script type='text/javascript'>alert('Erro na atualização da bateria. Contate o administrador do sistema.');</script>";
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php
    $this->load->view('fixos/rodape');
?>