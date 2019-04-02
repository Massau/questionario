<?php
	$detalhe = array();
	foreach ($respostas as $resposta) {
		$detalhe[] = array(
		$resposta['Resposta']['nome'], 
		$resposta['Resposta']['idade']
		);
	}

	$titulos = array('Nome', 'Ano');
	$header = $this->Html->tableHeaders($titulos);
	$body = $this->Html->tableCells($detalhe);

	$novoButton = $this->Html->link('Novo', '/respostas/add');
	
	echo $this->Html->tag('h2', 'Respondido por:');
	echo $novoButton;
	echo $this->Html->tag('table', $header . $body);
?>