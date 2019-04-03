<?php
$form = $this->form->create('resposta');
$form .= $this->Form->input('Resposta.nome');
$form .= $this->Form->input('Resposta.idade');
$form .= $this->form->end('Gravar');
$voltarLink = $this->Html->Link('Voltar', '/respostas');

echo $this->Html->Tag('h1', 'Nova Resposta');
echo $form;
echo $voltarLink;
?>