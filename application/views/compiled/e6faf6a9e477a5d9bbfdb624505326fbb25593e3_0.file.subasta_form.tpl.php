<?php /* Smarty version 3.1.27, created on 2018-01-31 17:09:37
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\manager\subasta_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:45165a723ea146c167_96799400%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6faf6a9e477a5d9bbfdb624505326fbb25593e3' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\manager\\subasta_form.tpl',
      1 => 1517436576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45165a723ea146c167_96799400',
  'variables' => 
  array (
    'registro' => 0,
    'clientes' => 0,
    'o' => 0,
    'categorias' => 0,
    'productos' => 0,
    'monedas' => 0,
    'tipo_descuentos' => 0,
    'proveedores' => 0,
    's_proveedores' => 0,
    'l' => 0,
    'base_url' => 0,
    'criterios' => 0,
    's_criterios' => 0,
    'total' => 0,
    '' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a723ea162e2f4_41293231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a723ea162e2f4_41293231')) {
function content_5a723ea162e2f4_41293231 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45165a723ea146c167_96799400';
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

            <label>Cliente:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icomap1">

                    <i class="material-icons">add_location</i>

                </span>

                <select class="form-control" name="cliente">

                    <option value="" selected="" disabled>Seleccione una opción</option>

                    <?php
$_from = $_smarty_tpl->tpl_vars['clientes']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['cliente_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>

                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>

                </select>

            </div>

        </div>



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

        <div class="form-group col-sm-6 col-md-4">

            <label>Bases:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icontacto1">

                    <i class="material-icons">contact_phone</i>

                </span>

                <input type="file" class="form-control" name="bases" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['bases'];
}?>">

            </div>

        </div>

    </div>

</div>
<div class="row">
    
    <div class="col-md-6">
        <div class="boxround1">

        	<legend>Proveedores</legend>

            <div class="row">

                <div class="form-group col-sm-6 col-md-6">

                    <label>Proveedor:</label>

                    <div class="input-group">

                        <span class="input-group-addon mat-icomap1">

                            <i class="material-icons">add_location</i>

                        </span>

                        <select id="proveedor" class="form-control">

                            <option value="" selected="" disabled>Seleccione una opción</option>

                            <?php
$_from = $_smarty_tpl->tpl_vars['proveedores']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>

                            <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>

                        </select>

                    </div>

                </div>

                <div class="form-group col-sm-4 col-md-4">

                    <label>Alias:</label>

                    <div class="input-group">

                        <span class="input-group-addon mat-icomap1">

                            <i class="material-icons">person</i>

                        </span>

                        <input id="alias" type="text" class="form-control" name="alias" placeholder="">

                    </div>

                </div>

                <div class="col-sm-2 col-md-2">

                    <a class="btn btn-primary add-proveedor" data-name="proveedor" data-div="provee" data-select="proveedor">

                        <i class="fa fa-plus"></i>

                    </a>

                </div>

                <div class="col-sm-12 col-md-12">

                	<table id="proveedores" class="table table-bordered table-hover">

        		        <thead>

        					<tr>

                                <th width="100">Proveedor</th>
        						
                                <th width="100">Alias</th>

        						<th width="50">Acción</th>

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

        						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['alias'];?>
</td>

        						<td class="text-center">

                                    <a class="btn btn-danger delete-item" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/subasta/eliminar_proveedor" data-id="<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
">

                                        <i class="fa fa-trash"></i>

                                    </a>

                                </td>

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
    </div>

    <div class="col-md-6">

        <div class="boxround1">

        	<legend>Criterios</legend>

            <div class="row">

                <div class="form-group col-sm-6 col-md-6">

                    <label>Criterio:</label>

                    <div class="input-group">

                        <span class="input-group-addon mat-icomap1">

                            <i class="material-icons">add_location</i>

                        </span>

                        <select id="criterio" class="form-control">

                            <option value="" selected="" disabled>Seleccione una opción</option>

                            <?php
$_from = $_smarty_tpl->tpl_vars['criterios']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>

                            <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>

                        </select>

                    </div>

                </div>

                <div class="form-group col-sm-4 col-md-4">

                    <label>Valor:</label>

                    <div class="input-group">

                        <span class="input-group-addon mat-icoemail1">

                            <i class="material-icons">filter_1</i>

                        </span>

                        <input id="valor" type="text" class="form-control" name="valor" placeholder="">

                    </div>

                </div>

                <div class="col-sm-2 col-md-2">

                	<a class="btn btn-primary add-criterio">

                        <i class="fa fa-plus"></i>

                    </a>

                </div>

                <div class="col-sm-12 col-md-12">

                	<table id="criterios" class="table table-bordered table-hover">

        		        <thead>

        					<tr>

        						<th width="150">Criterio</th>

        						<th width="150">Ponderado (%)</th>

        						<th width="90">Acción</th>

        					</tr>

        				</thead>

        				<tbody>

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

        					<tr>

        						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['criterio'];?>
</td>

        						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['valor'];?>
</td>

        						<td class="text-center">

                                    <a class="btn btn-danger delete-item" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/subasta/eliminar_criterio" data-id="<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
">

                                        <i class="fa fa-trash"></i>

                                    </a>

                                </td>

        					</tr>

        					<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

        				</tbody>

                	</table>

                    <div>

                        <input type="hidden" id="total" name="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">

                        Total

                        <span id="total_text"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
%</span>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {?>
<div class="boxround1">
    <legend>Puntaje de proveedores</legend>
    <div class="row">
        <div class="form-group col-sm-12 col-md-12">
            <table id="criterio_proveedor" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="100">Criterio</th>
                        <th width="100">Ponderado</th>
                        <?php
$_from = $_smarty_tpl->tpl_vars['s_proveedores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['']->value] = new Smarty_Variable;
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['']->value]->_loop = false;
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value => $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['']->value]->value) {
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['']->value]->_loop = true;
$foreach_$_smarty_tpl->tpl_vars['']->value_Sav = $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['']->value];
?>
                            <th width="100"><?php echo $_smarty_tpl->tpl_vars['l']->value['proveedor'];?>
</th>
                        <?php
$_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['']->value] = $foreach_$_smarty_tpl->tpl_vars['']->value_Sav;
}
?>
                    </tr>
                </thead>
                <tbody>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php }
}
}
?>