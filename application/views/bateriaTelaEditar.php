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
                        <li class="active">Editar <?php echo $bateria->getNome_bateria(); ?></li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3" id="bateria">
                    <div class="btn-group" role="group" aria-label="...">
                        <input type="submit" class="btn btn-default" value="Salvar" href="<?php echo base_url('baterias/editar_page'); ?>"onClick="document.getElementById('editar_page').submit();">
                        <button type="button" 
                                class="btn btn-default" 
                                data-cancelar="#cancelar_bateria_<?php echo $bateria->getId_bateria(); ?>" 
                                data-container="#bateria" 
                                data-toggle="popover" 
                                data-placement="bottom" 
                                data-html="true" 
                                data-content='
                                Você realmente deseja remover essa bateria? </br></br> 
                                
                                <button class="btn btn-default pull-left" 
                                id="cancelar_bateria_<?php echo $bateria->getId_bateria(); ?>">Cancelar</button> 
                                
                                <a class="btn btn-danger pull-right" 
                                href="<?php echo base_url('baterias/deletar/' . $bateria->getId_bateria() ); ?>">Remover</a>   
                                </br></br>'>Remover
                        </button>
                        <a class="btn btn-default" href="<?php echo base_url('baterias/index'); ?>">Voltar</a>
                    </div>
                </div> <!-- cold-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- prontuario-topo -->
    <div class="section">
        <div class="container" >
            <div class="row">
                <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                    
                    <?php
                        if(!empty($bateria)) {
                        
                        echo form_open('baterias/editar_page', 'id="editar_page"'); ?>
                        
                        <input type="hidden" name="editar_id_bateria" class="form-control" value="<?php echo $bateria->getId_bateria(); ?>">

                        <label>Nome da Bateria:</label>
                            <input type="text" name="editar_nome_bateria" class="form-control" value="<?php echo $bateria->getNome_bateria(); ?>">

                        <label>Data Início:</label>
                            <input type="text" name="editar_data_inicio" class="form-control" value="<?php echo $bateria->getData_inicio(); ?>">

                        <label>Data Fim:</label>
                            <input type="text" name="editar_data_fim" class="form-control" value="<?php echo $bateria->getData_fim(); ?>">

                        <label>Semestre:</label>
                            <input type="text" name="editar_semestre" class="form-control" value="<?php echo $bateria->getSemestre(); ?>">

                        <label>Ano:</label>
                            <input type="text" name="editar_ano" class="form-control" value="<?php echo $bateria->getAno(); ?>">
                                
                        <?php
                                echo form_close();
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('fixos/rodape'); ?>