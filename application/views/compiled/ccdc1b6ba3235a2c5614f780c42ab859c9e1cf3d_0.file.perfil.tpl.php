<?php /* Smarty version 3.1.27, created on 2018-03-16 19:35:08
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/plantilla/perfil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1356823165aac62bc48d579_39150224%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccdc1b6ba3235a2c5614f780c42ab859c9e1cf3d' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/plantilla/perfil.tpl',
      1 => 1508655376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1356823165aac62bc48d579_39150224',
  'variables' => 
  array (
    'modulo' => 0,
    'get_url' => 0,
    'pagina' => 0,
    'base_url' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aac62bcabbe83_76427422',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aac62bcabbe83_76427422')) {
function content_5aac62bcabbe83_76427422 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1356823165aac62bc48d579_39150224';
?>
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Modulo
         <small><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
listar"><i class="fa fa-list"></i> Listar <?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</a></li>
         <li class="active"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</li>
      </ol>
    </section>

   <section class="content">
      <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
general/usuario/perfil" method="post">
         <div class="box box-danger">
            <div class="box-body">
               <div class="response"></div>
                  <div class="boxround1">
                     <div class="row">
                        <div class="form-group col-sm-6 col-md-6">
                           <label>Nombre:</label>
                              <div class="input-group">
                                 <span class="input-group-addon mat-iconame1">
                                      <i class="material-icons">person_outline</i>
                                  </span>
                                  <input type="text" class="form-control" name="nombre" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];
}?>">
                              </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                           <label>Usuario:</label>
                              <div class="input-group">
                                 <span class="input-group-addon mat-icoemail1">
                                      <i class="material-icons">mail_outline</i>
                                  </span>
                                  <input type="text" class="form-control" name="usuario" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['usuario'];
}?>">
                              </div>
                        </div>
                     </div>
                  </div>

                  <div class="boxround1">
                     <div class="row">
                        <div class="form-group col-sm-6 col-md-6">
                           <label>Clave:</label>
                              <div class="input-group">
                                 <span class="input-group-addon mat-icomap1">
                                      <i class="material-icons">lock</i>
                                 </span>
                                 <input type="password" class="form-control" name="clave">
                              </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                           <label>Repetir Clave:</label>
                              <div class="input-group">
                                 <span class="input-group-addon mat-icomap1">
                                      <i class="material-icons">lock</i>
                                 </span>
                                 <input type="password" class="form-control" name="reclave">
                              </div>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="box-footer">
               <button type="submit" class="btn btn-danger save">Guardar</button>
               <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['id'];
}?>">
            </div>
         </div>
      </form>
   </section>
</div><?php }
}
?>