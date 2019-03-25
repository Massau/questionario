<?php
	echo $this->Html->tag('h2', 'Respondido por:');

	$titulos = array('Nome', 'Ano');
	$header = $this->Html->tableHeaders($titulos);
	$detalhe = array(
		array('Katia', '20')
		);
	$body = $this->Html->tableCells($detalhe);

	echo $this->Html->tag('table', $header . $body);
?>