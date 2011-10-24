<div class="lateral">

  <h3 id="center">Links Interessantes:</h3>

  <?php echo $this->Html->link('Blog do Grupo Ipê Amarelo', 'http://gipeamarelo.blogspot.com/', array('target'=>'_blank')); ?>
  <!-- <a href="http://gipeamarelo.blogspot.com/" target='_blank'>Conheça o Blog do Grupo Ipê Amarelo </a> -->
  <br /><br />

  <?php echo $this->Html->link('Saiba mais sobre o Seminário',
    array(
     'controller' => 'pages',
     'action' => 'home')); ?>
  <!-- <a href="home">Saiba mais sobre o Seminário</a> -->
  <br /><br />

  <?php echo $this->Html->link('Palestrantes',
    array('controller' => 'palestrantes', 'action' => 'index'));?>
  <br /><br />

  <?php echo $this->Html->link('Palestras',
    array('controller' => 'palestras', 'action' => 'index'));?>
  <br /><br />

  <?php echo $this->Html->link('Veja como chegar ao Seminário',
    array(
     'controller' => 'pages',
     'action' => 'como-chegar')); ?>
  <!-- <a href="como-chegar">Veja como chegar ao Seminário</a> --> <!--  target='_blank' -->
  <br /><br />

  <div class="imagem_l">
      <?php echo $html->image('2011_07_09.jpg', array('WIDTH' => '300px', 'title' => "Crianças do Ipê Amarelo - Ipê Amarelo"));?>
  </div>
</div>

<div class="campos">
<h3 id="center">Obrigado</h3>

  <div class="imagem_r">
    <?php echo $html->image('Ave.jpg', array('WIDTH' => '180px', 'title' => "Solidariedade - autor desconhecido"));?>
  </div>
  <div class="imagem_l">
    <?php echo $html->image('o-matic09.jpg', array('WIDTH' => '180px', 'title' => "Caminhar - Maria Clara Costa"));?>
  </div>
<br /><br />
<br />
<p id="center">
  Obrigado por sua inscrição

<pre id="texto">
<br /><br /><br /><br />
  Em nosso caminhar sempre haverá mais flores enquanto a solidariedade for nossa companheira.
  Divulgue essa ideia...
</pre>
</div>
