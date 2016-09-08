<?php $this->load->view('fixos/cabecalho'); ?>

<div class="paciente estilo-padrao">

    <section class="padrao-topo">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url('pacientes'); ?>">Pacientes</a>
                        </li>
                        <li class="active text-capitalize"><?php echo $paciente->get_nome_completo(); ?></li>
                    </ol>
                </div> <!-- cold-md-9 -->
                
                 <div class="col-md-3" id="opcoes_prontuario">
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-style06" href="<?php echo base_url('pacientes/editar/' . $paciente->get_id_paciente() ); ?>">Editar</a>

                        <button type="button" class="btn btn-style06" data-cancelar="#cancelar_paciente_<?php echo $paciente->get_id_paciente(); ?>" data-container="#opcoes_prontuario" data-toggle="popover" data-placement="bottom" data-html="true" data-content='
                    
                            <span class="cor-texto-padrao-2">Você realmente deseja remover esse paciente?</span></br></br> 
                            <button class="btn btn-style06 pull-left" id="cancelar_paciente_<?php echo $paciente->get_id_paciente(); ?>">Cancelar</button> 
                            <a class="btn btn-danger pull-right" href="<?php echo base_url('pacientes/remover/' . $paciente->get_id_paciente() ); ?>">Remover</a>   
                            </br></br>

                        '>Remover</button>
                        
                        <a class="btn btn-style06" href="<?php echo base_url('pacientes' ); ?>">Voltar</a>
                    </div>
                </div> <!-- cold-md-3 -->
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- padrao-topo -->

    <section class="padrao-info">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                   
                    <ul class="list-inline lista-abas" role="tablist" id="abas_paciente">
                        <li role="presentation" class="active">
                            <a href="#consultas" aria-controls="consultas" role="tab" data-toggle="tab">Consultas</a>
                        </li>
                        <li role="presentation">
                            <a href="#prontuarios" aria-controls="prontuarios" role="tab" data-toggle="tab">Prontuários</a>
                        </li>
                        <li role="presentation">
                            <a href="#informacoes" aria-controls="informacoes" role="tab" data-toggle="tab">Informações</a>
                        </li>
                    </ul> <!-- lista-abas -->


                </div> <!-- col-md-12 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- padrao-info -->

    <section class="padrao-msg">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <?php /* Mensagem de Erro/Sucesso para a aba Prontuario */ ?>
                    <?php if( isset($mensagem) && $mensagem == 'sucesso' ): ?>
                        <div class="alert alert-success alert-dismissible" role="alert" style="color: #3c763d; margin-top: 10px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Sucesso!</strong> Prontuario removido com sucesso.
                        </div>
                    <?php elseif( isset($mensagem) && $mensagem == 'erro' ): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert" style="color: #a94442; margin-top: 10px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Erro!</strong> Não foi possivel remover o prontuario.
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

                    <div class="tab-content">

                        <section role="tabpanel" class="tab-pane active padrao-conteudo-section" id="consultas">

                            <div class="well">
                                <h3 class="no-margin">Consultas</h3>
                                <p>Nenhuma</p>
                            </div>

                        </section> <!-- consultas -->

                        <section role="tabpanel" class="tab-pane padrao-conteudo-section" id="prontuarios">

                            <div class="topo-lista-personalizada">
                                <span class="pull-left">Nome do usuário</span>
                                <span class="pull-right">Ações</span>
                            </div>

                            <?php foreach($prontuarios as $prontuario): ?>

                                <div class="panel panel-default">
                                    <div class="panel-body">

                                        <div class="pull-left titulo-lista-personalizada">
                                            <span class="text-capitalize"><?php echo $prontuario->get_usuario()->get_nome_usuario(); ?></span>
                                            <div class="info-lista-personalizada">
                                                <ul>
                                                    <li>Estagiário</li>
                                                    <li>Data de criação: <?php echo $prontuario->get_data_criacao(); ?></li>
                                                    <li>Data última atualização: <?php echo $prontuario->get_data_atualizacao(); ?></li>
                                                    <li><?php echo $prontuario->porcentoFeitoDoProntuario(); ?>% completo</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="pull-right acoes-lista-personalizada">

                                            <div class="btn-group" role="group">
                                                <a class="btn btn-style06" href="<?php echo base_url('/prontuarios/consultar/' . $prontuario->get_id_prontuario() ); ?>">Ver</a>
                                                <button type="button" class="btn btn-style06" data-cancelar="#cancelar_prontuario_<?php echo $prontuario->get_id_prontuario(); ?>" data-container="#prontuarios" data-toggle="popover" data-placement="bottom" data-html="true" data-content='
                        
                                                    <span class="cor-texto-padrao-2">Você realmente deseja remover esse prontuario?</span> </br></br> 
                                                    <button class="btn btn-style06 pull-left" id="cancelar_prontuario_<?php echo $prontuario->get_id_prontuario(); ?>">Cancelar</button> 
                                                    <a class="btn btn-danger pull-right" style="font-weight: 500;" href="<?php echo base_url('prontuarios/remover/' . $prontuario->get_id_prontuario() . '/' . $prontuario->get_paciente()->get_id_paciente() ); ?>">Remover</a>   
                                                    </br></br>

                                                '>Remover</button>
                                            </div> <!-- btn-group -->
                                            
                                        </div> <!-- pull-right -->
                                    </div> <!-- panel-body -->
                                </div> <!-- panel-default -->

                            <?php endforeach; ?>

                            <div class="rodape-lista-personalizada">
                                <span class="pull-right">
                                    <a href="<?php echo base_url('prontuarios/cadastrar'); ?>" class="btn btn-style07">Novo Prontuário</a>
                                </span>
                            </div>

                        </section> <!-- prontuarios -->

                        <section role="tabpanel" class="tab-pane padrao-conteudo-section" id="informacoes">
                            informacoes
                        </section> <!-- informacoes -->

                    </div> <!-- tab-content -->

                </div> <!-- col-md-12 -->

            </div> <!-- row -->
        </div> <!-- container -->

    </section> <!-- padrao-conteudo -->
    

    
</div> <!-- paciente -->
<?php $this->load->view('fixos/rodape'); ?>
