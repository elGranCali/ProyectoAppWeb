<div class="users form">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
			<br>
			<br>
            <?php echo __('Por favor digite su nombre de usuario y contraseña'); ?>
			<br>
        </legend>
		<br>
		<div class="form-group col-md-2 col-md-offset-5 col-lg-2 col-lg-offset-5 col-sm-2 col-sm-offset-5">
        <?php echo $this->Form->input('username', array('label' => array ('text' => 'Nombre de usuario:  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
        <?php echo $this->Form->input('password', array('label' => array ('text' => 'Contraseña:  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
		<br>
		<?php echo $this->Form->submit(__('Ingresar'), array ('class' => 'btn btn-success')); ?>
		</div>
    </fieldset>
</div>