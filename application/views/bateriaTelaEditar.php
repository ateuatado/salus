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
                        <li class="active">Editar Bateria</li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3">
                    <div class="btn-group" role="group" aria-label="...">
                        <input type="submit" class="btn btn-default" value="Salvar" href="<?php echo base_url('baterias/editar_page'); ?>"onClick="document.getElementById('editar').submit();">
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
                            if(!empty($bateria)) {
                        
                                echo form_open('baterias/editar_page', 'id="editar"'); 
                                
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
                        
                                echo form_close();
                            }
                    
                            if(isset($editado)) {
                                if($editado == 1) {
                                        echo "<script type='text/javascript'>alert('Bateria atualizada com sucesso!');</script>";
                                }
                                if($editado == 0)
                                    echo "<script type='text/javascript'>alert('Erro na atualização da bateria. Contate o administrador do sistema.');</script>";
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
