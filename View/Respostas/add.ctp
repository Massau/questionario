<?php
$form = $this->form->create('resposta');
$form .= $this->Form->input('Resposta.nome');
$form .= $this->Form->input('Respostas.idade');
$form .= $this->form->end();

echo $this->Html->Tag('h1', 'Nova Resposta');
echo $form;
?>