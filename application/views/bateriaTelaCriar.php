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
                        <li class="active">Nova Bateria</li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3">
                    <div class="btn-group" role="group" aria-label="...">
                        <input type="submit" class="btn btn-default" value="Criar" href="<?php echo base_url('baterias/criar_page'); ?>"onClick="document.getElementById('criar').submit();">
                        <a class="btn btn-default" href="<?php echo base_url('baterias/index'); ?>">Voltar</a>
                    </div>
                </div> <!-- cold-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- prontuario-topo -->
    <div class="section">
        <div class="container" >
            <div class="row">
                <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <?php echo form_open('baterias/criar_page', 'id="criar"'); ?>

                                <label>Nome da Bateria:</label>
                                    <input type="text" name="criar_nome_bateria" class="form-control">
                                <label>Data Início:</label>
                                    <input type="text" name="criar_data_inicio" class="form-control">
                                <label>Data Fim:</label>
                                    <input type="text" name="criar_data_fim" class="form-control">
                                <label>Semestre:</label>
                                    <input type="text" name="criar_semestre" class="form-control">
                                <label>Ano:</label>
                                    <input type="text" name="criar_ano" class="form-control">

                            <?php echo form_close(); ?> 
                        </div>

                        <?php //remover 
                            if(isset($cadastrado)) {
                                if($cadastrado == 1)
                                    echo "<script type='text/javascript'>alert('Bateria cadastrada com sucesso!');</script>";
                                if($cadastrado == 0)
                                    echo "<script type='text/javascript'>alert('Erro no cadastro da Bateria!');</script>";
                            }
                        ?>
                        
                        
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('fixos/rodape'); ?>