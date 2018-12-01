<?php /* Smarty version 3.1.27, created on 2017-12-22 16:56:47
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/cliente/estatus.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14974975235a3d7f9f19e795_63020764%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc6bfe58bc6151f2d95bcd4654c5645b7f0e0c3' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/cliente/estatus.tpl',
      1 => 1513979805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14974975235a3d7f9f19e795_63020764',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a3d7f9f27f359_72256057',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3d7f9f27f359_72256057')) {
function content_5a3d7f9f27f359_72256057 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14974975235a3d7f9f19e795_63020764';
?>
<div class="content-wrapper">
   <section class="content-header">
      <h1>Estatus <small>Informe</small></h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Estatus</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-md-6">
            <div class="box box-info">
               <div class="box-header with-border">
                  <h3 class="box-title">Historial de Posturas</h3>

                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
               </div>
               <div class="box-body">
                  <div class="table-responsive">
                     <table class="table no-margin">
                        <thead>
                           <tr>
                              <th>Hora de la postura</th>
                              <th>Postor</th>
                              <th>Postura</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>4:11:10 p.m</td>
                              <td>Postor 1</td>
                              <td>9,900</td>
                           </tr>
                           <tr>
                              <td>4:11:10 p.m</td>
                              <td>Postor 1</td>
                              <td>9,900</td>
                           </tr>
                           <tr>
                              <td>4:11:10 p.m</td>
                              <td>Postor 1</td>
                              <td>9,900</td>
                           </tr>
                           <tr>
                              <td>4:11:10 p.m</td>
                              <td>Postor 1</td>
                              <td>9,900</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="box box-info">
               <div class="box-header with-border">
                  <h3 class="box-title">Tabla de Posiciones</h3>

                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
               </div>
               <div class="box-body">
                  <div class="table-responsive">
                     <table class="table no-margin">
                        <thead>
                           <tr>
                              <th>Posición</th>
                              <th>Postor</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>Postor 1</td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Postor 2</td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>Postor 3</td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>Postor 4</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div><?php }
}
?>