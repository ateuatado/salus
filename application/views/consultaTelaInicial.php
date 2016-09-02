<?php
  $this->load->view('fixos/cabecalho');
  $this->load->helper('form');
?>
    <section class="prontuario-topo">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('consultas/index'); ?>">Consultas</a></li>
                    </ol>
                </div> <!-- cold-md-9 -->
                <div class="col-md-3">
                    <div class="btn-group" role="group" aria-label="...">
                        <a class="btn btn-default" href="<?php echo base_url('consultas/criar'); ?>">Criar</a>
                    </div>
                </div> <!-- cold-md-3 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section> <!-- prontuario-topo -->
    <div class="section">
        <div class="container">
            <legend align="center"><h2>Consultas</h2></legend>

                <?php echo anchor(base_url('consultas/criar'), '+', 'class="btn btn-primary"');?>
                
                <br />
                <br />
                
                <table class="table table-condensed">
                    <tr>
                        <th>Id</th>
                        <th>Paciente</th>
                        <th>Usuário</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>C. Paciente</th>
                        <th>C. Estagiário</th>
                        <th>Obs. Paciente</th>
                        <th>Obs. Estagiário</th>
                        <th>Ações</th>
                    </tr>
                
                    <?php foreach($consultas as $consulta): ?>
                        <tr>
                            <td><?php echo $consulta->getId_consulta();?></td>
                            <td><?php echo $consulta->getId_paciente(); ?></td>
                            <td><?php echo $consulta->getId_usuario(); ?></td>
                            <td><?php echo $consulta->getData(); ?></td>
                            <td><?php echo $consulta->getHora(); ?></td>
                            <td><?php echo $consulta->getComparecimento_paciente(); ?></td>
                            <td><?php echo $consulta->getComparecimento_estagiario(); ?></td>
                            <td><?php echo $consulta->getObservacao_paciente(); ?></td>
                            <td><?php echo $consulta->getObservacao_estagiario(); ?></td>                        
                        </tr>
                    <?php endforeach; ?>
                </table>
        </div>
    </div>