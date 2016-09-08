<?php $this->load->view('fixos/cabecalho'); ?>  

<div class="bateria estilo-padrao">

    <section class="padrao-topo">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li class="active">
                            Baterias
                        </li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3">
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-style06" href="<?php echo base_url('baterias/cadastrar'); ?>">Nova Bateria</a>
                    </div>
                </div> <!-- cold-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- padrao-topo -->

    <section class="padrao-msg">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <?php /* Mensagem de Erro/Sucesso para a aba Prontuario */ ?>
                    <?php if( isset($mensagem) && $mensagem == 'sucesso_cadastrar' ): ?>
                        <div class="alert alert-success alert-dismissible" role="alert" style="color: #3c763d; margin-top: 10px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Sucesso!</strong> Bateria cadastrada com sucesso.
                        </div>
                    <?php elseif( isset($mensagem) && $mensagem == 'sucesso_remover' ): ?>
                        <div class="alert alert-success alert-dismissible" role="alert" style="color: #3c763d; margin-top: 10px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Sucesso!</strong> Bateria removida com sucesso.
                        </div>
                    <?php elseif( isset($mensagem) && $mensagem == 'erro' ): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert" style="color: #a94442; margin-top: 10px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Erro!</strong> Não foi possivel cadastrar/remover a bateria.
                        </div>
                    <?php endif; ?>
                    <?php /* Mensagem de Erro/Sucesso para a aba Prontuario */ ?>
                </div> <!-- col-md-12 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- padrao-msg -->

    <section class="padrao-conteudo">
        
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="baterias-lista" id="baterias-lista">

                        <?php if(!empty($baterias)): ?>

                            <div class="topo-lista-personalizada">
                                <span class="pull-left">Nome da Bateria</span>
                                <span class="pull-right">Ações</span>
                            </div>

                            <?php foreach($baterias as $bateria): ?>

                                <div class="panel panel-default">
                                    <div class="panel-body">

                                        <div class="pull-left titulo-lista-personalizada">
                                            <span class="text-capitalize"><?php echo $bateria->getNome_bateria();?></span>
                                            <div class="info-lista-personalizada">
                                                <ul>
                                                    <li>Data Início: <?php echo $bateria->getData_inicio();?></li>
                                                    <li>Data Fim: <?php echo $bateria->getData_fim(); ?></li>
                                                    <li>Semetre: <?php echo $bateria->getSemestre(); ?></li>
                                                    <li>Ano: <?php echo $bateria->getAno(); ?></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="pull-right acoes-lista-personalizada">

                                            <div class="btn-group" role="group">
                                                <?php echo anchor(base_url('baterias/consultar').'/'.$bateria->getId_bateria(), 'Ver', 'class="btn btn-style06"');?>
                                                <button type="button" 
                                                        class="btn btn-style06" 
                                                        data-cancelar="#cancelar_bateria_<?php echo $bateria->getId_bateria(); ?>" 
                                                        data-container="#baterias-lista" 
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
                                            </div>
                                            
                                        </div> <!-- pull-right -->

                                    </div> <!-- panel-body -->
                                </div> <!-- panel-default -->

                            <?php endforeach ?>

                        <?php else: ?>

                            <div class="panel panel-default">
                                <div class="panel-body">

                                    <span>Não há baterias cadastradas.</span>

                                </div> <!-- panel-body -->
                            </div> <!-- panel-default -->

                        <?php endif; ?>

                    </div> <!-- baterias-lista -->

                </div> <!-- col-md-12 -->  

            </div> <!-- row -->
        </div> <!-- container -->

    </section> <!-- padrao-conteudo -->

</div> <!-- bateria -->

<?php $this->load->view('fixos/rodape'); ?>