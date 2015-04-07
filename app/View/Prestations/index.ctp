<div class="prestations index">
	<h2><?php echo __('Prestations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('prenom'); ?></th>
			<th><?php echo $this->Paginator->sort('societe'); ?></th>
			<th><?php echo $this->Paginator->sort('adresse'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('commentaire'); ?></th>
			<th><?php echo $this->Paginator->sort('projet_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($prestations as $prestation): ?>
	<tr>
		<td><?php echo h($prestation['Prestation']['id']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['date']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['type']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['nom']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['societe']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['email']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($prestation['Prestation']['commentaire']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prestation['Projet']['titre'], array('controller' => 'projets', 'action' => 'view', $prestation['Projet']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($prestation['User']['prenom'], array('controller' => 'users', 'action' => 'view', $prestation['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $prestation['Prestation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $prestation['Prestation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $prestation['Prestation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $prestation['Prestation']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Prestation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projets'), array('controller' => 'projets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projet'), array('controller' => 'projets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
