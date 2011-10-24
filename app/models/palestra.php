<?php
class Palestra extends AppModel {
  public $name = 'Palestra';
  public $useTable = 'palestras';

  public $belongsTo = array('Palestrante');

  public $cacheQueries = true;
  // public $order = array('nome' => 'DESC');
  var $displayField = 'nome';

  var $validate = array(
    'nome' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Informe o nome da Palestra',
      ),
    ),
    'descricao' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Informe a descrição da Palestra',
      ),
    ),
    'inicio' => array(
        'rule' => array('custom', '/^([0-1][0-9]|[2][0-3])(:([0-5][0-9])){1,2}$/'),
        'message' => 'Informe a hora no formato HH:MM'
    ),
    'termino' => array(
        'rule' => array('custom', '/^([0-1][0-9]|[2][0-3])(:([0-5][0-9])){1,2}$/'),
        'message' => 'Informe a hora no formato HH:MM'
    ),
  );
}
