<?php /* Smarty version 3.1.27, created on 2018-01-09 20:16:23
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\cliente\subasta_detalle.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:70655a556967b12815_86838311%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1fcab6e3d3d9c28c7433f8315dab6da7d215968' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\cliente\\subasta_detalle.tpl',
      1 => 1515546974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70655a556967b12815_86838311',
  'variables' => 
  array (
    'registro' => 0,
    's_criterios' => 0,
    'l' => 0,
    's_proveedores' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a556967c07573_88547163',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a556967c07573_88547163')) {
function content_5a556967c07573_88547163 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '70655a556967b12815_86838311';
?>
<div class="row">
    <div class="form-group col-sm-4 col-md-4">
        <label>Código:</label>
        <div class="input-group">
            <span class="input-group-addon">
                <b>ID</b>
            </span>
            <input type="text" readonly="readonly" class="form-control" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];
}?>">
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
                <input type="datetime-local" readonly="readonly" class="form-control" name="f_inicio" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
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
                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['duracion'];
} else { ?>20<?php }?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-4 col-md-4">
            <label>Categoría:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">bookmark</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['categoria'];
} else { ?>20<?php }?>">
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Producto / Servicio:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">assignment_turned_in</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['producto'];
} else { ?>20<?php }?>">
            </div>
        </div>

        <div class="form-group col-sm-6 col-md-4">
            <label>Descripción:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_1</i>
                </span>
                <textarea readonly="readonly" class="form-control" name="descripcion"><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descripcion'];
}?></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6 col-md-4">
            <label>Moneda:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">local_atm</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['moneda'];
}?>">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Precio Base:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">monetization_on</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['precio_base'];
}?>">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Tipo de descuento:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">add_location</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['tipo_descuento'];
}?>">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Descuento minimo:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icontacto1">
                    <i class="material-icons">contact_phone</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="descuento_minimo" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
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