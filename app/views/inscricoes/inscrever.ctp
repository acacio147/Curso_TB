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

  <?php echo $this->Html->link('Veja como chegar ao Seminário',
    array(
     'controller' => 'pages',
     'action' => 'como-chegar')); ?>
  <!-- <a href="como-chegar">Veja como chegar ao Seminário</a> --> <!--  target='_blank' -->
  <br /><br /><br />
  <div class="imagem_l">
      <?php echo $html->image('2011_07_09.jpg', array('WIDTH' => '300px', 'title' => "Crianças do Ipê Amarelo - Ipê Amarelo"));?>
  </div>
</div>

<div class="campos_l">
<h3>Inscrições</h3>
<?php echo $this->Form->create('Inscricao', array('url' => array('controller' => 'inscricoes', 'action' => 'inscrever'))) ?>
  <?php echo $this->Form->input('nome') ?>
  <?php echo $this->Form->input('email') ?>
  <?php echo $this->Form->input('telefone') ?>
  <?php echo $this->Form->input('endereco') ?>
  <?php echo $this->Form->input('cidade') ?>
  <?php echo $this->Form->input('estado') ?>
  <?php echo $this->Form->input('cep') ?>
  <?php echo $this->Form->submit('Salvar') ?>
<?php echo $this->Form->end() ?>
</div>
