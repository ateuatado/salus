<?php $this->load->view('fixos/cabecalho'); ?>

<div class="bateria estilo-padrao">

    <section class="padrao-topo">
        <div class="container">
            <div class="row">
                
                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('baterias'); ?>">Baterias</a></li>
                        <li class="active text-capitalize"><?php echo $bateria->getNome_bateria() ?></li>
                    </ol>
                </div> <!-- cold-md-9 -->
                
                <div class="col-md-3" id="bateria">
                    <div class="btn-group" role="group" aria-label="...">
                        <?php echo anchor(base_url('baterias/editar').'/'.$bateria->getId_bateria(), 'Editar', 'class="btn btn-style06"');?>
                        <button type="button" 
                                class="btn btn-style06" 
                                data-cancelar="#cancelar_bateria_<?php echo $bateria->getId_bateria(); ?>" 
                                data-container="#bateria" 
                                data-toggle="popover" 
                                data-placement="bottom" 
                                data-html="true" 
                                data-content='
                                Você realmente deseja remover essa bateria? </br></br> 
                                
                                <button class="btn btn-style06 pull-left" 
                                id="cancelar_bateria_<?php echo $bateria->getId_bateria(); ?>">Cancelar</button> 
                                
                                <a class="btn btn-danger pull-right" 
                                href="<?php echo base_url('baterias/remover/' . $bateria->getId_bateria() ); ?>">Remover</a>   
                                </br></br>'>Remover
                        </button>
                        <a class="btn btn-style06" href="<?php echo base_url('baterias/index'); ?>">Voltar</a>
                    </div>
                </div> <!-- cold-md-3 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- padrao-topo -->

    <section class="padrao-conteudo">
        <div class="container" >
           
            <section class="grupo-pront bateria-ver">

                <div class="row">
                    <div class="col-md-4">
                        <h4 class="title">Detalhes da Bateria</h4>
                    </div>

                    <div class="col-md-8">

                        <div class="form-group">
                            <label>Nome da Bateria:</label>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php echo $bateria->getNome_bateria(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Data Início</label>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php echo $bateria->getData_inicio(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Data Fim</label>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php echo $bateria->getData_fim(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Semestre</label>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php echo $bateria->getSemestre(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Ano</label>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <?php echo $bateria->getAno(); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- row -->

            </section> <!--bateria-ver -->
                
        </div> <!-- contianer -->
    </section> <!-- padrao-conteudo --> 

</div> <!-- bateria -->
<?php $this->load->view('fixos/rodape'); ?>