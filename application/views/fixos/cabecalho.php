<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url(); ?>front/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>front/js/bootstrap.js"></script>
    <link href="<?php echo base_url(); ?>front/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>front/css/bootstrap.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Neuro</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
            <li>
              <a href="#">Contacts</a>
            </li>
            <li>
            <?php if($this->session->userdata('id_usuario')) { ?>
              <a href="<?php echo base_url();?>login/sair">Sair</a>
              <?php }else{ ?>
              <a href="<?php echo base_url();?>login">Login</a>
              <?php }?>
            </li>
          </ul>
        </div>
      </div>
    </div>