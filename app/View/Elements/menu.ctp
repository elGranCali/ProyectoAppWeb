    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <?php echo '<a class="navbar-brand" href="'.$this->webroot.'">Conteo Aves CR</a>';  ?>


        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ver<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Aves',array('controller'=>'birds','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('Categorias',array('controller'=>'categories','action'=>'index')); ?></li>
                <li><?php echo $this->Html->link('Registros',array('controller'=>'records','action'=>'index')); ?></li>
             
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Eventos<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Crear Evento',array('controller'=>'events','action'=>'add',1,0,0)); ?></li>

                <li><?php echo $this->Html->link('Ver Eventos',array('controller'=>'events','action'=>'index')); ?></li>      
                         
             
              </ul>
            </li>
                   <?php
                   if (!empty($this->Session->read('Auth.User.username')))
                   {
                       echo '<li><a href="/aves_aplicaciones/users/view/'.$this->Session->read('Auth.User.id').'">Registrado como: '.$this->Session->read('Auth.User.username').'</a></li>';

                   }?>
                   <?php if (empty($this->Session->read('Auth.User.username'))){
                       echo '<li><a href="/aves_aplicaciones/users/login">Iniciar sesion</a></li>';
                   }else{
                       echo '<li><a href="/aves_aplicaciones/users/logout">Cerrar sesion</a></li>';
                   }?>
          </ul>

        </div><!--/.nav-collapse -->

      </div>
    </nav>