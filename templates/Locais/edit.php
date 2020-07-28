<h1>Editar Local</h1>
<?php
    echo $this->Form->create($local);
    echo $this->Form->control('nome', ['label' => 'Nome', 'class' => 'form-control']);
    echo $this->Form->control('cep', ['label' => 'CEP', 'class' => 'form-control']);
    echo $this->Form->control('logradouro', ['label' => 'Logradouro', 'class' => 'form-control']);
    echo $this->Form->control('complemento', ['label' => 'Complemento', 'class' => 'form-control']);
    echo $this->Form->control('numero', ['label' => 'Número', 'class' => 'form-control']);
    echo $this->Form->control('bairro', ['label' => 'Bairro', 'class' => 'form-control']);
    echo $this->Form->control('uf', ['label' => 'UF', 'class' => 'form-control']);
    echo $this->Form->control('cidade', ['label', 'Cidade', 'class' => 'form-control']);
    echo $this->Form->control('data', ['label' => 'Data', 'class' => 'form-control']);
    echo $this->Form->button(__('Salvar'), ['class' => 'btn form-button']);
    echo $this->Form->end();

    echo $this->Html->css('/webroot/css/styles.css');
    echo $this->Html->script('/webroot/js/valida-local.js')
?>