<?php $this->load->view('fixos/cabecalho'); ?>

<div class="prontuario">

    <section class="prontuario-topo">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('pacientes/consultar'); ?>">Pacientes</a></li>
                        <li>
                            <a href="<?php echo base_url('pacientes/consultar'); ?>/<?php echo $prontuario->get_paciente()->get_id_paciente(); ?>" class="text-capitalize">
                                <?php echo $prontuario->get_paciente()->get_nome_completo(); ?>
                            </a>
                        </li>
                        <li class="active">
                            Editar Prontuario
                        </li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3">
                    <div class="btn-group" role="group" aria-label="...">
                        <button class="btn btn-default" id="salvarProntuario">Salvar</button>
                        <a class="btn btn-default" href="<?php echo base_url('prontuarios/consultar/' . $prontuario->get_id_prontuario() ); ?>">Voltar</a>
                    </div>
                </div> <!-- cold-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- prontuario-topo -->

    <section class="prontuario-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="prontuario-criado-por">
                        <p>Criado por: <?php echo $prontuario->get_usuario()->get_nome_usuario(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- prontuario-info -->

    <section class="prontuario-conteudo">
        <div class="container">

            <?php if( isset($mensagem) && $mensagem == 'sucesso' ): ?>
                <div class="alert alert-success alert-dismissible" role="alert" style="color: #3c763d; margin-top: 30px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sucesso!</strong> Prontuario editado com sucesso.
                </div>
            <?php elseif( isset($mensagem) && $mensagem == 'erro' ): ?>
                <div class="alert alert-danger alert-dismissible" role="alert" style="color: #a94442; margin-top: 30px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Erro!</strong> Não foi possivel atualizar o prontuario.
                </div>
            <?php endif; ?>

            <?php echo form_open('prontuarios/editar_form', 
                    array( 'id' => 'prontuarios_form', 'name' => 'prontuarios_form' ), 
                    array( 'id_prontuario' => $prontuario->get_id_prontuario() ) ); ?>

                <section class="grupo-pront adm">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Avaliação do Desenvolvimento Motor</h4>
                        </div> <!-- col-md-4 -->
                        
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Visão</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $adm_visao = $prontuario->pegarOpcoesParaProntuario( 'adm_visao' );
                                                    echo pront_radio_input( $adm_visao, $prontuario->get_adm_visao() ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                            
                            <div class="form-group">
                                <label>Audição</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $adm_audicao = $prontuario->pegarOpcoesParaProntuario('adm_audicao');
                                                    echo pront_radio_input($adm_audicao, $prontuario->get_adm_audicao()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                          
                            <div class="form-group">
                                <label>Linguagem</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $adm_linguagem = $prontuario->pegarOpcoesParaProntuario('adm_linguagem');
                                                    echo pront_radio_input($adm_linguagem, $prontuario->get_adm_linguagem()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                          
                            <div class="form-group">
                                <label>Cognitivo</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php  $adm_cognitivo = $prontuario->pegarOpcoesParaProntuario('adm_cognitivo');
                                                    echo pront_radio_input($adm_cognitivo, $prontuario->get_adm_cognitivo()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                            
                            <div class="form-group">
                                <label>Reflexos Primitivos</label>

                                <div class="form-group">
                                <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $adm_reflexos_prim = $prontuario->pegarOpcoesParaProntuario('adm_reflexos_prim');
                                                    echo pront_radio_input($adm_reflexos_prim, $prontuario->get_adm_reflexos_prim()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- md-col-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- adm -->

                <section class="grupo-pront supino">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Supino</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Simetria</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $supino_simetria = $prontuario->pegarOpcoesParaProntuario('supino_simetria');
                                                    echo pront_radio_input($supino_simetria, $prontuario->get_supino_simetria()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Alinhamento</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $supino_alinhamento = $prontuario->pegarOpcoesParaProntuario('supino_alinhamento');
                                                    echo pront_radio_input($supino_alinhamento, $prontuario->get_supino_alinhamento()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Movimentação Ativa</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $supino_movimentacao_ativa = $prontuario->pegarOpcoesParaProntuario('supino_movimentacao_ativa');
                                                    echo pront_radio_input($supino_movimentacao_ativa, $prontuario->get_supino_movimentacao_ativa()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                            
                            <div class="form-group">
                                <label for="supino_obs">Observação</label>

                                <div class="form-group">
                                    <?php   $supino_obs = array(
                                                'name' => 'supino_obs',
                                                'id' => 'supino_obs',
                                                'value' => $prontuario->get_supino_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                            echo form_textarea( $supino_obs ); ?>
                                </div> 
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- supino -->

                <section class="grupo-pront prono">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Prono</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Controle Cervical</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $prono_controle_cervical = $prontuario->pegarOpcoesParaProntuario('prono_controle_cervical');
                                                    echo pront_radio_input($prono_controle_cervical, $prontuario->get_prono_controle_cervical()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Controle Escapular</label>
                                
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $prono_controle_escapular = $prontuario->pegarOpcoesParaProntuario('prono_controle_escapular');
                                                    echo pront_radio_input($prono_controle_escapular, $prontuario->get_prono_controle_escapular()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Simetria</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $prono_simetria = $prontuario->pegarOpcoesParaProntuario('prono_simetria');
                                                    echo pront_radio_input($prono_simetria, $prontuario->get_prono_simetria()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Alinhamento</label>
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $prono_alinhamento = $prontuario->pegarOpcoesParaProntuario('prono_alinhamento');
                                                    echo pront_radio_input($prono_alinhamento, $prontuario->get_prono_alinhamento()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Movimentação Ativa</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $prono_movimentacao_ativa = $prontuario->pegarOpcoesParaProntuario('prono_movimentacao_ativa');
                                                    echo pront_radio_input($prono_movimentacao_ativa, $prontuario->get_prono_movimentacao_ativa()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                            
                            <div class="form-group">
                                <label for="prono_obs">Observação</label>

                                <div class="form-group">
                                    <?php   $prono_obs = array(
                                                'name' => 'prono_obs',
                                                'id' => 'prono_obs',
                                                'value' => $prontuario->get_prono_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                    
                                            echo form_textarea( $prono_obs ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row --> 

                </section> <!-- prono -->

                <section class="grupo-pront rolar">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Rolar</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $rolar = $prontuario->pegarOpcoesParaProntuario('rolar');
                                                    echo pront_radio_input($rolar, $prontuario->get_rolar()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- rolar -->

                <section class="grupo-pront sentado">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Sentado</h4>
                        </div> <!-- col-md-4 -->
                        
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Controle Cervical</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $sentado_controle_cervical = $prontuario->pegarOpcoesParaProntuario('sentado_controle_cervical');
                                                    echo pront_radio_input($sentado_controle_cervical, $prontuario->get_sentado_controle_cervical()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Controle de Tronco</label>
                                
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $sentado_controle_tronco = $prontuario->pegarOpcoesParaProntuario('sentado_controle_tronco');
                                                    echo pront_radio_input($sentado_controle_tronco, $prontuario->get_sentado_controle_tronco()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Simetria</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $sentando_simetria = $prontuario->pegarOpcoesParaProntuario('sentando_simetria');
                                                    echo pront_radio_input($sentando_simetria, $prontuario->get_sentando_simetria()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Alinhamento</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $sentado_alinhamento = $prontuario->pegarOpcoesParaProntuario('sentado_alinhamento');
                                                    echo pront_radio_input($sentado_alinhamento, $prontuario->get_sentado_alinhamento()); ?>
                                            </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Movimentação Ativa</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $sentado_movimentacao_ativa = $prontuario->pegarOpcoesParaProntuario('sentado_movimentacao_ativa');
                                                    echo pront_radio_input($sentado_movimentacao_ativa, $prontuario->get_sentado_movimentacao_ativa()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                            
                            <div class="form-group">
                                <label for="sentado_obs">Observação</label>

                                <div class="form-group">
                                    <?php   $sentado_obs = array(
                                                'name' => 'sentado_obs',
                                                'id' => 'sentado_obs',
                                                'value' => $prontuario->get_sentado_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                    
                                            echo form_textarea( $sentado_obs ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row --> 

                </section> <!-- sentado -->

                <section class="grupo-pront troca-postural-supino-sentado">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Troca Postural de Supino para Sentado</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Postura de Quadril</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $sentado_postura_quadril = $prontuario->pegarOpcoesParaProntuario('sentado_postura_quadril');
                                                    echo pront_radio_input($sentado_postura_quadril, $prontuario->get_sentado_postura_quadril()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Deformidade da Coluna</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $sentado_deformidade_coluna = $prontuario->pegarOpcoesParaProntuario('sentado_deformidade_coluna');
                                                    echo pront_radio_input($sentado_deformidade_coluna, $prontuario->get_sentado_deformidade_coluna()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Deformidade de Quadril</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $sentado_deformidade_quadril = $prontuario->pegarOpcoesParaProntuario('sentado_deformidade_quadril');
                                                    echo pront_radio_input($sentado_deformidade_quadril, $prontuario->get_sentado_deformidade_quadril()); ?>
                                            </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Observação</label>

                                <div class="form-group">
                                    <?php   $sentado_troca_postural = array(
                                                'name' => 'sentado_troca_postural',
                                                'id' => 'sentado_troca_postural',
                                                'value' => $prontuario->get_sentado_troca_postural(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                    
                                            echo form_textarea( $sentado_troca_postural ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- troca-postural-supino-sentado -->

                <section class="grupo-pront engatinhar">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Engatinhar</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $engatinhar = $prontuario->pegarOpcoesParaProntuario('engatinhar');
                                                    echo pront_radio_input($engatinhar, $prontuario->get_engatinhar()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="engatinhar_obs">Descrição</label>

                                <div class="form-group">
                                    <?php   $engatinhar_obs = array(
                                                'name' => 'engatinhar_obs',
                                                'id' => 'engatinhar_obs',
                                                'value' => $prontuario->get_engatinhar_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                    
                                            echo form_textarea( $engatinhar_obs ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- engatinhar -->

                <section class="grupo-pront arrastar">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Arrastar</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $arrastar = $prontuario->pegarOpcoesParaProntuario('arrastar');
                                                    echo pront_radio_input($arrastar, $prontuario->get_arrastar()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="arrastar_obs">Descrição</label>

                                <div class="form-group">
                                    <?php   $arrastar_obs = array(
                                                'name' => 'arrastar_obs',
                                                'id' => 'arrastar_obs',
                                                'value' => $prontuario->get_arrastar_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                    
                                            echo form_textarea( $arrastar_obs ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- engatinhar -->

                <section class="grupo-pront ortostatismo">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Ortostatismo</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $ortostatismo = $prontuario->pegarOpcoesParaProntuario('ortostatismo');
                                                    echo pront_radio_input($ortostatismo, $prontuario->get_ortostatismo()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- ortostatismo -->

                <section class="grupo-pront marcha">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Marcha</h4>
                        </div> <!-- col-md-8 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $marcha = $prontuario->pegarOpcoesParaProntuario('marcha');
                                                    echo pront_radio_input($marcha, $prontuario->get_marcha()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="marcha_obs">Descrição</label>

                                <div class="form-group">
                                    <?php   $marcha_obs = array(
                                                'name' => 'marcha_obs',
                                                'id' => 'marcha_obs',
                                                'value' => $prontuario->get_marcha_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $marcha_obs ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- marcha -->

                <section class="grupo-pront observações'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Observações</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="observacao">Descrição</label>

                                <div class="form-group">
                                    <?php   $observacao = array(
                                                'name' => 'observacao',
                                                'id' => 'observacao',
                                                'value' => $prontuario->get_observacao(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $observacao ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- engatinhar -->

                <section class="grupo-pront tonus-base">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Tônus de Base</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Hipertonia Elástica (grupos musculares)</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $tonus_base_hipertonia_elastica = $prontuario->pegarOpcoesParaProntuario('tonus_base_hipertonia_elastica');
                                                    echo pront_radio_input($tonus_base_hipertonia_elastica, $prontuario->get_tonus_base_hipertonia_elastica()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="tonus_base_hipertonia_elastica_sinais_clinicos">Sinais Clinicos</label>
                                
                                <div class="form-group">
                                    <?php   $tonus_base_hipertonia_elastica_sinais_clinicos = array(
                                                'name' => 'tonus_base_hipertonia_elastica_sinais_clinicos',
                                                'id' => 'tonus_base_hipertonia_elastica_sinais_clinicos',
                                                'value' => $prontuario->get_tonus_base_hipertonia_elastica_sinais_clinicos(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $tonus_base_hipertonia_elastica_sinais_clinicos ); ?>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="tonus_base_asworth">Asworth</label>

                                <div class="form-group">
                                    <?php   $tonus_base_asworth = array(
                                                'name' => 'tonus_base_asworth',
                                                'id' => 'tonus_base_asworth',
                                                'value' => $prontuario->get_tonus_base_asworth(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $tonus_base_asworth ); ?>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Hipertonia Plástica</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $tonus_base_hipertonia_plastica = $prontuario->pegarOpcoesParaProntuario('tonus_base_hipertonia_plastica');
                                                    echo pront_radio_input($tonus_base_hipertonia_plastica, $prontuario->get_tonus_base_hipertonia_plastica()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="tonus_base_hipertonia_plastica_sinais_clinicos">Sinais Clinicos</label>

                                <div class="form-group">
                                    <?php   $tonus_base_hipertonia_plastica_sinais_clinicos = array(
                                                'name' => 'tonus_base_hipertonia_plastica_sinais_clinicos',
                                                'id' => 'tonus_bastonus_base_hipertonia_plastica_sinais_clinicose_asworth',
                                                'value' => $prontuario->get_tonus_base_hipertonia_plastica_sinais_clinicos(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $tonus_base_hipertonia_plastica_sinais_clinicos ); ?>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Discinesias</label>
                                
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $tonus_base_discinesias = $prontuario->pegarOpcoesParaProntuario('tonus_base_discinesias');
                                                    echo pront_radio_input($tonus_base_discinesias, $prontuario->get_tonus_base_discinesias()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Hipotonia</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $tonus_base_hipotonia = $prontuario->pegarOpcoesParaProntuario('tonus_base_hipotonia');
                                                    echo pront_radio_input($tonus_base_hipotonia, $prontuario->get_tonus_base_hipotonia()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                            
                            <div class="form-group">
                                <label>Incoordenação de movimentos</label>
                                
                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $tonus_base_incordenacao_movimentos = $prontuario->pegarOpcoesParaProntuario('tonus_base_incordenacao_movimentos');
                                                    echo pront_radio_input($tonus_base_incordenacao_movimentos, $prontuario->get_tonus_base_incordenacao_movimentos()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- tonus-base -->

                <section class="grupo-pront tonus-dinamico'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Tônus Dinâmico</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="tonus_dinamico">Descrição</label>

                                <div class="form-group">
                                    <?php   $tonus_dinamico = array(
                                                'name' => 'tonus_dinamico',
                                                'id' => 'tonus_dinamico',
                                                'value' => $prontuario->get_tonus_dinamico(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $tonus_dinamico ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- tonus-dinamico -->

                <section class="grupo-pront encurtamento-musculares-deformidades'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Encurtamentos Musculares e Deformidades</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="encurtamento_musculares_deformidades">Descrição</label>

                                <div class="form-group">
                                    <?php   $encurtamento_musculares_deformidades = array(
                                                'name' => 'encurtamento_musculares_deformidades',
                                                'id' => 'encurtamento_musculares_deformidades',
                                                'value' => $prontuario->get_encurtamento_musculares_deformidades(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $encurtamento_musculares_deformidades ); ?>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- encurtamento-musculares-deformidades -->

                <section class="grupo-pront forca-muscular'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Força Muscular</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <table class="table table-bordered">
                                <thead style="text-align: center;">
                                    <tr>
                                        <td width="50%" colspan="2">Grupos Musculares</td>
                                        <td width="25%">D</td>
                                        <td width="25%">E</td>
                                    </tr>
                                </thead>
                                <tr>
                                    <td width="25%" style="text-align:center; vertical-align: middle;">MMSS</td>
                                    <td>
                                        <?php   $forca_muscular_mms_gm = array(
                                                    'name' => 'forca_muscular_mms_gm',
                                                    'id' => 'forca_muscular_mms_gm',
                                                    'value' => $prontuario->get_forca_muscular_mms_gm(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $forca_muscular_mms_gm ); ?>
                                    </td>
                                    <td>
                                        <?php   $forca_muscular_mms_d = array(
                                                    'name' => 'forca_muscular_mms_d',
                                                    'id' => 'forca_muscular_mms_d',
                                                    'value' => $prontuario->get_forca_muscular_mms_d(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $forca_muscular_mms_d ); ?>
                                    </td>
                                    <td>
                                        <?php   $forca_muscular_mms_e = array(
                                                    'name' => 'forca_muscular_mms_e',
                                                    'id' => 'forca_muscular_mms_e',
                                                    'value' => $prontuario->get_forca_muscular_mms_e(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $forca_muscular_mms_e ); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25%" style="text-align:center; vertical-align: middle;">MMII</td>
                                    <td>
                                        <?php   $forca_muscular_mmii_gm = array(
                                                    'name' => 'forca_muscular_mmii_gm',
                                                    'id' => 'forca_muscular_mmii_gm',
                                                    'value' => $prontuario->get_forca_muscular_mmii_gm(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                            echo form_textarea( $forca_muscular_mmii_gm ); ?>
                                    </td>
                                    <td>
                                        <?php   $forca_muscular_mmii_d = array(
                                                    'name' => 'forca_muscular_mmii_d',
                                                    'id' => 'forca_muscular_mmii_d',
                                                    'value' => $prontuario->get_forca_muscular_mmii_d(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                            echo form_textarea( $forca_muscular_mmii_d ); ?>
                                    </td>
                                    <td>
                                        <?php   $forca_muscular_mmii_e = array(
                                                    'name' => 'forca_muscular_mmii_e',
                                                    'id' => 'forca_muscular_mmii_e',
                                                    'value' => $prontuario->get_forca_muscular_mmii_e(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $forca_muscular_mmii_e ); ?>
                                    </td>
                                </tr>
                            </table>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- forca-muscular -->

                <section class="grupo-pront mecanismo-reflexo-postural'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Mecanismo Reflexo Postural</h4>
                        </div> <!-- col-md-4 -->
                        
                        <div class="col-md-8">

                            <table class="table table-bordered">
                                <thead style="text-align: center;">
                                    <tr>
                                        <td width="33.333333333%">Reações Posturais</td>
                                        <td width="33.333333333%">Postura Sentada</td>
                                        <td width="33.333333333%">Bípede</td>
                                    </tr>
                                </thead>
                                <tr>
                                    <td width="33.333333333%" style="font-size:15px; text-align:center; vertical-align: middle;">Reações de Endireitamento (A, I, C)</td>
                                    <td width="33.333333333%">
                                        <?php   $mrp_reacoes_endireitamento_postura_sentada = array(
                                                    'name' => 'mrp_reacoes_endireitamento_postura_sentada',
                                                    'id' => 'mrp_reacoes_endireitamento_postura_sentada',
                                                    'value' => $prontuario->get_mrp_reacoes_endireitamento_postura_sentada(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $mrp_reacoes_endireitamento_postura_sentada ); ?>
                                    </td>
                                    <td width="33.333333333%">
                                        <?php   $mrp_reacoes_endireitamento_bipede = array(
                                                    'name' => 'mrp_reacoes_endireitamento_bipede',
                                                    'id' => 'mrp_reacoes_endireitamento_bipede',
                                                    'value' => $prontuario->get_mrp_reacoes_endireitamento_bipede(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $mrp_reacoes_endireitamento_bipede ); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33.333333333%" style="text-align:center; vertical-align: middle;">Reações de Equilibrio (A, I, C)</td>
                                    <td width="33.333333333%">
                                        <?php   $mrp_reacoes_equilibrio_postura_sentada = array(
                                                    'name' => 'mrp_reacoes_equilibrio_postura_sentada',
                                                    'id' => 'mrp_reacoes_equilibrio_postura_sentada',
                                                    'value' => $prontuario->get_mrp_reacoes_equilibrio_postura_sentada(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $mrp_reacoes_equilibrio_postura_sentada ); ?>
                                    </td>
                                    <td width="33.333333333%">
                                        <?php $mrp_reacoes_equilibrio_bipede = array(
                                                'name' => 'mrp_reacoes_equilibrio_bipede',
                                                'id' => 'mrp_reacoes_equilibrio_bipede',
                                                'value' => $prontuario->get_mrp_reacoes_equilibrio_bipede(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                            echo form_textarea( $mrp_reacoes_equilibrio_bipede ); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33.333333333%" style="text-align:center; vertical-align: middle;">Reações de Proteção (A, P)</td>
                                    <td width="33.333333333%">
                                        <?php   $mrp_reacoes_protecao_postura_sentada = array(
                                                    'name' => 'mrp_reacoes_protecao_postura_sentada',
                                                    'id' => 'mrp_reacoes_protecao_postura_sentada',
                                                    'value' => $prontuario->get_mrp_reacoes_protecao_postura_sentada(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $mrp_reacoes_protecao_postura_sentada ); ?>
                                    </td>
                                    <td width="33.333333333%">
                                        <?php   $mrp_reacoes_protecao_bipede = array(
                                                    'name' => 'mrp_reacoes_protecao_bipede',
                                                    'id' => 'mrp_reacoes_protecao_bipede',
                                                    'value' => $prontuario->get_mrp_reacoes_protecao_bipede(),
                                                    'rows' => 3,
                                                    'class' => 'form-control'
                                                );
                                                echo form_textarea( $mrp_reacoes_protecao_bipede ); ?>
                                    </td>
                                </tr>
                            </table>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- mecanismo-reflexo-postural -->

                <section class="grupo-pront atividades-vida-diaria">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Atividades de Vida Diária</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Alimentação</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $atividades_vida_diaria_alimentacao = $prontuario->pegarOpcoesParaProntuario('atividades_vida_diaria_alimentacao');
                                                    echo pront_radio_input($atividades_vida_diaria_alimentacao, $prontuario->get_atividades_vida_diaria_alimentacao()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="atividades_vida_diaria_alimentacao_obs">Observações</label>

                                <div class="form-group">
                                    <?php   $atividades_vida_diaria_alimentacao_obs = array(
                                                'name' => 'atividades_vida_diaria_alimentacao_obs',
                                                'id' => 'atividades_vida_diaria_alimentacao_obs',
                                                'value' => $prontuario->get_atividades_vida_diaria_alimentacao_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                            echo form_textarea( $atividades_vida_diaria_alimentacao_obs ); ?>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Higiene</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $atividades_vida_diaria_higiene = $prontuario->pegarOpcoesParaProntuario('atividades_vida_diaria_higiene');
                                                    echo pront_radio_input($atividades_vida_diaria_higiene, $prontuario->get_atividades_vida_diaria_higiene()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="atividades_vida_diaria_higiene_obs">Observações</label>

                                <div class="form-group">
                                    <?php   $atividades_vida_diaria_higiene_obs = array(
                                                'name' => 'atividades_vida_diaria_higiene_obs',
                                                'id' => 'atividades_vida_diaria_higiene_obs',
                                                'value' => $prontuario->get_atividades_vida_diaria_higiene_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $atividades_vida_diaria_higiene_obs ); ?>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Vestuário</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $atividades_vida_diaria_vestuario = $prontuario->pegarOpcoesParaProntuario('atividades_vida_diaria_vestuario');
                                                    echo pront_radio_input($atividades_vida_diaria_vestuario, $prontuario->get_atividades_vida_diaria_vestuario()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="atividades_vida_diaria_vestuario_obs">Observações</label>

                                <div class="form-group">
                                    <?php   $atividades_vida_diaria_vestuario_obs = array(
                                                'name' => 'atividades_vida_diaria_vestuario_obs',
                                                'id' => 'atividades_vida_diaria_vestuario_obs',
                                                'value' => $prontuario->get_atividades_vida_diaria_vestuario_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                            echo form_textarea( $atividades_vida_diaria_vestuario_obs ); ?>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label>Locomoção</label>

                                <div class="form-group">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <?php   $atividades_vida_diaria_locomocao = $prontuario->pegarOpcoesParaProntuario('atividades_vida_diaria_locomocao');
                                                    echo pront_radio_input($atividades_vida_diaria_locomocao, $prontuario->get_atividades_vida_diaria_locomocao()); ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- form-group -->

                            <div class="form-group">
                                <label for="atividades_vida_diaria_locomocao_obs">Observações</label>

                                <div class="form-group">
                                    <?php   $atividades_vida_diaria_locomocao_obs = array(
                                                'name' => 'atividades_vida_diaria_locomocao_obs',
                                                'id' => 'atividades_vida_diaria_locomocao_obs',
                                                'value' => $prontuario->get_atividades_vida_diaria_locomocao_obs(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                            echo form_textarea( $atividades_vida_diaria_locomocao_obs ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- atividades-vida-diaria -->

                <section class="grupo-pront sistema-respiratorio">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Sistema Respiratório</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="sistema_respiratorio">Descrição</label>

                                <div class="form-group">
                                    <?php   $sistema_respiratorio = array(
                                                'name' => 'sistema_respiratorio',
                                                'id' => 'sistema_respiratorio',
                                                'value' => $prontuario->get_sistema_respiratorio(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                            echo form_textarea( $sistema_respiratorio ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- sistema-respiratorio -->

                <section class="grupo-pront objetivos">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Objetivos</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="objetivos">Descrição</label>

                                <div class="form-group">
                                    <?php   $objetivos = array(
                                                'name' => 'objetivos',
                                                'id' => 'objetivos',
                                                'value' => $prontuario->get_objetivos(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                            echo form_textarea( $objetivos ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- sistema-respiratorio -->

                <section class="grupo-pront condutas">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Condutas</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="exampleInputPassword1">Descrição</label>
                                <div class="form-group">
                                    <?php $condutas = array(
                                                'name' => 'condutas',
                                                'id' => 'condutas',
                                                'value' => $prontuario->get_condutas(),
                                                'rows' => 3,
                                                'class' => 'form-control'
                                            );
                                            echo form_textarea( $condutas ); ?>
                                </div>
                            </div> <!-- form-group -->
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- condutas -->

                <section class="grupo-pront condutas">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Evolução do Período</h4>
                        </div> <!-- col-md-4 -->

                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="evolucao_periodo">Descrição</label>
                                
                                <div class="form-group">
                                    <?php   $evolucao_periodo = array(
                                                'name' => 'evolucao_periodo',
                                                'id' => 'evolucao_periodo',
                                                'value' => $prontuario->get_evolucao_periodo(),
                                                'rows' => 15,
                                                'class' => 'form-control'
                                            );
                                        
                                            echo form_textarea( $evolucao_periodo ); ?>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- condutas -->

            </form> <!-- end form -->

        </div> <!-- container -->
    </section> <!-- prontuario-conteudo -->

</div>

<?php $this->load->view('fixos/rodape'); ?>