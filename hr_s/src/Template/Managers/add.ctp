<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manager $manager
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Managers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admin'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admin', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="managers form large-9 medium-8 columns content">
    <?= $this->Form->create($manager) ?>
    <fieldset>
        <legend><?= __('Add Manager') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('lastname');
            echo $this->Form->control('firstname');
            echo $this->Form->control('middlename');
            echo $this->Form->control('e-mail');
            echo $this->Form->control('contact_num');
            echo $this->Form->control('customer_id');
            echo $this->Form->control('hotel_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
