<?php /* Smarty version 3.1.27, created on 2018-10-26 19:27:08
         compiled from "/home/mycminesac/public_html/subasta/application/views/templates/manager/proveedor_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16291179655bd3b0dc67fc93_63570285%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05b51a9e3759c1b12ee9476650cb4ca70b4a9e6f' => 
    array (
      0 => '/home/mycminesac/public_html/subasta/application/views/templates/manager/proveedor_tabla.tpl',
      1 => 1524426228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16291179655bd3b0dc67fc93_63570285',
  'variables' => 
  array (
    'lista' => 0,
    'i' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5bd3b0dc873ac0_89091236',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5bd3b0dc873ac0_89091236')) {
function content_5bd3b0dc873ac0_89091236 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16291179655bd3b0dc67fc93_63570285';
?>
<div class="table-responsive box-red1 tablared1">

	<table class="table table-bordered table-hover datatable">

		<thead>

			<tr>

				<th width="10">N°</th>

				<th width="120">Sector</th>

				<th width="120">Rubro</th>

				<th width="120">Nombre</th>

				<th width="70">Ruc</th>

				<th width="120">Departamento</th>

				<th width="110">Provincia</th>

				<th width="110">Distrito</th>

				<th width="100">F. Registro</th>

				<th width="90">Acción</th>

			</tr>

		</thead>



		<tbody>

			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null, 0);?>

			<?php
$_from = $_smarty_tpl->tpl_vars['lista']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>

			<tr>

				<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['sector'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['rubro'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['nombre'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['n_documento'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['departamento'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['provincia'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['distrito'];?>
</td>

				<td><?php echo formato_fecha($_smarty_tpl->tpl_vars['l']->value['f_registro'],'fecha_hora_completo');?>
</td>

				<td class="text-center"><?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'editar|denegar|permitir|eliminar',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>
</td>

			</tr>

			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>

			<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

		</tbody>

	</table>

</div><?php }
}
?>