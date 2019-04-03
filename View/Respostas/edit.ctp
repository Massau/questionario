<?php
$form = $this->form->create('resposta');
$form .= $this->Form->input('Resposta.nome');
$form .= $this->Form->input('Respostas.idade');
$form .= $this->form->end('Gravar');

echo $this->Html->Tag('h1', 'Alterar Resposta');
echo $form;
?>