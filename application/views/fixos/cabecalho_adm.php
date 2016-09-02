<?php
$nome_uri = $this->uri->segment(2);
  function trocaActive2($nome_uri,$pagina)
  {
    if($nome_uri=='')
      return '';
    if($nome_uri==$pagina)
      return 'active';
  }
?>

<ul class="nav nav-pills">
    <li role="presentation" class="<?php echo trocaActive2($nome_uri,'usuarios')?>">
      <a href="<?php echo base_url();?>adm/usuarios">Usuários</a>
    </li>
    <li role="presentation" class="<?php echo trocaActive2($nome_uri,'configuracao')?>">
      <a href="<?php echo base_url();?>adm/configuracao">Configurações</a>
    </li>
    <li role="presentation" class="<?php echo trocaActive2($nome_uri,'tabelas')?>">
      <a href="<?php echo base_url();?>adm/tabelas">Tabelas</a>
    </li>
  </ul>
  <hr>