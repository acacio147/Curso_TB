<div class="lateral">

  <h3 id="center">Links Interessantes:</h3>

  <?php echo $this->Html->link('Blog do Grupo Ipê Amarelo', 'http://gipeamarelo.blogspot.com/', array('target'=>'_blank')); ?>
  <!-- <a href="http://gipeamarelo.blogspot.com/" target='_blank'>Conheça o Blog do Grupo Ipê Amarelo </a> -->
  <br /><br /><br />

  <?php echo $this->Html->link('Saiba mais sobre o Seminário',
    array(
     'controller' => 'pages',
     'action' => 'home')); ?>
  <!-- <a href="home">Saiba mais sobre o Seminário</a> -->
  <br /><br /><br />

  <?php echo $this->Html->link('Faça sua Inscrição',
    array(
     'controller' => 'inscricoes',
     'action' => 'inscrever')); ?>
  <br /><br /><br />

  <div class="imagem_l">
      <?php echo $html->image('2011_07_09.jpg', array('WIDTH' => '300px', 'title' => "Crianças do Ipê Amarelo - Ipê Amarelo"));?>
  </div>
</div>

<?php echo $this->element('mapa', array(
        'cache' => '+5 hours'
        ))
?>
