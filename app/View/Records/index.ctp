<div class="records index">
	<br>
	<br>
	<legend> Registros </legend>
	<br>
		<?php echo $this->Html->link('Nuevo Registro', array('action' => 'add'), array ( 'class' => 'btn btn-info' , 'style' => 'float:right;')); ?>
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
	</tr>
	</thead>
	<tbody>
	<?php foreach ($records as $record): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($record['Bird']['name_'], array('controller' => 'birds', 'action' => 'view', $record['Bird']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($record['Event']['description'], array('controller' => 'events', 'action' => 'index', $record['Event']['id'])); ?>
		</td>
		<td><?php echo h($record['Record']['time_']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['location_']); ?>&nbsp;</td>
		<td><?php echo h($record['Record']['description']); ?>&nbsp;</td>
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
