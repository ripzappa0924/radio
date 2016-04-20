<div class="stations form">
<?php echo $this->Form->create('Station'); ?>
	<fieldset>
		<legend><?php echo __('Edit Station'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('area_id');
		echo $this->Form->input('name');
		echo $this->Form->input('acronym');
		echo $this->Form->input('frequency');

		echo $this->Form->input('url');
		echo $this->Form->input('urlprog');
		echo $this->Form->input('status_id');

		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Station.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Station.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas'), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area'), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses'), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status'), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('controller' => 'logs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('controller' => 'logs', 'action' => 'add')); ?> </li>
	</ul>
</div>
