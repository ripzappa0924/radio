<div class="logs index">
	<h2><?php echo __('Logs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('datetime'); ?></th>
		<!--	<th><?php echo $this->Paginator->sort('place'); ?></th>-->
  	        <th><?php echo $this->Paginator->sort('frequency'); ?></th>
			<th><?php echo $this->Paginator->sort('station_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sinpo_s'); ?></th>
			<th><?php echo $this->Paginator->sort('sinpo_i'); ?></th>
			<th><?php echo $this->Paginator->sort('sinpo_n'); ?></th>
			<th><?php echo $this->Paginator->sort('sinpo_p'); ?></th>
			<th><?php echo $this->Paginator->sort('sinpo_o'); ?></th>
		<!--	<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($logs as $log): ?>
	<tr>
		<td><?php echo h($log['Log']['id']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['datetime']); ?>&nbsp;</td>
	<!--	<td><?php echo h($log['Log']['place']); ?>&nbsp;</td>-->
		<td><?php echo h($log['Log']['frequency']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($log['Station']['name'], array('controller' => 'stations', 'action' => 'view', $log['Station']['id'])); ?>
		</td>
		<td><?php echo h($log['Log']['sinpo_s']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['sinpo_i']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['sinpo_n']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['sinpo_p']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['sinpo_o']); ?>&nbsp;</td>
	<!--	<td><?php echo h($log['Log']['comment']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['created']); ?>&nbsp;</td>
		<td><?php echo h($log['Log']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $log['Log']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $log['Log']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $log['Log']['id']), array(), __('Are you sure you want to delete # %s?', $log['Log']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Log'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
