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

  <?php echo $this->Html->link('Faça sua Inscrição',
    array(
     'controller' => 'inscricoes',
     'action' => 'inscrever')); ?>
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

<div class="campos_l">
<h3>Palestra</h3>
<table cellpadding="0" cellspacing="0">
<thead>
</thead>
<tbody>
  <tr>
    <td>Id</td>
    <td><?php echo $palestra['Palestra']['id']; ?></td>
  </tr>
  <tr>
    <td>Nome</td>
    <td><?php echo $palestra['Palestra']['nome'];?></td>
  </tr>
  <tr>
    <td>Descrição</td>
    <td><?php echo $palestra['Palestra']['descricao'];?></td>
  </tr>
  <tr>
    <td>Palestrante</td>
    <td>
      <?php echo $this->Html->link($palestra['Palestrante']['nome'],
          array('controller' => 'palestrantes', 'action' => 'view', $palestra['Palestrante']['id']));?>
    </td>
  </tr>
  <tr>
    <td>Dia</td>
    <td><?php echo $palestra['Palestra']['dia'];?></td>
  </tr>
  <tr>
    <td>Horário</td>
    <td><?php echo 'de '.$palestra['Palestra']['inicio'].' às '.$palestra['Palestra']['termino'];?></td>
  </tr>
</tbody>
</table>
</div>
