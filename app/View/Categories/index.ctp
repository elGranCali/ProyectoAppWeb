<div class="categories index">
	<h2><?php echo __('Categorías'); ?></h2>
	<br>
		<?php echo $this->Html->link('Nueva Categoría', array('action' => 'add'), array ( 'class' => 'btn btn-info')); ?>
	<br>
	<br>
	<br>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th> Nombre categoría</th>
			<th class="actions"> Acciones </th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo h($category['Category']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Modificar', array('action' => 'edit', $category['Category']['id'])); ?>
			<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $category['Category']['id']), array('confirm' => '¿Estás segur@ de eliminar la categoría?')); ?>
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
