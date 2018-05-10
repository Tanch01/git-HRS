<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manager $manager
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Manager'), ['action' => 'edit', $manager->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Manager'), ['action' => 'delete', $manager->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manager->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admin'), ['controller' => 'Admin', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admin', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="managers view large-9 medium-8 columns content">
    <h3><?= h($manager->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($manager->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($manager->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($manager->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($manager->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middlename') ?></th>
            <td><?= h($manager->middlename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($manager->e-mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($manager->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Num') ?></th>
            <td><?= $this->Number->format($manager->contact_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($manager->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel Id') ?></th>
            <td><?= $this->Number->format($manager->hotel_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($manager->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($manager->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($manager->customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Firstname') ?></th>
                <th scope="col"><?= __('Middlename') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('E-mail') ?></th>
                <th scope="col"><?= __('Contact Num') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('Manager Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($manager->customers as $customers): ?>
            <tr>
                <td><?= h($customers->id) ?></td>
                <td><?= h($customers->username) ?></td>
                <td><?= h($customers->password) ?></td>
                <td><?= h($customers->lastname) ?></td>
                <td><?= h($customers->firstname) ?></td>
                <td><?= h($customers->middlename) ?></td>
                <td><?= h($customers->address) ?></td>
                <td><?= h($customers->gender) ?></td>
                <td><?= h($customers->e-mail) ?></td>
                <td><?= h($customers->contact_num) ?></td>
                <td><?= h($customers->created) ?></td>
                <td><?= h($customers->modified) ?></td>
                <td><?= h($customers->hotel_id) ?></td>
                <td><?= h($customers->room_id) ?></td>
                <td><?= h($customers->manager_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customers', 'action' => 'view', $customers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customers', 'action' => 'edit', $customers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customers', 'action' => 'delete', $customers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Hotels') ?></h4>
        <?php if (!empty($manager->hotels)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('E-mail') ?></th>
                <th scope="col"><?= __('Contact Num') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Images') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Manager Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($manager->hotels as $hotels): ?>
            <tr>
                <td><?= h($hotels->id) ?></td>
                <td><?= h($hotels->name) ?></td>
                <td><?= h($hotels->address) ?></td>
                <td><?= h($hotels->e-mail) ?></td>
                <td><?= h($hotels->contact_num) ?></td>
                <td><?= h($hotels->description) ?></td>
                <td><?= h($hotels->images) ?></td>
                <td><?= h($hotels->created) ?></td>
                <td><?= h($hotels->modified) ?></td>
                <td><?= h($hotels->room_id) ?></td>
                <td><?= h($hotels->customer_id) ?></td>
                <td><?= h($hotels->manager_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hotels', 'action' => 'view', $hotels->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hotels', 'action' => 'edit', $hotels->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hotels', 'action' => 'delete', $hotels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotels->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Admin') ?></h4>
        <?php if (!empty($manager->admin)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Firstname') ?></th>
                <th scope="col"><?= __('Middlename') ?></th>
                <th scope="col"><?= __('E-mail') ?></th>
                <th scope="col"><?= __('Contact Num') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Manager Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($manager->admin as $admin): ?>
            <tr>
                <td><?= h($admin->id) ?></td>
                <td><?= h($admin->username) ?></td>
                <td><?= h($admin->password) ?></td>
                <td><?= h($admin->lastname) ?></td>
                <td><?= h($admin->firstname) ?></td>
                <td><?= h($admin->middlename) ?></td>
                <td><?= h($admin->e-mail) ?></td>
                <td><?= h($admin->contact_num) ?></td>
                <td><?= h($admin->created) ?></td>
                <td><?= h($admin->modified) ?></td>
                <td><?= h($admin->manager_id) ?></td>
                <td><?= h($admin->customer_id) ?></td>
                <td><?= h($admin->hotel_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Admin', 'action' => 'view', $admin->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Admin', 'action' => 'edit', $admin->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admin', 'action' => 'delete', $admin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
