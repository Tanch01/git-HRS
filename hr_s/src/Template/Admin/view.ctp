<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admin'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Managers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Managers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="admin view large-9 medium-8 columns content">
    <h3><?= h($admin->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($admin->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($admin->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($admin->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($admin->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middlename') ?></th>
            <td><?= h($admin->middlename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($admin->e-mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manager') ?></th>
            <td><?= $admin->has('manager') ? $this->Html->link($admin->manager->id, ['controller' => 'Managers', 'action' => 'view', $admin->manager->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $admin->has('customer') ? $this->Html->link($admin->customer->id, ['controller' => 'Customers', 'action' => 'view', $admin->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel') ?></th>
            <td><?= $admin->has('hotel') ? $this->Html->link($admin->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $admin->hotel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($admin->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Num') ?></th>
            <td><?= $this->Number->format($admin->contact_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($admin->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($admin->modified) ?></td>
        </tr>
    </table>
</div>
