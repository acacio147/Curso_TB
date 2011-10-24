<?php
class Palestrante extends AppModel {
  public $name = 'Palestrante';
  public $useTable = 'palestrantes';

  public $hasMany = array('Palestra');

  public $cacheQueries = true;
  public $order = array('nome' => 'ASC');
  var $displayField = 'nome';

  var $validate = array(
    'nome' => array(
      'rule' => array('custom', '/[a-zA-Z]{10,}$/'),
      'message' => 'Apenas letras, no mínimo 10 caracteres'
    ),
    'descricao' => array(
      'rule' => array('minLength', '10'),
      'message' => 'Descrição da palestra deve possuir no mínimo 10 caracteres.'
    ),
  );
}
