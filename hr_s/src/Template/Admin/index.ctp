<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Managers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Managers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="admin index large-9 medium-8 columns content">
    <h3><?= __('Admin') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('middlename') ?></th>
                <th scope="col"><?= $this->Paginator->sort('e-mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manager_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($admin as $admin): ?>
            <tr>
                <td><?= $this->Number->format($admin->id) ?></td>
                <td><?= h($admin->username) ?></td>
                <td><?= h($admin->password) ?></td>
                <td><?= h($admin->lastname) ?></td>
                <td><?= h($admin->firstname) ?></td>
                <td><?= h($admin->middlename) ?></td>
                <td><?= h($admin->e-mail) ?></td>
                <td><?= $this->Number->format($admin->contact_num) ?></td>
                <td><?= h($admin->created) ?></td>
                <td><?= h($admin->modified) ?></td>
                <td><?= $admin->has('manager') ? $this->Html->link($admin->manager->id, ['controller' => 'Managers', 'action' => 'view', $admin->manager->id]) : '' ?></td>
                <td><?= $admin->has('customer') ? $this->Html->link($admin->customer->id, ['controller' => 'Customers', 'action' => 'view', $admin->customer->id]) : '' ?></td>
                <td><?= $admin->has('hotel') ? $this->Html->link($admin->hotel->name, ['controller' => 'Hotels', 'action' => 'view', $admin->hotel->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $admin->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
