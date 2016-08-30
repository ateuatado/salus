<?php
    $this->load->view('fixos/cabecalho');
    $this->load->helper('form');
?>
    <div class="section">
        <div class="container">
            <legend align="center"><h2>Baterias</h2></legend>

                <?php echo anchor(base_url('baterias/criar'), 'Adicionar Bateria', 'class="btn btn-default"');?>

                <br />
                <br />
                <i class="fa fa-search" aria-hidden="true"></i>
                <form name="search" action="<?php echo base_url('my_class/my_method/'); ?>" method="get" id="search-form" >
                    <input type="text" name="search" >
                </form>
                            
                <table class="table table-condensed">
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
                                    <?php echo anchor(base_url('baterias/editar').'/'.$bateria->getId_bateria(), 'Editar Bateria', 'class="btn btn-default"');?>
                                    <?php echo anchor(base_url('baterias/deletar').'/'.$bateria->getId_bateria(), 'Excluir Bateria', 'class="btn btn-danger"');?>
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
<?php
    $this->load->view('fixos/rodape');
?>