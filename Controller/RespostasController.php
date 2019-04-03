<?php
App::uses('AppController', 'Controller');

class RespostasController extends AppController {
	public function index() {
/*		$respostas = array(
			array('Resposta' => array('nome' => 'Katia', 'idade' => '20')),
			array('Resposta' => array('nome' => 'Claudio', 'idade' => '36')),
		);
*/
		$respostas = $this->Resposta->find('all');

		$this->set('respostas', $respostas);
	}

	public function add() {
		pr($this->request->data);
			if (!empty($this->request->data)) {
				$this->Resposta->create();
				if ($this->Resposta->save($this->request->data)) {
					$this->Flash->set('Resposta gravada com sucesso!');
					$this->redirect('/respostas');
				}

			}
		/*
		Se tem informação (se o campo estiver setado)
			Receber Informações
			Gravar no Banco
			Mostrar mensagem para usuário
			Redireciomar para Respostas
		Senao
			Mostra formulário
		*/
	}
}