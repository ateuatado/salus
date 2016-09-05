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
                        <li class="active"><?php echo $bateria->getNome_bateria() ?></li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3" id="bateria">
                    <div class="btn-group" role="group" aria-label="...">
                        <?php echo anchor(base_url('baterias/editar').'/'.$bateria->getId_bateria(), 'Editar', 'class="btn btn-default"');?>
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
            <?php if( isset($resultado) && $resultado == 'sucesso' ): ?>
                <div class="alert alert-success alert-dismissible" role="alert" style="color: #3c763d; margin-top: 30px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sucesso!</strong> <?php echo $mensagem; ?>
                </div>
            <?php elseif( isset($resultado) && $resultado == 'erro' ): ?>
                <div class="alert alert-danger alert-dismissible" role="alert" style="color: #a94442; margin-top: 30px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Erro!</strong> <?php echo $mensagem; ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-sm-4"></div>
                    <div class="col-sm-4">

                    <?php if(!empty($bateria)): ?>

                        <label>Nome da Bateria:</label>
                            <input type="text" name="show_nome_bateria" class="form-control" value="<?php echo $bateria->getNome_bateria(); ?>" readonly>

                        <label>Data Início:</label>
                            <input type="text" name="show_data_inicio" class="form-control" value="<?php echo $bateria->getData_inicio(); ?>" readonly>

                        <label>Data Fim:</label>
                            <input type="text" name="show_data_fim" class="form-control" value="<?php echo $bateria->getData_fim(); ?>" readonly>

                        <label>Semestre:</label>
                            <input type="text" name="show_semestre" class="form-control" value="<?php echo $bateria->getSemestre(); ?>" readonly>

                        <label>Ano:</label>
                            <input type="text" name="show_ano" class="form-control" value="<?php echo $bateria->getAno(); ?>" readonly>
                        
                    <?php endif; ?>

                    </div>                
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('fixos/rodape'); ?>