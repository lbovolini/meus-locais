<?= $this->Html->link('Adicionar local', ['action' => 'add'], ['class' => 'btn btn-success']) ?>
<table class="table">
    <tr>
        <th>Nome</th>
        <th>Data da visita</th>
    </tr>

    <?php foreach ($locais as $local) : ?>
    <tr class="local-row">
        <input type="hidden" value=<?= $local->uf ?> class="uf">
        <td><?= $local->nome ?></td>
        <td><?= $local->data->i18nFormat('dd MMM yyyy') ?></td>
        <td>
            <?= $this->Html->link('Editar', ['action' => 'edit', $local->id], ['class' => 'btn btn-primary']) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Apagar',
                ['action' => 'delete', $local->id],
                ['confirm' => 'Tem certeza?', 'class' => 'btn btn-danger'])
            ?>
        </td>
    </tr>
    <?php endforeach; 
        echo $this->Html->css('/webroot/css/styles.css');
        echo $this->Html->script('/webroot/js/uf.js')
    ?>
</table>