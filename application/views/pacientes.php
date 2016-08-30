<?php
  $this->load->view('fixos/cabecalho');
?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="well">
              <h2>Pacientes</h2>

              <?php foreach($pacientes as $paciente): ?>

                  <a href="<?php base_url(); ?>/pacientes/consultar/<?php echo $paciente->get_id_paciente(); ?>"><?php echo $paciente->get_nome_completo(); ?></a>

              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  $this->load->view('fixos/rodape');
?>