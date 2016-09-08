<?php $this->load->view('fixos/cabecalho'); ?>

<div class="bateria estilo-padrao">

    <section class="padrao-topo">

        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('baterias/index'); ?>">Baterias</a></li>
                        <li class="active text-capitalize">
                            <a href="<?php echo base_url('baterias/consultar/' . $bateria->getId_bateria() ); ?>"><?php echo $bateria->getNome_bateria(); ?></a>
                        </li>
                        <li class="active">
                            Editar Bateria
                        </li>
                    </ol>
                </div> <!-- cold-md-9 -->

                <div class="col-md-3" id="bateria">
                    <div class="btn-group" role="group">
                        <button class="btn btn-style06" id="salvarBateria">Salvar</button>
                        <a class="btn btn-style06" href="<?php echo base_url('baterias/consultar/' . $bateria->getId_bateria() ); ?>">Voltar</a>
                    </div>
                </div> <!-- cold-md-3 -->

            </div> <!-- row -->
        </div> <!-- container -->
        
    </section> <!-- padrao-topo -->

    <section class="padrao-conteudo">
        <div class="container">

            <?php if( isset($mensagem) && $mensagem == 'sucesso' ): ?>
                <div class="alert alert-success alert-dismissible" role="alert" style="color: #3c763d; margin-top: 30px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sucesso!</strong> Bateria editada com sucesso.
                </div>
            <?php elseif( isset($mensagem) && $mensagem == 'erro' ): ?>
                <div class="alert alert-danger alert-dismissible" role="alert" style="color: #a94442; margin-top: 30px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Erro!</strong> Não foi possivel atualizar a bateria.
                </div>
            <?php endif; ?>

            <?php  echo form_open('baterias/editar_form',
                    array( 'id' => 'baterias_form', 'name' => 'baterias_form' ),
                    array( 'editar_id_bateria' => $bateria->getId_bateria() ) ); ?>

                <section class="grupo-pront bateria-ver">

                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="title">Detalhes da Bateria</h4>
                        </div>

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Nome da Bateria:</label>
                                <input type="text" name="editar_nome_bateria" class="form-control" value="<?php echo $bateria->getNome_bateria(); ?>">
                            </div>

                            <div class="form-group">
                                <label>Data Início</label>
                                <input type="text" name="editar_data_inicio" class="form-control" value="<?php echo $bateria->getData_inicio(); ?>">
                            </div>

                            <div class="form-group">
                                <label>Data Fim</label>
                                <input type="text" name="editar_data_fim" class="form-control" value="<?php echo $bateria->getData_fim(); ?>">
                            </div>

                            <div class="form-group">
                                <label>Semestre</label>
                                <input type="text" name="editar_semestre" class="form-control" value="<?php echo $bateria->getSemestre(); ?>">
                            </div>

                            <div class="form-group">
                                <label>Ano</label>
                                <input type="text" name="editar_ano" class="form-control" value="<?php echo $bateria->getAno(); ?>">
                            </div>

                        </div>
                    </div> <!-- row -->

                </section> <!--bateria-ver -->

        </div> <!-- container -->
    </section> <!-- padrao-conteudo -->

</div> <!-- bateria -->
<?php $this->load->view('fixos/rodape'); ?>