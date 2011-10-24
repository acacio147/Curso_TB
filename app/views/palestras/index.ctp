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
<h3>Palestras</h3>
<table cellpadding="0" cellspacing="0">
<thead>
  <tr>
    <th>#</th>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Palestrante</th>
    <th>Dia</th>
    <th>Início</th></th>
  </tr>
</thead>
<tbody>
<?php foreach ($palestras as $palestra): ?>
  <tr>
    <td><?php echo $palestra['Palestra']['id']; ?></td>
    <td>
      <?php echo $this->Html->link($palestra['Palestra']['nome'],
          array('controller' => 'palestras', 'action' => 'view', $palestra['Palestra']['id']));?>
    </td>
    <td><?php echo $palestra['Palestra']['descricao'];?></td>
    <td>
      <?php echo $this->Html->link($palestra['Palestrante']['nome'],
          array('controller' => 'palestrantes', 'action' => 'view', $palestra['Palestrante']['id']));?>
    </td>
    <td><?php echo $palestra['Palestra']['dia'];?></td>
    <td><?php echo $palestra['Palestra']['inicio'];?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<!--
$palestra = array(
  "Palestra" => array(
    "id" => "1",
    "nome" => "Você pode fazer a diferença",
    "descricao" => "Voluntário sempre faz a diferença em qualquer projeto, saiba como ser mais um que faz essa diferença",
    "dia" => "2011-11-19",
    "inicio" => "20:00",
    "termino" => "20:55",
    "palestrante_id" => "1",
    "created" => "2011-10-21 17:53:48",
    "updated" => "2011-10-21 17:53:48"),
  "Palestrante" => array(
    "id" => "1",
    "nome" => "Acacio Couto Costa",
    "descricao" => "Voluntário no Ipê Amarelo desde a fundação",
    "site" => "www.acacio-costa.com.br/cake",
    "created" => "2011-10-21 17:53:48",
    "updated" => "2011-10-21 17:53:48")
)

-->









