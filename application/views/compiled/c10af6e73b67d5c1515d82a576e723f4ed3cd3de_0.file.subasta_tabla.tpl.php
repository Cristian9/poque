<?php /* Smarty version 3.1.27, created on 2018-01-09 20:20:19
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\cliente\subasta_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:326055a556a535f45f5_91495213%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c10af6e73b67d5c1515d82a576e723f4ed3cd3de' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\cliente\\subasta_tabla.tpl',
      1 => 1515547214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326055a556a535f45f5_91495213',
  'variables' => 
  array (
    'lista' => 0,
    'i' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a556a536c6784_79961463',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a556a536c6784_79961463')) {
function content_5a556a536c6784_79961463 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '326055a556a535f45f5_91495213';
?>
<div class="table-responsive box-red1 tablared1">

	<table class="table table-bordered table-hover datatable">

		<thead>

			<tr>

				<th width="10">N°</th>

				<th width="140">Tipo de subasta</th>

				<th width="90">Categoría</th>

				<th width="150">Producto / Servicio</th>

				<th width="110">Precio Base</th>

				<th width="110">Incremento / Decremento</th>

				<th width="100">Fecha de Subasta</th>

				<th width="90">Estado</th>

				<th width="100">Detalles</th>

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

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['tipo_subasta'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['categoria'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['producto'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['moneda_simbolo'];
echo $_smarty_tpl->tpl_vars['l']->value['precio_base'];?>
</td>

				<?php if ($_smarty_tpl->tpl_vars['l']->value['tipo_descuento_id'] == 1) {?>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['moneda_simbolo'];
echo $_smarty_tpl->tpl_vars['l']->value['descuento_minimo'];?>
</td>

				<?php } else { ?>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['descuento_minimo'];?>
%</td>

				<?php }?>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['f_registro'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['estado'];?>
</td>

				<td class="text-center">
					<?php echo detalle($_smarty_tpl->tpl_vars['l']->value['id'],'bases|ver|resultado',$_smarty_tpl->tpl_vars['get_url']->value);?>

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