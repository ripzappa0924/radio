<div class="stations view">
<h2><?php echo __('Station'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo $this->Html->link($station['Area']['name'], array('controller' => 'areas', 'action' => 'view', $station['Area']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($station['Station']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acronym'); ?></dt>
		<dd>
			<?php echo h($station['Station']['acronym']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frequency'); ?></dt>
		<dd>
			<?php echo h($station['Station']['frequency']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('URL'); ?></dt>
		<dd>
			<?php echo h($station['Station']['url']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('programURL'); ?></dt>
		<dd>
			<?php echo h($station['Station']['urlprog']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo $this->Html->link($station['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $station['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($station['Station']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($station['Station']['modified']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($station['Station']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station'), array('action' => 'edit', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Station'), array('action' => 'delete', $station['Station']['id']), array(), __('Are you sure you want to delete # %s?', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Logs'); ?></h3>
	<?php if (!empty($station['Log'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datetime'); ?></th>
		<th><?php echo __('Place'); ?></th>
		<th><?php echo __('Frequency'); ?></th>
		<th><?php echo __('Station Id'); ?></th>
		<th><?php echo __('Sinpo S'); ?></th>
		<th><?php echo __('Sinpo I'); ?></th>
		<th><?php echo __('Sinpo N'); ?></th>
		<th><?php echo __('Sinpo P'); ?></th>
		<th><?php echo __('Sinpo O'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($station['Log'] as $log): ?>
		<tr>
			<td><?php echo $log['id']; ?></td>
			<td><?php echo $log['datetime']; ?></td>
			<td><?php echo $log['place']; ?></td>
			<td><?php echo $log['frequency']; ?></td>
			<td><?php echo $log['station_id']; ?></td>
			<td><?php echo $log['sinpo_s']; ?></td>
			<td><?php echo $log['sinpo_i']; ?></td>
			<td><?php echo $log['sinpo_n']; ?></td>
			<td><?php echo $log['sinpo_p']; ?></td>
			<td><?php echo $log['sinpo_o']; ?></td>
			<td><?php echo $log['comment']; ?></td>
			<td><?php echo $log['created']; ?></td>
			<td><?php echo $log['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'logs', 'action' => 'view', $log['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'logs', 'action' => 'edit', $log['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'logs', 'action' => 'delete', $log['id']), array(), __('Are you sure you want to delete # %s?', $log['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
