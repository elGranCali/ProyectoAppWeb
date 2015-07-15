<div class="birds form">
<?php echo $this->Form->create('Bird'); ?>
	<br>
	<br>
	<fieldset>
		<legend> Registrar Ave </legend>
		<div class= "form-group">	
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6">
					<?php echo $this->Form->input('name_' ,  array('label' => array ('text' => 'Nombre :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6">
					<?php echo $this->Form->input('family_' , array('label' => array ('text' => 'Familia :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
				</div>
			</div>
			<?php echo $this->Form->input('ecology' , array('label' => array ('text' => 'Ecología :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<?php echo $this->Form->input('distribution' , array('label' => array ('text' => 'Distribución :  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
			<br>
			<?php echo $this->Form->submit(__('Guardar'), array ('class' => 'btn btn-success')); ?>
	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Birds'), array('action' => 'index')); ?></li>
	</ul>
</div>
