<?php
  class InscricoesController extends AppController {
    public $name = 'Inscricoes';
    public $uses = array('Inscricao');

  public function inscrever(){
    // Se recebemos dados do formulário
    if (!empty($this->data)) {
      // Tenta salvar esses dados
      $saved = $this->Inscricao->save($this->data);
      if ($saved) {
        // Registro inserido com sucesso!
        $this->redirect(array('controller' => 'pages', 'action' => 'obrigado'));
      }
    }
  }

}
