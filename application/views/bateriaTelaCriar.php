<?php
    $this->load->view('fixos/cabecalho');
    $this->load->helper('form');
?>
    <div class="section">
        <div class="container" >
            <div class="row">
                <legend align="center"><h2>Criar Bateria</h2></legend>
                    <div class="col-md-7" align="right">
                
                                <?php 
                            echo form_open('baterias/criar_page'); 
                            
                            echo form_label('Nome Bateria: ');
                            echo form_input(array('name'=>'criar_nome_bateria')).'<br>';
                            
                            echo form_label('Data Início: ');
                            echo form_input(array('name'=>'criar_data_inicio')).'<br>';
                            
                            echo form_label('Data Fim: ');
                            echo form_input(array('name'=>'criar_data_fim')).'<br>';
                            
                            echo form_label('Semestre: ');
                            echo form_input(array('name'=>'criar_semestre')).'<br>';
                            
                            echo form_label('Ano: ');
                            echo form_input(array('name'=>'criar_ano')).'<br>';
                       
                            echo form_submit('submit', 'Criar Bateria', 'class="btn btn-default"'); 
                            echo anchor(base_url('baterias/index'), 'Cancelar', 'class="btn btn-default"');
                            
                            echo form_close();
                        
                            if(isset($cadastrado)) {
                                if($cadastrado == 1)
                                    echo "<script type='text/javascript'>alert('Bateria cadastrada com sucesso!');</script>";
                                if($cadastrado == 0)
                                    echo "<script type='text/javascript'>alert('Erro no cadastro da Bateria!');</script>";
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php
    $this->load->view('fixos/rodape');
?>