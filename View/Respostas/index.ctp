<?php
	$respostas = array(
		array('Resposta' => array('nome' => 'Katia', 'idade' => '20')),
		array('Resposta' => array('nome' => 'Katia', 'idade' => '20')),
	);

	echo $this->Html->tag('h2', 'Respondido por:');

	$titulos = array('Nome', 'Ano');
	$header = $this->Html->tableHeaders($titulos);
	$body = $this->Html->tableCells($detalhe);

	echo $this->Html->tag('table', $header . $body);
?>