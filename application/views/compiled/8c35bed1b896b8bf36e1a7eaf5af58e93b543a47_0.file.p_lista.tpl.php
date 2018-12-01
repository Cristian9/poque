<?php /* Smarty version 3.1.27, created on 2018-10-26 19:27:08
         compiled from "/home/mycminesac/public_html/subasta/application/views/templates/plantilla/p_lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12010090115bd3b0dc8976d6_78431381%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c35bed1b896b8bf36e1a7eaf5af58e93b543a47' => 
    array (
      0 => '/home/mycminesac/public_html/subasta/application/views/templates/plantilla/p_lista.tpl',
      1 => 1523648378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12010090115bd3b0dc8976d6_78431381',
  'variables' => 
  array (
    'modulo' => 0,
    'pagina' => 0,
    'buttons' => 0,
    'agregar' => 0,
    'get_url' => 0,
    'tabla' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3b0dc915746_32074998',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3b0dc915746_32074998')) {
function content_5bd3b0dc915746_32074998 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12010090115bd3b0dc8976d6_78431381';
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Módulo
			<small><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</li>
		</ol>
   </section>
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-danger">
					<div class="box-header with-border">

						<h3 class="box-title">Listado</h3>
						<div class="pull-right">
						<?php if (isset($_smarty_tpl->tpl_vars['buttons']->value)) {?>
							<?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['agregar']->value) {?>
							<a class="btn btn-blue1" data-toggle="tooltip" title="Agregar" href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
agregar"><i class="fa fa-plus"></i></a>
						<?php }?>
						</div>

					</div>



					<div class="box-body">



						<div class="response"></div>



						<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>




					</div>

				</div>

			</div>

		</div>

	</section>



</div><?php }
}
?>