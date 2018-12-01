<?php /* Smarty version 3.1.27, created on 2018-04-14 19:59:24
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/plantilla/p_pagina.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8415307645ad2a3ec1965f3_57431773%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdd37ee96a5f541975215c0b3c78ae7ea62afad2' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/plantilla/p_pagina.tpl',
      1 => 1523648422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8415307645ad2a3ec1965f3_57431773',
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
  'unifunc' => 'content_5ad2a3ec359da1_43076818',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad2a3ec359da1_43076818')) {
function content_5ad2a3ec359da1_43076818 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8415307645ad2a3ec1965f3_57431773';
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