<div class="records index">
	<h2><?php echo __('Registros'); ?></h2>
	<br>
		<?php echo $this->Html->link('Nuevo registro', array('action' => 'add')); ?>
	<br>
	<br>
	<br>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th> Ave</th>
			<th> Evento</th>
			<th> Tiempo</th>
			<th> Localización</th>
			<th> Decripción</th>
			<th class="actions"> Acción </th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($records as $record): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($record['Event']['description'], array('controller' => 'events', 'action' => 'view', $record['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($record['Bird']['name_'], array('controller' => 'birds', 'action' => 'view', $record['Bird']['id'])); ?>
		</td>
		<td><?php echo h($record['Record']['time_']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['location_']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Ver', array('action' => 'view', $record['Record']['id'])); ?>
			<?php echo $this->Html->link('Modificar', array('action' => 'edit', $record['Record']['id'])); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $record['Record']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $record['Record']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
