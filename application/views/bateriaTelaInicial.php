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
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3">
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-default" href="<?php echo base_url('baterias/criar'); ?>">Nova Bateria</a>
                    </div>
                </div> <!-- cold-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- prontuario-topo -->
    <div class="section">
        <div class="container">
                <table class="table table-condensed" id="tabela_baterias">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Data Início</th>
                        <th>Data Fim</th>
                        <th>Semestre</th>
                        <th>Ano</th>
                        <th>Ações</th>
                    </tr>
                    
                    <?php if(!empty($baterias)): ?>

                        <?php foreach($baterias as $bateria): ?>
                                    
                            <tr>
                                <td width="50" align="center">
                                    <?php echo $bateria->getId_bateria(); ?></td>
                                <td width="150" align="center">
                                    <?php echo $bateria->getNome_bateria();?></td>
                                <td width="100" align="center">
                                    <?php echo $bateria->getData_inicio();?></td>
                                <td width="100" align="center">
                                    <?php echo $bateria->getData_fim();?></td>
                                <td width="100" align="center">
                                    <?php echo $bateria->getSemestre();?></td>
                                <td width="100" align="center">
                                    <?php echo $bateria->getAno();?></td>
                                <td>
                                    <?php echo anchor(base_url('baterias/consultar').'/'.$bateria->getId_bateria(), 'Ver', 'class="btn btn-default"');?>
                                    <button type="button" 
                                            class="btn btn-default" 
                                            data-cancelar="#cancelar_bateria_<?php echo $bateria->getId_bateria(); ?>" 
                                            data-container="#tabela_baterias" 
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
                                </td>
                            </tr>

                        <?php endforeach ?>
                    <?php else: ?>

                        <h3>Não há baterias cadastradas.</h3>

                    <?php endif; ?>

                    <?php
                        if(isset($editado)) {
                            if($editado == 1) {
                                echo "<script type='text/javascript'>alert('Bateria atualizada com sucesso!');</script>";
                            }
                            if($editado == 0)
                                echo "<script type='text/javascript'>alert('Erro na atualização da bateria. Contate o administrador do sistema.');</script>";
                       }
                    ?>
                </table>
        </div>
    </div>
<?php $this->load->view('fixos/rodape'); ?>