<?php /* Smarty version 3.1.27, created on 2018-02-01 23:23:12
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/subasta_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17100295605a73e7b0968fd4_38260840%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec8b8bccc07529a6dfcea7ed4dd84cb9bf60b80' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/subasta_tabla.tpl',
      1 => 1517443726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17100295605a73e7b0968fd4_38260840',
  'variables' => 
  array (
    'get_url' => 0,
    'categorias' => 0,
    'o' => 0,
    'filtro' => 0,
    'lista' => 0,
    'i' => 0,
    'l' => 0,
    'f_actual' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a73e7b0bf8918_08695065',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a73e7b0bf8918_08695065')) {
function content_5a73e7b0bf8918_08695065 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17100295605a73e7b0968fd4_38260840';
?>
<div class="botones-myfilter">
    <form class="filtro" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
listar" method="post">
        <div class="row">
            <div class="form-group col-sm-2">
                <label for="firstname" class="sr-only"></label>
                <select class="form-control selectpicker" name="categoria" data-live-search="true" onchange="this.form.submit()">
                    <option selected value="">Categoria</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['filtro']->value['categoria_id']) && $_smarty_tpl->tpl_vars['filtro']->value['categoria_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>

                    </option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
    </form>
</div>
<div class="table-responsive box-red1 tablared1">

	<table class="table table-bordered table-hover datatable">

		<thead>

			<tr>

				<th width="10">N°</th>

				<th width="150">Producto / Servicio</th>

				<th width="70">Cliente</th>

				<th width="50">Precio Base</th>

				<th width="110">Incremento / Decremento</th>

				<th width="100">Fecha de subasta</th>

				<th width="80">Estado</th>

				<th width="100">Detalles</th>

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

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['producto'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['cliente'];?>
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

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['f_inicio'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['estado'];?>
</td>

				<td class="text-center">
					<?php echo detalle($_smarty_tpl->tpl_vars['l']->value['id'],'bases|ver|resultado',$_smarty_tpl->tpl_vars['get_url']->value);?>

				</td>

				<td class="text-center">

					<?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'editar|denegar|permitir',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>


					<?php if ($_smarty_tpl->tpl_vars['l']->value['f_inicio'] > $_smarty_tpl->tpl_vars['f_actual']->value) {?>

					<?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'eliminar',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>


					<?php }?>

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
code" method="post">
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