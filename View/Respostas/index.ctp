<?php
	$detalhe = array();
	foreach ($respostas as $resposta) {
		$editLink = $this->Html->Link('Alterar', '/respostas/edit/' . $resposta['Resposta']['id']);
		$deleteLink = $this->Html->Link('Excluir', '/respostas/delete/' . $resposta['Resposta']['id']);
		$viewLink = $this->Html->Link($resposta['Resposta']['nome'], '/respostas/view/' . $resposta['Resposta']['id']);
		$detalhe[] = array(
		$viewLink,
		$resposta['Resposta']['idade'],
		$editLink . ' ' . $deleteLink
		);
	}

	$titulos = array('Nome', 'Idade', '');
	$header = $this->Html->tableHeaders($titulos);
	$body = $this->Html->tableCells($detalhe);

	$novoButton = $this->Html->link('Novo', '/respostas/add');
	
	echo $this->Html->tag('h2', 'Respondido por:');
	echo $novoButton;
	echo $this->Html->tag('table', $header . $body);
?>