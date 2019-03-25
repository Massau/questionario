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

<!--
<h2>Repondido por:</h2>
<table>
	<thead>
		<tr><th>Nome</th><th>Idade</th></tr>
	</thead>
	<tbody>
		<tr><td>Katia</td><td>20</td></tr>
	</tbody>
</table>
-->