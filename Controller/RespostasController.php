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
}