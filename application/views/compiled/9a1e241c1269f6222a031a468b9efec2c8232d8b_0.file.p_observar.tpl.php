<?php /* Smarty version 3.1.27, created on 2018-01-10 16:47:15
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/plantilla/p_observar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10849150235a5689e3a982a7_26828955%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a1e241c1269f6222a031a468b9efec2c8232d8b' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/plantilla/p_observar.tpl',
      1 => 1515546416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10849150235a5689e3a982a7_26828955',
  'variables' => 
  array (
    'modulo' => 0,
    'get_url' => 0,
    'pagina' => 0,
    'detalle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a5689e3ad8b14_73425781',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a5689e3ad8b14_73425781')) {
function content_5a5689e3ad8b14_73425781 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10849150235a5689e3a982a7_26828955';
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Modulo
			<small><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
listar"><i class="fa fa-list"></i> Listar <?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</li>
		</ol>
    </section>

	<section class="content">
		<div class="box box-danger">
			<div class="box-body">
				<div class="response"></div>
				<?php echo $_smarty_tpl->tpl_vars['detalle']->value;?>

			</div>
			<div class="box-footer">
			</div>
		</div>
	</section>
</div><?php }
}
?>