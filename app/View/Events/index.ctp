<div class="events index">
	<br>
	<br>
	<legend> Eventos </legend>
	<br>
		<?php echo $this->Html->link('Nuevo Evento', array('action' => 'add'), array ( 'class' => 'btn btn-info' , 'style' => 'float:right;')); ?>
	<br>
	<br>
	<br>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th> Organización </th>
			<th> Descripción </th>
			<th> Año </th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($events as $event): ?>
	<tr>
		<td><?php echo h($event['Event']['organization']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['description']); ?>&nbsp;</td>
		<td><?php echo h($event['Event']['year_']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Modificar', array('action' => 'edit', $event['Event']['id'])); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $event['Event']['id']), array('confirm' => __('¿Estás segur@ de eliminar el evento?'))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('  Anterior  ' , array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => '   '));
		echo $this->Paginator->next('  Siguiente  ', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
