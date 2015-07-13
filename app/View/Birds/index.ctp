<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-12">
	<h2><?php echo __('Control de Aves'); ?></h2>
    <table class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name_'); ?></th>
			<th><?php echo $this->Paginator->sort('family_'); ?></th>
			<th><?php echo $this->Paginator->sort('ecology'); ?></th>
			<th><?php echo $this->Paginator->sort('distribution'); ?></th>
			<th><?php echo 'Actions'; ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($birds as $bird): ?>
	<tr>
		<td><?php echo h($bird['Bird']['name_']); ?>&nbsp;</td>
		<td><?php echo h($bird['Bird']['family_']); ?>&nbsp;</td>
		<td><?php echo h($bird['Bird']['ecology']); ?>&nbsp;</td>
		<td><?php echo h($bird['Bird']['distribution']); ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bird['Bird']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bird['Bird']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bird['Bird']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bird['Bird']['id']))); ?>
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
</div>
</div>