<?php
  class PalestrantesController extends AppController {
    public $name = 'Palestrantes';
    public $uses = array('Palestrante');

  public function index(){
    // Busca os Palestrantes
    $palestrantes = $this->Palestrante->find('all',
      array('order' => 'Palestrante.nome ASC'));
    // Manda para a View /views/palestrantes/index.ctp
    $this->set('palestrantes', $palestrantes);
  }

  public function view($id) {
    $this->Palestrante->id = $id;
    $dados = $this->Palestrante->read();
    $this->set('palestrante', $dados);
  }
}
