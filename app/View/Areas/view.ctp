<div class="areas view">
<h2><?php echo __('Area'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($area['Area']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($area['Area']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Area'), array('action' => 'edit', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Area'), array('action' => 'delete', $area['Area']['id']), array(), __('Are you sure you want to delete # %s?', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Stations'); ?></h3>
	<?php if (!empty($area['Station'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Acronym'); ?></th>
		<th><?php echo __('Frequency'); ?></th>
		<th><?php echo __('Status Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($area['Station'] as $station): ?>
		<tr>
			<td><?php echo $station['id']; ?></td>
			<td><?php echo $station['area_id']; ?></td>
			<td><?php echo $station['name']; ?></td>
			<td><?php echo $station['acronym']; ?></td>
			<td><?php echo $station['frequency']; ?></td>
			<td><?php echo $station['status_id']; ?></td>
			<td><?php echo $station['created']; ?></td>
			<td><?php echo $station['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stations', 'action' => 'view', $station['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stations', 'action' => 'edit', $station['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stations', 'action' => 'delete', $station['id']), array(), __('Are you sure you want to delete # %s?', $station['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
