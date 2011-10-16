<?php
class Inscricao extends AppModel {
  public $name = 'Inscricao';
  public $useTable = 'inscricoes';

  public $cacheQueries = true;
  public $order = array('created' => 'DESC');
  var $displayField = 'nome';

  var $validate = array(
    'nome' => array(
      'notempty' => array(
        'rule' => array('notempty'),
                        'message' => 'Informe seu nome',

      ),
    ),
    // 'email' => 'email',
    'email' => array(
      'email' => array(
        'rule' => array('email'),
        'message' => 'Informe e-mail válido',
      )
    ),
    'telefone' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Informe seu Telefone',
      ),
    ),
    'endereco' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Informe seu Endereço',
      ),
    ),
    'cidade' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Informe sua Cidade',
      ),
    ),
    'estado' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Informe o estado onde mora',
      ),
    ),
    'cep' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        'message' => 'Informe o CEP de seu endereço',
      ),
    ),
  );
}

