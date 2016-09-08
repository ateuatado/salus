<?php $this->load->view('fixos/cabecalho'); ?>

<div class="bateria estilo-padrao">

    <section class="padrao-topo">

        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('baterias/index'); ?>">Baterias</a></li>
                        <li class="active">
                            Cadastrar Bateria
                        </li>
                    </ol>
                </div> <!-- cold-md-9 -->

                <div class="col-md-3" id="bateria">
                    <div class="btn-group" role="group">
                        <button class="btn btn-style06" id="salvarBateria">Salvar</button>
                        <a class="btn btn-style06" href="<?php echo base_url('baterias/'); ?>">Voltar</a>
                    </div>
                </div> <!-- cold-md-3 -->

            </div> <!-- row -->
        </div> <!-- container -->
        
    </section> <!-- padrao-topo -->

    <section class="padrao-conteudo">
        <div class="container">

            <?php  echo form_open('baterias/cadastrar_form',
                    array( 'id' => 'baterias_form', 'name' => 'baterias_form' ) ); ?>

                <section class="grupo-pront bateria-ver">

                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="title">Detalhes da Bateria</h4>
                        </div>

                        <div class="col-md-8">

                            <div class="form-group">
                                <label>Nome da Bateria:</label>
                                <input type="text" name="criar_nome_bateria" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Data Início</label>
                                <input type="text" name="criar_data_inicio" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Data Fim</label>
                                <input type="text" name="criar_data_fim" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Semestre</label>
                                <input type="text" name="criar_semestre" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Ano</label>
                                <input type="text" name="criar_ano" class="form-control">
                            </div>

                        </div>
                    </div> <!-- row -->

                </section> <!--bateria-ver -->

        </div> <!-- container -->
    </section> <!-- padrao-conteudo -->

</div> <!-- bateria -->
<?php $this->load->view('fixos/rodape'); ?>