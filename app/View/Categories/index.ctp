<div class="categories index">
	<h2><?php echo __('Categorías'); ?></h2>
	<br>
		<button type="button"><?php echo $this->Html->link('Nueva Categoría', array('action' => 'add')); ?></button>
		<button type="button"><?php echo $this->Html->link('Consultar Categorías', array('action' => 'index')); ?></button>		
	<br>
	<br>
	<br>
	<table class="table table-bordered">
	<thead>
	<tr>
			<th>Descripción</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categories as $category): ?>
	<tr>
		<td><?php echo h($category['Category']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $category['Category']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $category['Category']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?>
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
