<?php $this->load->view('fixos/cabecalho'); ?>
<div class="paciente">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">

                <?php if( isset($mensagem) && $mensagem == 'sucesso' ): ?>
                    <div class="alert alert-success alert-dismissible" role="alert" style="color: #3c763d; margin-top: 30px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Sucesso!</strong> Prontuario removido com sucesso.
                    </div>
                <?php elseif( isset($mensagem) && $mensagem == 'erro' ): ?>
                    <div class="alert alert-danger alert-dismissible" role="alert" style="color: #a94442; margin-top: 30px;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Erro!</strong> Não foi possivel remover o prontuario.
                    </div>
                <?php endif; ?>

                <h2>Paciente: <?php echo $paciente->get_nome_completo(); ?></h2>
                
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="well">
                            <h3 class="no-margin">Consultas</h3>
                            <p>Nenhuma</p>
                        </div>
                    </div> <!-- col-md-6 -->
                    
                    <div class="col-md-6" id="coluna-prontuarios">
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
                                            <button type="button" class="btn btn-default" data-cancelar="#cancelar_prontuario_<?php echo $prontuario->get_id_prontuario(); ?>" data-container="#coluna-prontuarios" data-toggle="popover" data-placement="bottom" data-html="true" data-content='
                    
                                                Você realmente deseja remover esse prontuario? </br></br> 
                                                <button class="btn btn-default pull-left" id="cancelar_prontuario_<?php echo $prontuario->get_id_prontuario(); ?>">Cancelar</button> 
                                                <a class="btn btn-danger pull-right" href="<?php echo base_url('prontuarios/remover/' . $prontuario->get_id_prontuario() . '/' . $prontuario->get_paciente()->get_id_paciente() ); ?>">Remover</a>   
                                                </br></br>

                                            '>Remover</button>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div> <!-- col-md-6 -->

                </div> <!-- row -->

            </div> <!-- col-md-12 -->

        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- paciente -->
<?php $this->load->view('fixos/rodape'); ?>
