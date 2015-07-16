<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend> Editar Usuario </legend>
		<?php echo $this->Form->input('id'); ?>
		<div class="form-group">
		<br>
		<?php echo $this->Form->input('name_', array('label' => array ('text' => 'Nombre:  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
		<br>
		<?php echo $this->Form->input('telephone',  array('label' => array ('text' => 'Teléfono:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		<br>
		<?php echo $this->Form->input('degree' ,  array('label' => array ('text' => 'Grado académico:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		<br>		
		<?php echo $this->Form->input('category_id' ,  array('label' => array ('text' => 'Categoría:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		<div class="row">
		<div class="col-md-6">
		<br>
		<?php echo $this->Form->input('username',  array('label' => array ('text' => 'Nombre de usuario:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-6">		
		<br>
		<?php echo $this->Form->input('password',  array('label' => array ('text' => 'Contraseña:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		</div>
		</div>
		</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
