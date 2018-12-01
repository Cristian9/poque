<?php /* Smarty version 3.1.27, created on 2017-12-19 17:32:47
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/cliente_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5578169215a39938fc79f47_41684909%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '512b0efdf915ce9fa9d60325b962ab99698cd120' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/cliente_form.tpl',
      1 => 1513665604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5578169215a39938fc79f47_41684909',
  'variables' => 
  array (
    'registro' => 0,
    'sectores' => 0,
    'd' => 0,
    'rubros' => 0,
    'p' => 0,
    'departamentos' => 0,
    'provincias' => 0,
    'distritos' => 0,
    'categorias' => 0,
    'o' => 0,
    'p_productos' => 0,
    'l' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a3993901b7911_75825097',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3993901b7911_75825097')) {
function content_5a3993901b7911_75825097 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5578169215a39938fc79f47_41684909';
?>
<div class="row">
    <div class="form-group col-sm-4 col-md-4">
        <label>Usuario:</label>
        <div class="input-group">
            <span class="input-group-addon">
                <b>cli_</b>
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
        <div class="form-group col-sm-6 col-md-6">
            <label>RUC:</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-bars"></i>
                </span>
                <input type="text" class="form-control" name="ruc" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['n_documento'];
}?>">
            </div>
        </div>

        <div class="form-group col-sm-6 col-md-6">
            <label>Nombre:</label>
            <div class="input-group">
                <span class="input-group-addon mat-iconame1">
                    <i class="material-icons">content_paste</i>
                </span>
                <input type="text" class="form-control" name="nombre" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];
}?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6 col-md-6">
            <label>Email:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_1</i>
                </span>
                <input type="text" class="form-control" name="email" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['email'];
}?>">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-6">
            <label>Contacto:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icontacto1">
                    <i class="material-icons">contact_phone</i>
                </span>
                <input type="text" class="form-control" name="contacto" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['contacto'];
}?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6 col-md-6">
            <label>Teléfono:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icophone1">
                    <i class="material-icons">phone</i>
                </span>
                <input type="text" class="form-control" name="telefono" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['telefono'];
}?>">
            </div>
        </div>

        <div class="form-group col-sm-6 col-md-6">
            <label>Celular:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomobil1">
                    <i class="material-icons">stay_primary_portrait</i>
                </span>
                <input type="text" class="form-control" name="celular" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['celular'];
}?>">
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Sector:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="sector" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['sectores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['sector_id'] == $_smarty_tpl->tpl_vars['d']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
                </select>
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Rubro:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="rubro" name="rubro" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['rubros']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['rubro_id'] == $_smarty_tpl->tpl_vars['p']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
                </select>
            </div>
        </div>

    </div>
    
</div>
<div class="boxround1">
    <div class="row">
        <div class="form-group col-sm-4 col-md-4">
            <label>Departamento:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="departamento" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['departamentos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['departamento_id'] == $_smarty_tpl->tpl_vars['d']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
                </select>
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Provincia:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="provincia" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['provincias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['provincia_id'] == $_smarty_tpl->tpl_vars['p']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
                </select>
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Distrito:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="distrito" name="distrito" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['distritos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['distrito_id'] == $_smarty_tpl->tpl_vars['d']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-12 col-md-12">
            <label>Dirección:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">place</i>
                </span>
                <input type="text" class="form-control" name="direccion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['direccion'];
}?>">
            </div>
        </div>
    </div>
</div>

<div class="boxround1">
    <legend>Productos / Servicios</legend>
    <div class="row">
        <div class="form-group col-sm-6 col-md-3">
            <label>Categoria:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="categoria" class="form-control">
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
"><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-3">
            <label>Producto / Servicio:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="producto" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 col-md-2">
            <a class="btn btn-primary add-producto">
                <i class="fa fa-plus"></i>
            </a>
            
        </div>
        <div class="col-sm-6 col-md-6">
            <table id="productos" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="150">Categoría</th>
                        <th width="150">Producto / Servicio</th>
                        <th width="90">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->tpl_vars['p_productos']->value;
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
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value['categoria'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['l']->value['producto'];?>
</td>
                        <td class="text-center">
                            <a class="btn btn-danger delete-item" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/cliente/eliminar_producto" data-id="<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
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
</div><?php }
}
?>