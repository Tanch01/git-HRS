<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hotel $hotel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hotel'), ['action' => 'edit', $hotel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hotel'), ['action' => 'delete', $hotel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hotel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Managers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Managers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admin'), ['controller' => 'Admin', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admin', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hotels view large-9 medium-8 columns content">
    <h3><?= h($hotel->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($hotel->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($hotel->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($hotel->e-mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($hotel->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td><?= h($hotel->images) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hotel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Num') ?></th>
            <td><?= $this->Number->format($hotel->contact_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room Id') ?></th>
            <td><?= $this->Number->format($hotel->room_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($hotel->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manager Id') ?></th>
            <td><?= $this->Number->format($hotel->manager_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($hotel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($hotel->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Rooms') ?></h4>
        <?php if (!empty($hotel->rooms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Room Number') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Images') ?></th>
                <th scope="col"><?= __('Room Avi') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hotel->rooms as $rooms): ?>
            <tr>
                <td><?= h($rooms->id) ?></td>
                <td><?= h($rooms->name) ?></td>
                <td><?= h($rooms->room_number) ?></td>
                <td><?= h($rooms->description) ?></td>
                <td><?= h($rooms->images) ?></td>
                <td><?= h($rooms->room_avi) ?></td>
                <td><?= h($rooms->created) ?></td>
                <td><?= h($rooms->hotel_id) ?></td>
                <td><?= h($rooms->customer_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rooms', 'action' => 'view', $rooms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rooms', 'action' => 'edit', $rooms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rooms', 'action' => 'delete', $rooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rooms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Customers') ?></h4>
        <?php if (!empty($hotel->customers)): ?>
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
            <?php foreach ($hotel->customers as $customers): ?>
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
        <h4><?= __('Related Managers') ?></h4>
        <?php if (!empty($hotel->managers)): ?>
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
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Hotel Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hotel->managers as $managers): ?>
            <tr>
                <td><?= h($managers->id) ?></td>
                <td><?= h($managers->username) ?></td>
                <td><?= h($managers->password) ?></td>
                <td><?= h($managers->lastname) ?></td>
                <td><?= h($managers->firstname) ?></td>
                <td><?= h($managers->middlename) ?></td>
                <td><?= h($managers->e-mail) ?></td>
                <td><?= h($managers->contact_num) ?></td>
                <td><?= h($managers->created) ?></td>
                <td><?= h($managers->modified) ?></td>
                <td><?= h($managers->customer_id) ?></td>
                <td><?= h($managers->hotel_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Managers', 'action' => 'view', $managers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Managers', 'action' => 'edit', $managers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Managers', 'action' => 'delete', $managers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $managers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Admin') ?></h4>
        <?php if (!empty($hotel->admin)): ?>
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
            <?php foreach ($hotel->admin as $admin): ?>
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
