<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($room->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($room->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td><?= h($room->images) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room Number') ?></th>
            <td><?= $this->Number->format($room->room_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel Id') ?></th>
            <td><?= $this->Number->format($room->hotel_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($room->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room Avi') ?></th>
            <td><?= $room->room_avi ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hotels') ?></h4>
        <?php if (!empty($room->hotels)): ?>
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
            <?php foreach ($room->hotels as $hotels): ?>
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
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($room->customers)): ?>
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
            <?php foreach ($room->customers as $customers): ?>
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
</div>
