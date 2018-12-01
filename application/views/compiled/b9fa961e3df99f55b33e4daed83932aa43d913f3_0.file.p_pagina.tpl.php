<?php /* Smarty version 3.1.27, created on 2018-12-01 10:31:47
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\plantilla\p_pagina.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4886516405c02a9636aebc3_25752524%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9fa961e3df99f55b33e4daed83932aa43d913f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\plantilla\\p_pagina.tpl',
      1 => 1523652022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4886516405c02a9636aebc3_25752524',
  'variables' => 
  array (
    'modulo' => 0,
    'registro' => 0,
    'get_url' => 0,
    'pagina' => 0,
    'form' => 0,
    'tabla' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a9636b96d7_73898650',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a9636b96d7_73898650')) {
function content_5c02a9636b96d7_73898650 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4886516405c02a9636aebc3_25752524';
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
			<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
listar"><i class="fa fa-list"></i> Listar <?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</a></li>
			<?php }?>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</li>
		</ol>
   	</section>

	<section class="content">
		<div class="row">
			<div class="col-sm-5 col-md-4">
				<form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
accion" method="post">
					<div class="box box-danger">
						<div class="box-body">
							<div class="response"></div>
							<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

						</div>
						<div class="box-footer">
							<div class="text-right">
	                        	<button type="submit" class="btn save bot-send-1">Registrar</button>
	                        	<input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['id'];
}?>">
	                        </div>
						</div>
					</div>
				</form>
			</div>

			<div class="col-sm-7 col-md-8">
				<div class="box box-danger">
					<div class="box-body">

						<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>

						
					</div>
				</div>
			</div>
		</div>
	</section>
</div><?php }
}
?>