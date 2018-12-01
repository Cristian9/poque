<?php /* Smarty version 3.1.27, created on 2017-12-06 23:16:18
         compiled from "C:\wamp\www\subasta\application\views\templates\plantilla\p_pagina.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:228205a28c092e6fb13_92537934%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b5c08ba90c2c4f0ad5a0ba93c93a5625a3b44be' => 
    array (
      0 => 'C:\\wamp\\www\\subasta\\application\\views\\templates\\plantilla\\p_pagina.tpl',
      1 => 1508630690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228205a28c092e6fb13_92537934',
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
  'unifunc' => 'content_5a28c0930af4b7_01871607',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28c0930af4b7_01871607')) {
function content_5a28c0930af4b7_01871607 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '228205a28c092e6fb13_92537934';
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