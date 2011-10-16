<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo $title_for_layout ?></title>
    <?php
    // echo $this->Html->css('cake.generic');
    // echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'nav', 'imgareaselect-animated', 'main'));
    // echo $this->Html->css(array('reset', 'text', 'grid', 'layout', 'nav', 'jquery.Jcrop', 'demos.css'));
    ?>
    <?php echo $this->Html->css('curso_tb') ?>
  </head>
  <body>
    <div>
      <?php echo $this->element('topo', array(
        'titulo' => 'Seja solidário, seja voluntário',
        'cache' => '+5 hours'
        ))
      ?>
      <?php echo $content_for_layout ?> <!-- // views: add / index / edit / view -->
      <?php echo $this->element('rodape', array(
        'cache' => '+5 hours'
        ))
      ?>
    </div>
  </body>
</html>

