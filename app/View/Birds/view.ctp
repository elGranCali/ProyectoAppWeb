<div class="birds view">
		<br>
		<br>
		<?php echo $this->Html->link('Actualizar Información', array('action' => 'edit', $bird['Bird']['id']), array ( 'class' => 'btn btn-info' , 'style' => 'float:right; margin:4px;')); ?>
		<?php echo $this->Form->postLink('Eliminar Ave', array('action' => 'delete', $bird['Bird']['id']), array( 'class' => 'btn btn-info' , 'style' => 'float:right;  margin:4px;'), __('¿Estas segur@ de eliminar el ave del sistema?')); ?> 
		<legend> <br> Información del Ave </legend>
		<br>
		<div class= "row">
			<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
				<h4> Nombre </h4>
				<p> <em><?php echo h($bird['Bird']['name_']); ?> </em></p>

				<h4> Familia </h4>
				<p><?php echo h($bird['Bird']['family_']); ?>	</p>
				
				<h4> Ecología</h4>
				<p> <?php echo h($bird['Bird']['ecology']); ?>	</p>
				
				<h4> Distribución </h4>
				<p> <?php echo h($bird['Bird']['distribution']); ?>	</p>
			</div>
			<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
				<?php echo $this->Html->image(urldecode($bird['Bird']['name_']).'.jpg', array('alt' => 'CakePHP')); ?>
			</div>
		</div>
</div>

