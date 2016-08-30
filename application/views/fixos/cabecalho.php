<?php 
$nome_uri = $this->uri->segment(1);
function trocaActive($nome_uri,$pagina)
{
  if($nome_uri=='' and $pagina=='home')
    return 'active';
  if($nome_uri==$pagina)
    return 'active';
}
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url(); ?>front/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>front/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>front/css/base.css" rel="stylesheet" type="text/css">
    <title>Salus</title>
  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top" style="background:none;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Salus</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php echo trocaActive($nome_uri,'');?>">
              <a href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="<?php echo trocaActive($nome_uri,'candidatos');?>">
              <a href="<?php echo base_url();?>candidatos">Candidatos</a>
            </li>
            <li class="<?php echo trocaActive($nome_uri,'pacientes');?>">
              <a href="<?php echo base_url();?>pacientes">Pacientes</a>
            </li>
            <li class="<?php echo trocaActive($nome_uri,'estagiarios');?>">
              <a href="<?php echo base_url();?>estagiarios">Estagiários</a>
            </li>
            <?php if($this->session->userdata('tipo_usuario')==4 or $this->session->userdata('tipo_usuario')==3){?>
            <li class="<?php echo trocaActive($nome_uri,'admin');?>">
              <a href="<?php echo base_url();?>admin">Adm</a>
            </li>
            <?php }?>
            <li class="<?php echo trocaActive($nome_uri,'login');?>">
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