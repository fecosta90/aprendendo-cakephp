<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pokemon'), ['action' => 'edit', $pokemon->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pokemon'), ['action' => 'delete', $pokemon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pokemon->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pokemons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pokemon'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pokemons view large-9 medium-8 columns content">
    <h3><?= h($pokemon->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($pokemon->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($pokemon->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pokemon->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($pokemon->descricao)); ?>
    </div>
</div>
