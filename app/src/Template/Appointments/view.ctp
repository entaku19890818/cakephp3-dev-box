<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Appointments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Appointment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="appointments view large-9 medium-8 columns content">
    <h3><?= h($appointment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $appointment->has('user') ? $this->Html->link($appointment->user->name, ['controller' => 'Users', 'action' => 'view', $appointment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $appointment->has('order') ? $this->Html->link($appointment->order->id, ['controller' => 'Orders', 'action' => 'view', $appointment->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Table') ?></th>
            <td><?= h($appointment->table) ?></td>
        </tr>
        <tr>
            <th><?= __('Court Id') ?></th>
            <td><?= h($appointment->court_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($appointment->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Max User') ?></th>
            <td><?= $this->Number->format($appointment->max_user) ?></td>
        </tr>
        <tr>
            <th><?= __('Cost') ?></th>
            <td><?= $this->Number->format($appointment->cost) ?></td>
        </tr>
        <tr>
            <th><?= __('Date') ?></th>
            <td><?= h($appointment->date) ?></td>
        </tr>
        <tr>
            <th><?= __('Start') ?></th>
            <td><?= h($appointment->start) ?></td>
        </tr>
        <tr>
            <th><?= __('Stop') ?></th>
            <td><?= h($appointment->stop) ?></td>
        </tr>
    </table>
</div>