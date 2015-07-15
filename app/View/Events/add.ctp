<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
	<legend> Nuevo Evento </legend>
		<div class= "form-group col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5 col-sm-2 col-sm-offset-5">			
			<?php	echo $this->Form->input('year_' , 		array('label' => array ('text' => 'Año :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<?php	echo $this->Form->input('organization', array('label' => array ('text' => 'Organización :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<?php	echo $this->Form->input('description' , array('label' => array ('text' => 'Descripción :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<br>
			<?php echo $this->Form->submit(__('Guardar'), array ('class' => 'btn btn-success')); ?>
		</div>	
	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Records'), array('controller' => 'records', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Record'), array('controller' => 'records', 'action' => 'add')); ?> </li>
	</ul>
</div>
