<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hotels'), ['controller' => 'Hotels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hotel'), ['controller' => 'Hotels', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Managers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Managers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admin'), ['controller' => 'Admin', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admin', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($customer->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($customer->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($customer->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($customer->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middlename') ?></th>
            <td><?= h($customer->middlename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($customer->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($customer->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($customer->e-mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Num') ?></th>
            <td><?= $this->Number->format($customer->contact_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel Id') ?></th>
            <td><?= $this->Number->format($customer->hotel_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Room Id') ?></th>
            <td><?= $this->Number->format($customer->room_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Manager Id') ?></th>
            <td><?= $this->Number->format($customer->manager_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customer->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hotels') ?></h4>
        <?php if (!empty($customer->hotels)): ?>
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
            <?php foreach ($customer->hotels as $hotels): ?>
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
        <h4><?= __('Related Rooms') ?></h4>
        <?php if (!empty($customer->rooms)): ?>
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
            <?php foreach ($customer->rooms as $rooms): ?>
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
        <h4><?= __('Related Managers') ?></h4>
        <?php if (!empty($customer->managers)): ?>
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
            <?php foreach ($customer->managers as $managers): ?>
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
        <?php if (!empty($customer->admin)): ?>
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
            <?php foreach ($customer->admin as $admin): ?>
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
