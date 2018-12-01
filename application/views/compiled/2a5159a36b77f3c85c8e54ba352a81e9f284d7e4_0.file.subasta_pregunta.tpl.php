<?php /* Smarty version 3.1.27, created on 2018-11-29 20:27:07
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\proveedor\subasta_pregunta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3544951665c0091eb4a57c6_14376564%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5159a36b77f3c85c8e54ba352a81e9f284d7e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\proveedor\\subasta_pregunta.tpl',
      1 => 1523427550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3544951665c0091eb4a57c6_14376564',
  'variables' => 
  array (
    'get_url' => 0,
    'id' => 0,
    'preguntas' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c0091eb528894_47960224',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c0091eb528894_47960224')) {
function content_5c0091eb528894_47960224 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3544951665c0091eb4a57c6_14376564';
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