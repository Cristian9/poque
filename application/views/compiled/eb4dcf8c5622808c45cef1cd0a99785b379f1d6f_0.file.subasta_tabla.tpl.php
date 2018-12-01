<?php /* Smarty version 3.1.27, created on 2018-01-04 16:20:37
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/cliente/subasta_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12819320575a4e9aa55cafb9_90320852%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb4dcf8c5622808c45cef1cd0a99785b379f1d6f' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/cliente/subasta_tabla.tpl',
      1 => 1515100772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12819320575a4e9aa55cafb9_90320852',
  'variables' => 
  array (
    'lista' => 0,
    'i' => 0,
    'l' => 0,
    'get_url' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a4e9aa5961412_20459666',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a4e9aa5961412_20459666')) {
function content_5a4e9aa5961412_20459666 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12819320575a4e9aa55cafb9_90320852';
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

				<th width="110">Monto / Porcentaje</th>

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

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['tipo_descuento'];?>
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

				<!--<td class="text-center"><?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'bases|ver|resultado',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>
</td>-->
				<td class="text-center">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/documento/subasta/<?php echo $_smarty_tpl->tpl_vars['l']->value['bases'];?>
" class="btn btn-primary" data-toggle="tooltip" title="Bases"><i class="fa fa-file-text-o"></i></a>
						<?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'ver|resultado',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>

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