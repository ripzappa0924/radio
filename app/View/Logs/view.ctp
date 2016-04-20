<div class="logs view">
<h2><?php echo __('Log'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($log['Log']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datetime'); ?></dt>
		<dd>
			<?php echo h($log['Log']['datetime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($log['Log']['place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frequency'); ?></dt>
		<dd>
			<?php echo h($log['Log']['frequency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo $this->Html->link($log['Station']['name'], array('controller' => 'stations', 'action' => 'view', $log['Station']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinpo S'); ?></dt>
		<dd>
			<?php echo h($log['Log']['sinpo_s']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinpo I'); ?></dt>
		<dd>
			<?php echo h($log['Log']['sinpo_i']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinpo N'); ?></dt>
		<dd>
			<?php echo h($log['Log']['sinpo_n']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinpo P'); ?></dt>
		<dd>
			<?php echo h($log['Log']['sinpo_p']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sinpo O'); ?></dt>
		<dd>
			<?php echo h($log['Log']['sinpo_o']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($log['Log']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($log['Log']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($log['Log']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Log'), array('action' => 'edit', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Log'), array('action' => 'delete', $log['Log']['id']), array(), __('Are you sure you want to delete # %s?', $log['Log']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Logs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Log'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('controller' => 'stations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('controller' => 'stations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contents'), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contents'); ?></h3>
	<?php if (!empty($log['Content'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Log Id'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($log['Content'] as $content): ?>
		<tr>
			<td><?php echo $content['id']; ?></td>
			<td><?php echo $content['log_id']; ?></td>
			<td><?php echo $content['time']; ?></td>
			<td><?php echo $content['content']; ?></td>
			<td><?php echo $content['remark']; ?></td>
			<td><?php echo $content['created']; ?></td>
			<td><?php echo $content['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contents', 'action' => 'view', $content['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contents', 'action' => 'edit', $content['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contents', 'action' => 'delete', $content['id']), array(), __('Are you sure you want to delete # %s?', $content['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Content'), array('controller' => 'contents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
