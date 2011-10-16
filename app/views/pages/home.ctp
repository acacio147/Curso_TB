<div class="lateral">
  <h3 id="center">Links Interessantes:</h3>

  <?php echo $this->Html->link('Blog do Grupo Ipê Amarelo', 'http://gipeamarelo.blogspot.com/', array('target'=>'_blank')); ?>
  <!-- <a href="http://gipeamarelo.blogspot.com/" target='_blank'>Conheça o Blog do Grupo Ipê Amarelo </a> -->
  <br /><br /><br />

  <?php echo $this->Html->link('Faça sua Inscrição',
    array(
     'controller' => 'inscricoes',
     'action' => 'inscrever')); ?>
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

<div class="campos">
<h3 id="center">Seminário:</h3>
  <div class="imagem_r">
    <?php echo $html->image('joao20de20barro.jpg', array('WIDTH' => '200px', 'title' => "Solidariedade - autor desconhecido"));?>
  </div>
<br /><br />
<br />
<p id="center">
  Voluntário, aquele que faz a diferença.</pre>

<pre id="texto">
  Será promovido um Seminário no Grupo Ipê Amarelo sobre um tema que muito se fala mas pouco se faz.
  Alguns palestrantes já confirmaram presença.
  Você já pode fazer sua inscrição - Veja link ao lado. !!!
  Informações e mais detalhadas em breve.
</pre>
</div>
