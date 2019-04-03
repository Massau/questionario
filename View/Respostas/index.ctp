<?php
	$detalhe = array();
	foreach ($respostas as $resposta) {
		$editLink = $this->Html->Link('Alterar', '/respostas/edit/' . $resposta['Resposta']['id']);
		$detalhe[] = array(
		$resposta['Resposta']['nome'], 
		$resposta['Resposta']['idade'],
		$editLink
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