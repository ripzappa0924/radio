<div class="stations index">
	<h2><?php echo __('Stations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('area_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('acronym'); ?></th>
			<th><?php echo $this->Paginator->sort('frequency'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
		<!--	<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th> -->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($stations as $station): ?>
	<tr>
		<td><?php echo h($station['Station']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($station['Area']['name'], array('controller' => 'areas', 'action' => 'view', $station['Area']['id'])); ?>
		</td>
	<!--	<td><?php echo h($station['Station']['name']); ?>&nbsp;</td> -->


		<td><?php echo $this->Html->link($station['Station']['name'],$station['Station']['url'],array('target'=>'_blank')); ?>&nbsp;</td>

		<!--<td><?php echo h($station['Station']['acronym']); ?>&nbsp;</td>-->


		<td><?php echo $this->Html->link($station['Station']['acronym'],$station['Station']['urlprog'],array('target'=>'_blank')); ?>&nbsp;</td>

		<td><?php echo h($station['Station']['frequency']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($station['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $station['Status']['id'])); ?>
		</td>
	<!--	<td><?php echo h($station['Station']['created']); ?>&nbsp;</td>
		<td><?php echo h($station['Station']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $station['Station']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $station['Station']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $station['Station']['id']), array(), __('Are you sure you want to delete # %s?', $station['Station']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Station'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
