<?php
$view = $this->Html->tag('h2', 'Nome');
$view .= $this->Html->para('', $this->request->data['Resposta']['nome']);
$view .= $this->Html->tag('h2', 'Idade');
$view .= $this->Html->para('', $this->request->data['Resposta']['idade']);
$voltarLink = $this->Html->Link('Voltar', '/respostas');


echo $this->Html->tag('h1', 'Visualizar Resposta');
echo $view;
echo $voltarLink;
?>