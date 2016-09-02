<?php $this->load->view('fixos/cabecalho'); ?>

<div class="prontuario">

    <section class="prontuario-topo">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url('pacientes/consultar'); ?>">Pacientes</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('pacientes/consultar/' . $prontuario->get_paciente()->get_id_paciente() ); ?>" class="text-capitalize">
                                <?php echo $prontuario->get_paciente()->get_nome_completo(); ?>
                            </a>
                        </li>
                        <li class="active">
                            Prontuario
                        </li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3" id="opcoes_prontuario">
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-default" href="<?php echo base_url('prontuarios/editar/' . $prontuario->get_id_prontuario() ); ?>">Editar</a>

                        <button type="button" class="btn btn-default" data-cancelar="#cancelar_prontuario_<?php echo $prontuario->get_id_prontuario(); ?>" data-container="#opcoes_prontuario" data-toggle="popover" data-placement="bottom" data-html="true" data-content='
                    
                            Você realmente deseja remover esse prontuario? </br></br> 
                            <button class="btn btn-default pull-left" id="cancelar_prontuario_<?php echo $prontuario->get_id_prontuario(); ?>">Cancelar</button> 
                            <a class="btn btn-danger pull-right" href="<?php echo base_url('prontuarios/remover/' . $prontuario->get_id_prontuario() . '/' . $prontuario->get_paciente()->get_id_paciente() ); ?>">Remover</a>   
                            </br></br>

                        '>Remover</button>
                        
                        <a class="btn btn-default" href="<?php echo base_url('pacientes/consultar/' . $prontuario->get_paciente()->get_id_paciente() ); ?>">Voltar</a>
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

                <section class="grupo-pront adm">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Avaliação do Desenvolvimento Motor</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Visão</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php  echo $prontuario->pegarOpcaoUnica( $prontuario->get_adm_visao() ); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Audição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_adm_audicao() ); ?>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label>Linguagem</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_adm_linguagem() ); ?>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label>Cognitivo</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_adm_cognitivo() ); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Reflexos Primitivos</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_adm_reflexos_prim() ); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div>
                        
                    </div>

                </section> <!-- adm -->

                <section class="grupo-pront supino">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Supino</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Simetria</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_supino_simetria() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Alinhamento</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_supino_alinhamento() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Movimentação Ativa</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_supino_movimentacao_ativa() ); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="supino_obs">Observação</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_supino_obs(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div>
                        
                    </div>

                </section> <!-- supino -->

                <section class="grupo-pront prono">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Prono</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Controle Cervical</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_prono_controle_cervical() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Controle Escapular</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_prono_controle_escapular() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Simetria</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_prono_simetria() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Alinhamento</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_prono_alinhamento() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Movimentação Ativa</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_prono_movimentacao_ativa() ); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="prono_obs">Observação</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_prono_obs(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row --> 

                </section> <!-- prono -->

                <section class="grupo-pront rolar">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Rolar</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="prono_obs">Opções</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_rolar() ); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- rolar -->

                <section class="grupo-pront sentado">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Sentado</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Controle Cervical</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_sentado_controle_cervical() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Controle de Tronco</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_sentado_controle_tronco() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Simetria</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_sentando_simetria() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Alinhamento</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_sentado_alinhamento() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Movimentação Ativa</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_sentado_movimentacao_ativa() ); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="sentado_obs">Observação</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                         <?php echo $prontuario->get_sentado_obs(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row --> 

                </section> <!-- sentado -->

                <section class="grupo-pront troca-postural-supino-sentado">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Troca Postural de Supino para Sentado</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Postura de Quadril</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_sentado_postura_quadril() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deformidade da Coluna</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_sentado_deformidade_coluna() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deformidade de Quadril</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_sentado_deformidade_quadril() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Observação</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_sentado_troca_postural(); ?>
                                    </div>
                                </div>
                            </div>
                            
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- troca-postural-supino-sentado -->

                <section class="grupo-pront engatinhar">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Engatinhar</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_engatinhar() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="engatinhar_obs">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_engatinhar_obs(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- engatinhar -->

                <section class="grupo-pront arrastar">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Arrastar</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_arrastar() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="arrastar_obs">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_arrastar_obs(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- arrastar -->

                <section class="grupo-pront ortostatismo">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Ortostatismo</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_ortostatismo() ); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- ortostatismo -->

                <section class="grupo-pront marcha">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Marcha</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Opções</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_marcha() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="marcha_obs">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_marcha_obs(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- marcha -->

                <section class="grupo-pront observações'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Observações</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="observacao">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_observacao(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- engatinhar -->

                <section class="grupo-pront tonus-base">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Tônus de Base</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Hipertonia Elástica (grupos musculares)</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_tonus_base_hipertonia_elastica() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tonus_base_hipertonia_elastica_sinais_clinicos">Sinais Clinicos</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_tonus_base_hipertonia_elastica_sinais_clinicos(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tonus_base_asworth">Asworth</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_tonus_base_asworth(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Hipertonia Plástica</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                         <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_tonus_base_hipertonia_plastica() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tonus_base_hipertonia_plastica_sinais_clinicos">Sinais Clinicos</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_tonus_base_hipertonia_plastica_sinais_clinicos(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Discinesias</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_tonus_base_discinesias() ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Hipotonia</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_tonus_base_hipotonia() ); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Incoordenação de movimentos</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_tonus_base_incordenacao_movimentos() ); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- tonus-base -->

                <section class="grupo-pront tonus-dinamico'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Tônus Dinâmico</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="tonus_dinamico">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_tonus_dinamico(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- tonus-dinamico -->

                <section class="grupo-pront encurtamento-musculares-deformidades'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Encurtamentos Musculares e Deformidades</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="encurtamento_musculares_deformidades">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_encurtamento_musculares_deformidades(); ?>  
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- encurtamento-musculares-deformidades -->

                <section class="grupo-pront forca-muscular'">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Força Muscular</h4>
                        </div>
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
                                        <?php echo $prontuario->get_forca_muscular_mms_gm();  ?>
                                    </td>
                                    <td>
                                        <?php echo $prontuario->get_forca_muscular_mms_d(); ?>
                                    </td>
                                    <td>
                                        <?php echo $prontuario->get_forca_muscular_mms_e(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="25%" style="text-align:center; vertical-align: middle;">MMII</td>
                                    <td>
                                        <?php echo $prontuario->get_forca_muscular_mmii_gm(); ?>
                                    </td>
                                    <td>
                                        <?php echo $prontuario->get_forca_muscular_mmii_d(); ?>
                                    </td>
                                    <td>
                                        <?php echo $prontuario->get_forca_muscular_mmii_e(); ?>
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
                        </div>
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
                                        <?php echo $prontuario->get_mrp_reacoes_endireitamento_postura_sentada(); ?>
                                    </td>
                                    <td width="33.333333333%">
                                        <?php echo $prontuario->get_mrp_reacoes_endireitamento_bipede(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33.333333333%" style="text-align:center; vertical-align: middle;">Reações de Equilibrio (A, I, C)</td>
                                    <td width="33.333333333%">
                                        <?php echo $prontuario->get_mrp_reacoes_equilibrio_postura_sentada(); ?>
                                    </td>
                                    <td width="33.333333333%">
                                        <?php echo $prontuario->get_mrp_reacoes_equilibrio_bipede(); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="33.333333333%" style="text-align:center; vertical-align: middle;">Reações de Proteção (A, P)</td>
                                    <td width="33.333333333%">
                                        <?php echo $prontuario->get_mrp_reacoes_protecao_postura_sentada(); ?>
                                    </td>
                                    <td width="33.333333333%">
                                        <?php echo $prontuario->get_mrp_reacoes_protecao_bipede(); ?>
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
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Alimentação</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica(  $prontuario->get_atividades_vida_diaria_alimentacao() ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="atividades_vida_diaria_alimentacao_obs">Observações</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_atividades_vida_diaria_alimentacao_obs(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Higiene</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_atividades_vida_diaria_higiene() ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="atividades_vida_diaria_higiene_obs">Observações</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_atividades_vida_diaria_higiene_obs(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Vestuário</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_atividades_vida_diaria_vestuario() ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="atividades_vida_diaria_vestuario_obs">Observações</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_atividades_vida_diaria_vestuario_obs(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Locomoção</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->pegarOpcaoUnica( $prontuario->get_atividades_vida_diaria_locomocao() ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="atividades_vida_diaria_locomocao_obs">Observações</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_atividades_vida_diaria_locomocao_obs(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- atividades-vida-diaria -->

                <section class="grupo-pront sistema-respiratorio">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Sistema Respiratório</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="sistema_respiratorio">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_sistema_respiratorio(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- sistema-respiratorio -->

                <section class="grupo-pront objetivos">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Objetivos</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="objetivos">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_objetivos(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- sistema-respiratorio -->

                <section class="grupo-pront condutas">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Condutas</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="exampleInputPassword1">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_condutas(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- condutas -->

                <section class="grupo-pront condutas">

                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="title">Evolução do Período</h4>
                        </div>
                        <div class="col-md-8">

                            <div class="form-group">
                                <label for="evolucao_periodo">Descrição</label>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <?php echo $prontuario->get_evolucao_periodo(); ?>
                                    </div>
                                </div>
                            </div>
                                
                        </div> <!-- col-md-8 -->
                        
                    </div> <!-- row -->

                </section> <!-- condutas -->

        </div> <!-- container -->
    </section> <!-- prontuario-conteudo -->

</div> <!-- prontuario -->

<?php $this->load->view('fixos/rodape'); ?>