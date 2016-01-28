<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pokemon->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pokemon->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pokemons'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pokemons form large-9 medium-8 columns content">
    <?= $this->Form->create($pokemon) ?>
    <fieldset>
        <legend><?= __('Edit Pokemon') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('tipo');
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
