<?php
  class PalestrasController extends AppController {
    public $name = 'Palestras';
    public $uses = array('Palestra');

  public function index(){
    // Busca as Palestras
    $palestras = $this->Palestra->find('all',
     array('order' => 'Palestra.dia, Palestra.inicio ASC'));
    // Manda para a View /views/Palestras/index.ctp
    $this->set('palestras', $palestras);
  }

  public function view($id) {
    $this->Palestra->id = $id;
    $dados = $this->Palestra->read();
    $this->set('palestra', $dados);
  }
}
