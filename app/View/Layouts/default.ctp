
<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'Sistema de Conteo de aves');
$cakeVersion = __d('cake_dev', 'Dayner Umaña - Carlos Sanabria <br/>Desarrollo de Aplicaciones WEB - 2015 ')
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>
    </title>
    <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('bootstrap.min','bootstrap-theme.min','style','font-awesome','font-awesome.min'));
    echo $this->Html->script(array('jquery.min','docs.min','bootstrap.min','parent'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<style>
    body {
        padding-top: 51px;
    //overflow:hidden;
        margin-left: 0px;
    }
</style>

<?php  echo $this->element('menu'); ?>
<div id="container" >
    <div id="header">

    </div>
    <div class="container theme-showcase" role="main">

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->fetch('content'); ?>
    </div>

</div>
<div class="container">

<div class="col-xs-12 col-sm-12">
    <div class="row">
		<hr>
        <div id = "footer" class="text-center">
            <p><?php echo $cakeVersion;?> </p>
        </div>
    </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<script src="offcanvas.js"></script>
</body>
</html>
