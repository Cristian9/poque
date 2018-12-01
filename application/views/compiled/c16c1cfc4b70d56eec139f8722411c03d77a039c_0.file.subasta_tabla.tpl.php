<?php /* Smarty version 3.1.27, created on 2018-02-01 23:23:48
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/proveedor/subasta_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20535375535a73e7d4d4bd72_42825448%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c16c1cfc4b70d56eec139f8722411c03d77a039c' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/proveedor/subasta_tabla.tpl',
      1 => 1516575934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20535375535a73e7d4d4bd72_42825448',
  'variables' => 
  array (
    'lista' => 0,
    'i' => 0,
    'l' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a73e7d502d7c8_51983203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a73e7d502d7c8_51983203')) {
function content_5a73e7d502d7c8_51983203 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20535375535a73e7d4d4bd72_42825448';
?>
<div class="table-responsive box-red1 tablared1">

	<table class="table table-bordered table-hover datatable">

		<thead>

			<tr>

				<th width="10">N°</th>

				<th width="140">Tipo de subasta</th>

				<th width="90">Categoría</th>

				<th width="150">Producto / Servicio</th>

				<th width="70">Cliente</th>

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

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['cliente'];?>
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

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subasta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
codigo" method="post">
      <div class="modal-body">
      	<div class="row">
      		<div class="form-group col-sm-12 col-md-12">
      			<div class="response"></div>
      		</div>
      		<div class="form-group col-sm-12 col-md-12">

	            <label>Código de la subasta:</label>

	            <div class="input-group">

	                <span class="input-group-addon mat-icoemail1">

	                    <i class="material-icons">code</i>

	                </span>

	                <input id="valor" type="text" class="form-control" name="codigo" placeholder="">

	            </div>

	        </div>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </div>
      </form>
    </div>
  </div>
</div><?php }
}
?>