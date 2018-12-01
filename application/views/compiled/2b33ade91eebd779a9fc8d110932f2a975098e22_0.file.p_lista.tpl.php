<?php /* Smarty version 3.1.27, created on 2017-12-06 20:57:27
         compiled from "C:\wamp\www\subasta\application\views\templates\plantilla\p_lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29305a28a0075cb961_17098109%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b33ade91eebd779a9fc8d110932f2a975098e22' => 
    array (
      0 => 'C:\\wamp\\www\\subasta\\application\\views\\templates\\plantilla\\p_lista.tpl',
      1 => 1505340442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29305a28a0075cb961_17098109',
  'variables' => 
  array (
    'modulo' => 0,
    'pagina' => 0,
    'get_url' => 0,
    'tabla' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a28a007678310_85434420',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28a007678310_85434420')) {
function content_5a28a007678310_85434420 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29305a28a0075cb961_17098109';
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
						<div class="pull-right"><a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
agregar"><i class="fa fa-plus"></i></a></div>
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