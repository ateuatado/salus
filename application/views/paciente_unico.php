<?php $this->load->view('fixos/cabecalho'); ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2>Paciente: <?php echo $paciente->get_nome_completo(); ?></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="well">
                                <h3 class="no-margin">Consultas</h3>
                                <p>Nenhuma</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="well">
                                <h3>Prontuários</h3>
                                <table class="table table-striped">
                                    <tr>
                                        <td width="70%">Por</td>
                                        <td width="30%">Ações</td>
                                    </tr>
                                    <?php foreach($prontuarios as $prontuario): ?>
                                         <tr>
                                            <td>
                                                <?php echo $prontuario->get_usuario()->get_nome_usuario(); ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-default" href="<?php base_url(); ?>/prontuarios/consultar/<?php echo $prontuario->get_id_prontuario(); ?>">Ver</a>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('fixos/rodape'); ?>
