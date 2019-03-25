<?php
	$respostas = array(
		array('Resposta' => array('nome' => 'Katia', 'idade' => '20')),
		array('Resposta' => array('nome' => 'Claudio', 'idade' => '36')),
	);
	$detalhe = array();
	foreach ($respostas as $resposta) {
		$detalhe[] = array(
		$resposta['Resposta']['nome'], 
		$resposta['Resposta']['idade']
		);
	}

	echo $this->Html->tag('h2', 'Respondido por:');

	$titulos = array('Nome', 'Ano');
	$header = $this->Html->tableHeaders($titulos);
	$body = $this->Html->tableCells($detalhe);

	echo $this->Html->tag('table', $header . $body);
?>