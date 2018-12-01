<?php /* Smarty version 3.1.27, created on 2018-04-13 12:18:24
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/proveedor/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17936374235ad0e660968df6_74192734%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3144ee6958774a628e435d30d11704457099e7b1' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/proveedor/home.tpl',
      1 => 1523638313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17936374235ad0e660968df6_74192734',
  'variables' => 
  array (
    'get_url' => 0,
    'subastas' => 0,
    'registro' => 0,
    'sectores' => 0,
    'd' => 0,
    'rubros' => 0,
    'p' => 0,
    'departamentos' => 0,
    'provincias' => 0,
    'distritos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ad0e660d40dc4_38057478',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad0e660d40dc4_38057478')) {
function content_5ad0e660d40dc4_38057478 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17936374235ad0e660968df6_74192734';
?>
<div class="content-wrapper">

   <section class="content-header">
      <h1>
         Dashboard 
         <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Dashboard</li>
      </ol>
   </section>
   <section class="content">
    <div class="box box-danger">
      <div class="box-body">
          
          <div class="row">
              <div class="col-md-3">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
subasta/listar">
                    <div class="small-box bg-gris" style="min-height: 107px;">
                      <div class="inner">
                        <h3>Hoy :</h3>
                        <h4><?php echo $_smarty_tpl->tpl_vars['subastas']->value;?>
 subastas</h4>
                        <p></p>
                      </div>
                      <div class="icon">
                        <i class="fa fa-users"></i>
                      </div>
                    </div>
                  </a>
              </div>
          </div>
          
          
          
          

        <div class="bothab-align1">
          <button type="button" id="habiform" class="btn bothab1" style="background-color: #f39c12; border-color: #f39c12;"><span class="btx1">Editar</span><span class="btx2">Bloquear</span></button>
        </div>

        <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
perfil/editar" method="post">
          <div class="response"></div>
          <div class="boxround1">
              <div class="row">
                  <div class="form-group col-sm-6 col-md-6">
                      <label>RUC:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon">
                              <i class="fa fa-bars"></i>
                          </span>
                          <input type="text" class="form-control" name="ruc" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['n_documento'];
}?>" >
                      </div>
                  </div>

                  <div class="form-group col-sm-6 col-md-6">
                      <label>Nombre:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-iconame1">
                              <i class="material-icons">person_outline</i>
                          </span>
                          <input type="text" class="form-control" name="nombre" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];
}?>" >
                      </div>
                  </div>

              </div>



              <div class="row">
                  <div class="form-group col-sm-6 col-md-6">
                      <label>Email:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icoemail1">
                              <i class="material-icons">mail_outline</i>
                          </span>
                          <input type="text" class="form-control" name="email" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['email'];
}?>" >
                      </div>
                  </div>

                  <div class="form-group col-sm-6 col-md-6">
                      <label>Contacto:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icontacto1">
                              <i class="material-icons">contact_phone</i>
                          </span>
                          <input type="text" class="form-control" name="contacto" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['contacto'];
}?>" >
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-sm-4 col-md-4">
                      <label>Teléfono:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icophone1">
                              <i class="material-icons">phone</i>
                          </span>
                          <input type="text" class="form-control" name="telefono" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['telefono'];
}?>" >
                      </div>
                  </div>

                  <div class="form-group col-sm-4 col-md-4">
                      <label>Anexos:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icophone1">
                              <i class="material-icons">contacts</i>
                          </span>
                          <input type="text" class="form-control" name="anexo" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['anexo'];
}?>" >
                      </div>
                  </div>

                  <div class="form-group col-sm-4 col-md-4">
                      <label>Celular:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomobil1">
                              <i class="material-icons">stay_primary_portrait</i>
                          </span>
                          <input type="text" class="form-control" name="celular" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['celular'];
}?>" >
                      </div>
                  </div>

                  <div class="form-group col-sm-4 col-md-4">
                      <label>Sector:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">business</i>
                          </span>
                          <select id="sector" class="form-control" >
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
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">shopping_cart</i>
                          </span>
                          <select id="rubro" name="rubro" class="form-control" >
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
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">add_location</i>
                          </span>
                          <select id="departamento" class="form-control" >
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
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">add_location</i>
                          </span>
                          <select id="provincia" class="form-control" >
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
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">add_location</i>
                          </span>
                          <select id="distrito" name="distrito" class="form-control" >
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
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">place</i>
                          </span>
                          <input type="text" class="form-control" name="direccion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['direccion'];
}?>" >
                      </div>
                  </div>
              </div>
          </div>
          
          <button type="submit" class="btn btn-danger save"  style="background-color: #f39c12; border-color: #f39c12;"><b>Guardar</b></button>
        </form>
      </div>
    </div>
  </section>
</div><?php }
}
?>