<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manager[]|\Cake\Collection\CollectionInterface $managers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Manager'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admin'), ['controller' => 'Admin', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admin', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="managers index large-9 medium-8 columns content">
    <h3><?= __('Managers') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotel_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($managers as $manager): ?>
            <tr>
                <td><?= $this->Number->format($manager->id) ?></td>
                <td><?= h($manager->username) ?></td>
                <td><?= h($manager->password) ?></td>
                <td><?= h($manager->lastname) ?></td>
                <td><?= h($manager->firstname) ?></td>
                <td><?= h($manager->middlename) ?></td>
                <td><?= h($manager->e-mail) ?></td>
                <td><?= $this->Number->format($manager->contact_num) ?></td>
                <td><?= h($manager->created) ?></td>
                <td><?= h($manager->modified) ?></td>
                <td><?= $this->Number->format($manager->customer_id) ?></td>
                <td><?= $this->Number->format($manager->hotel_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $manager->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $manager->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $manager->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manager->id)]) ?>
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
