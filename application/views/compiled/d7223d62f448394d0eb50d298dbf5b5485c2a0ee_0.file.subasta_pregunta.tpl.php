<?php /* Smarty version 3.1.27, created on 2018-04-11 00:19:12
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/proveedor/subasta_pregunta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2282208415acd9ad03f7d45_25193119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7223d62f448394d0eb50d298dbf5b5485c2a0ee' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/proveedor/subasta_pregunta.tpl',
      1 => 1523423950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2282208415acd9ad03f7d45_25193119',
  'variables' => 
  array (
    'get_url' => 0,
    'id' => 0,
    'preguntas' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acd9ad0520452_87109372',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acd9ad0520452_87109372')) {
function content_5acd9ad0520452_87109372 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2282208415acd9ad03f7d45_25193119';
?>
<div class="row">
	<form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
agregar_pregunta" method="post">
		<div class="response"></div>
		<div class="form-group col-sm-12 col-md-12">
									
		    <label>Pregunta:</label>
		    <div class="input-group">
		    	<span class="input-group-addon mat-icomap1">
		            <i class="material-icons">help_outline</i>
		        </span>
		        <input type="text" class="form-control" name="pregunta">
		    </div>
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-danger save">Agregar pregunta</button>
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
		</div>
	</form>
</div>

<div class="row">
	<div class="col-md-12">
		<br><br>
		<legend>Preguntas</legend>
	</div>
	<?php
$_from = $_smarty_tpl->tpl_vars['preguntas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>

		<ul>

			<li><b><?php echo $_smarty_tpl->tpl_vars['l']->value['pregunta'];?>
</b></li>

			<ol><?php echo $_smarty_tpl->tpl_vars['l']->value['respuesta'];?>
</ol>

		</ul>

	<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
</div><?php }
}
?>