<?php /* Smarty version 3.1.27, created on 2017-12-20 18:49:26
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/cliente/subasta_detalle.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20812674955a3af706e75717_94182688%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '469e6cbc0d47cb11b26c60d49c7d5d33852452cd' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/cliente/subasta_detalle.tpl',
      1 => 1513801404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20812674955a3af706e75717_94182688',
  'variables' => 
  array (
    'registro' => 0,
    'categorias' => 0,
    'o' => 0,
    'productos' => 0,
    'monedas' => 0,
    'tipo_descuentos' => 0,
    's_criterios' => 0,
    'l' => 0,
    's_proveedores' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a3af70730bc64_16248103',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3af70730bc64_16248103')) {
function content_5a3af70730bc64_16248103 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20812674955a3af706e75717_94182688';
?>
<div class="row">
    <div class="form-group col-sm-4 col-md-4">
        <label>Código:</label>
        <div class="input-group">
            <span class="input-group-addon">
                <b>ID</b>
            </span>
            <?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {?>
                <input type="text" readonly="readonly" class="form-control" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];
}?>">
            <?php } else { ?>
                <input type="text" class="form-control" name="codigo" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];
}?>">
            <?php }?>
        </div>
    </div>
</div>

<div class="boxround1">
    <div class="row">

        <div class="form-group col-sm-4 col-md-4">
            <label>Fecha:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">alarm</i>
                </span>
                <input type="datetime-local" class="form-control" name="f_inicio" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo formato_fecha($_smarty_tpl->tpl_vars['registro']->value['f_inicio'],'datetime_local');
}?>">
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Duración (min):</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">timer</i>
                </span>
                <input type="text" class="form-control" name="duracion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['duracion'];
} else { ?>20<?php }?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-4 col-md-4">
            <label>Categoría:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="categoria" class="form-control" name="categoria">
                    <option value="" selected="" disabled>Seleccione una opción</option>
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['categoria_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Producto / Servicio:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="producto" class="form-control" name="producto">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['productos']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['producto_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>

        <div class="form-group col-sm-6 col-md-4">
            <label>Descripción:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_1</i>
                </span>
                <textarea class="form-control" name="descripcion"><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descripcion'];
}?></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6 col-md-4">
            <label>Moneda:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">local_atm</i>
                </span>
                <select class="form-control" name="moneda">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['monedas']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['moneda_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Precio Base:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_1</i>
                </span>
                <input type="text" class="form-control" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['precio_base'];
}?>">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Tipo de descuento:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select class="form-control" name="tipo_descuento">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['tipo_descuentos']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['tipo_descuento_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Descuento minimo:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icontacto1">
                    <i class="material-icons">contact_phone</i>
                </span>
                <input type="text" class="form-control" name="descuento_minimo" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descuento_minimo'];
}?>">
            </div>
        </div>
    </div>
</div>
<div class="boxround1">
	<legend>Proveedores</legend>
    <div class="row">
        <div class="col-sm-12 col-md-12">
        	<table id="provee" class="table table-bordered table-hover">
		        <thead>
					<tr>
						<th width="150">Proveedor</th>
                        <?php
$_from = $_smarty_tpl->tpl_vars['s_criterios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
						<th width="50"><?php echo $_smarty_tpl->tpl_vars['l']->value['criterio'];?>
</th>
                        <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
					</tr>
				</thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->tpl_vars['s_proveedores']->value;
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
						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['proveedor'];?>
</td>
                        <?php
$_from = $_smarty_tpl->tpl_vars['l']->value['criterios'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
                        <td><?php if (isset($_smarty_tpl->tpl_vars['c']->value)) {
echo $_smarty_tpl->tpl_vars['c']->value['valor'];
} else { ?>0<?php }?></td>
                        <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
					</tr>
					<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
				</tbody>
        	</table>
        </div>
    </div>
</div>
<?php }
}
?>