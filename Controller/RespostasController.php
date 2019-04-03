<?php
App::uses('AppController', 'Controller');

class RespostasController extends AppController {
	public function index() {
/*		$respostas = array(
			array('Resposta' => array('nome' => 'Katia', 'idade' => '20')),
			array('Resposta' => array('nome' => 'Claudio', 'idade' => '36')),
		);
*/
		$fields = array('Resposta.id', 'Resposta.nome', 'Resposta.ano');
		$respostas = $this->Resposta->find('all');

		$this->set('respostas', $respostas);
	}

	public function add() {
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

	public function edit($id = null) {
		if (!empty($this->request->data)) {
			if ($this->Resposta->save($this->request->data)) {
				$this->Flash->set('Resposta alterada com sucesso!');
				$this->redirect('/respostas');
			}

		} else {
			$fields = array('Resposta.id','Resposta.nome', 'Resposta.idade');
			$conditions = array('Resposta.id' => $id);
			$this->request->data = $this->Resposta->find('first', compact('fields', 'conditions'));
		}
		/*
		Se tem informação (se o campo estiver setado)
			Receber Informações
			Gravar no Banco
			Mostrar mensagem para usuário
			Redireciomar para Respostas
		Senao
			Busca Informações do ID
			Mostra formulário
		*/
	}

	public function view($id = null) {
		$fields = array('Resposta.id','Resposta.nome', 'Resposta.idade');
		$conditions = array('Resposta.id' => $id);
		$this->request->data = $this->Resposta->find('first', compact('fields', 'conditions'));
	}

	public function delete($id) {
		$this->Resposta->delete($id);
		$this->Flash->set('Resposta excluída com sucesso!');
		$this->redirect('/respostas');
		/*
		Como não preciso de uma tela para deletar basta que ele clique e exclua
		Dessa forma, pegamos o Id e solicitamos que o modelo o apague
		*/
	}

}