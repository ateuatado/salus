<?php
  $this->load->view('fixos/cabecalho');
  $this->load->helper('form');
?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="well" id="login">
              <div class="row">
                <div class="col-md-12">
                  Entre con email e senha.
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
              <?php
              echo form_open(base_url().'login/valida');
              echo form_label('Email: ');
              echo form_input(array('name'=>'email')).'<br>';
              echo form_label('Senha: ');
              echo form_password(array('name'=>'senha')).'<br>';
              echo form_submit('btn_submit', 'Autenticar','class="btn btn-default"');
              echo form_close();
              ?>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <?php
                  if(isset($msg))
                  {
                    echo $msg;
                  }
                ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <pre>
      <?php
      if(isset($usuarios))
      {
        print_r($usuarios);
      }
      print_r($this->session->userdata('id_usuario'));
      ?>
    </pre>
<?php
  $this->load->view('fixos/rodape');
?>