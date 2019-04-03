<?php
$form = $this->Form->create('Resposta');
$form .= $this->Form->hidden('Resposta.id');
$form .= $this->Form->input('Resposta.nome');
$form .= $this->Form->input('Respostas.idade');
$form .= $this->Form->end('Gravar');

echo $this->Html->tag('h1', 'Alterar Resposta');
echo $form;
?>