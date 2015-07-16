<div class="users view">
		<br>
		<br>
		<?php echo $this->Html->link('Actualizar Información', array('action' => 'edit', $user['User']['id']), array ( 'class' => 'btn btn-info' , 'style' => 'float:right; margin:4px;')); ?>
		<?php echo $this->Form->postLink('Eliminar usuario', array('action' => 'delete', $user['User']['id']), array( 'class' => 'btn btn-info' , 'style' => 'float:right;  margin:4px;'), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> 
		<legend> <br> Información usuario </legend>
		<br>
		<h4> Nombre </h4>
			<p> <?php echo h($user['User']['name_']); ?> </p>
		<h4>Nombre de Usuario</h4>
			<p> <?php echo h($user['User']['username']); ?> </p>
		<h4>Teléfono</h4>
			<p> <?php echo h($user['User']['telephone']); ?> </p>
		<h4> Máximo grado académico </h4>
			<p> <?php echo h($user['User']['degree']); ?> 	</p>
		<h4>Categoría</h4>
			<p> <?php echo $this->Html->link($user['Category']['description'], array('controller' => 'categories', 'action' => 'index', $user['Category']['id'])); ?> </p>
		<br>
		<br>
</div>