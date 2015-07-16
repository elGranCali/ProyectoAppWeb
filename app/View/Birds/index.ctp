<div class="container">
	<br>
	<br>
	<legend> Aves </legend>
	<br>
		<?php echo $this->Html->link('Nueva Ave', array('action' => 'add'), array ( 'class' => 'btn btn-info' , 'style' => 'float:right;')); ?>
	<br>
	<br>
	<br>
    <table class="table table-bordered">
	<thead>
	<tr>
			<th> Nombre </th>
			<th> Familia </th>
			<th> Acciones </th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($birds as $bird): ?>
	<tr>
		<td><?php echo h($bird['Bird']['name_']); ?>&nbsp;</td>
		<td><?php echo h($bird['Bird']['family_']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link( 'Ver', array('action' => 'view', $bird['Bird']['id'])); ?>
			<?php echo $this->Html->link( 'Modificar', array('action' => 'edit', $bird['Bird']['id'])); ?>
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