<?php /* Smarty version 3.1.27, created on 2018-04-13 14:39:46
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/plantilla/p_lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2625671505ad107821392e9_22658990%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b1ba2b5fb2f42d5b9fafb5e2ecee858d3e5a35' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/plantilla/p_lista.tpl',
      1 => 1523648378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2625671505ad107821392e9_22658990',
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
  'unifunc' => 'content_5ad10782b79ce4_80126127',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad10782b79ce4_80126127')) {
function content_5ad10782b79ce4_80126127 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2625671505ad107821392e9_22658990';
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