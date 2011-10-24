<?php
class Inscricao extends AppModel {
  public $name = 'Inscricao';
  public $useTable = 'inscricoes';

  public $cacheQueries = true;
  public $order = array('created' => 'DESC');
  var $displayField = 'nome';

  var $validate = array(
    'nome' => array(
      'rule' => array('custom', '/^[a-zA-Z][a-zA-Z][a-zA-Z]* [a-zA-Z ]*$/'),
      'message' => 'Não utilize acentos.',
    ),
    //
    'email' => array( // Duas regras
      array(
        'rule' => 'email', // 'TEmail',
        'message' => 'Informe um e-mail válido'
        ),
      array(
        'rule' => 'isUnique',
        'message' => 'e-mail já cadastrado, tente outro'
        ),
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
      'rule' => array('custom', '/^[0-9]{8}$/'), // /^[0-9]{2}.[0-9]{3}-[0-9]{3}$/ 99.999-999
      'message' => 'Informe um CEP no formato 99999999',
    ),
    /*
    'notempty' => array(
      'rule' => array('notempty'),
      'message' => 'Informe o CEP de seu endereço',
    ),
    */
  );

  public function TEmail($data) {
    $emailT = array_shift($data);
    // Padrão e-mail
    $pattern = '/^([0-9a-zA-Z]+([_.-]?[0-9a-zA-Z]+)*@[0-9a-zA-Z]+[0-9,a-z,A-Z,.,-]*(.){1}[a-zA-Z]{2,4})+$/';
    return preg_match($pattern, $emailT);
  }

}


