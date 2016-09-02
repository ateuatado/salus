<?php
    $this->load->view('fixos/cabecalho');
    $this->load->helper('form');
?>
    <section class="prontuario-topo">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('baterias/index'); ?>">Baterias</a></li>
                        <li class="active">Nova Bateria</li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3">
                    <div class="btn-group" role="group" aria-label="...">
                        <input type="submit" class="btn btn-default" value="Criar" href="<?php echo base_url('baterias/criar_page'); ?>"onClick="document.getElementById('criar').submit();">
                        <a class="btn btn-default" href="<?php echo base_url('baterias/index'); ?>">Voltar</a>
                    </div>
                </div> <!-- cold-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- prontuario-topo -->
    <div class="section">
        <div class="container" >
            <div class="row">
                    <div class="col-md-7" align="right">
                        <?php
                            echo form_open('baterias/criar_page', 'id="criar"'); 
                            
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