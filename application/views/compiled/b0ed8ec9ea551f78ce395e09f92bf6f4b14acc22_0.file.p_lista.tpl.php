<?php /* Smarty version 3.1.27, created on 2018-02-13 20:35:02
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\plantilla\p_lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:277065a839246366998_81181001%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ed8ec9ea551f78ce395e09f92bf6f4b14acc22' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\plantilla\\p_lista.tpl',
      1 => 1517550046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277065a839246366998_81181001',
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
  'unifunc' => 'content_5a839246930084_64885035',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a839246930084_64885035')) {
function content_5a839246930084_64885035 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '277065a839246366998_81181001';
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
						<div class="pull-right">
						<?php if (isset($_smarty_tpl->tpl_vars['buttons']->value)) {?>
							<?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['agregar']->value) {?>
							<a class="btn btn-primary" data-toggle="tooltip" title="Agregar" href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
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