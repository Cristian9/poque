<?php /* Smarty version 3.1.27, created on 2018-11-29 20:26:58
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\manager\subasta_resultado.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14757402835c0091e202f054_24623357%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f29ef729ba3e9faf0a7f22775043133154d78c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\manager\\subasta_resultado.tpl',
      1 => 1523757028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14757402835c0091e202f054_24623357',
  'variables' => 
  array (
    'registro' => 0,
    'base_url' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c0091e20cdc49_50061401',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c0091e20cdc49_50061401')) {
function content_5c0091e20cdc49_50061401 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14757402835c0091e202f054_24623357';
?>
<div class="row">



    <div class="form-group col-sm-4 col-md-2">



        <label>Código:</label>



    </div>



    <div class="form-group col-sm-4 col-md-4">



        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];
}?></p>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <label>Fecha de subasta:</label>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo formato_fecha($_smarty_tpl->tpl_vars['registro']->value['f_inicio'],'solo_fecha');
}?></p>



    </div>



</div>



<div class="row">



    <div class="form-group col-sm-4 col-md-2">



        <label>Cliente:</label>



    </div>



    <div class="form-group col-sm-4 col-md-4">



        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['cliente'];
}?></p>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <label>Hora de inicio:</label>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo formato_fecha($_smarty_tpl->tpl_vars['registro']->value['f_inicio'],'hora_completa');
}?></p>



    </div>



</div>



<div class="row">



    <div class="form-group col-sm-4 col-md-2">



        <label>Producto:</label>



    </div>



    <div class="form-group col-sm-4 col-md-4">



        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['producto'];
}?></p>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <label>Hora de cierre:</label>



    </div>



    <div class="form-group col-sm-4 col-md-2">



        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo formato_fecha($_smarty_tpl->tpl_vars['registro']->value['hora_cierre'],'hora_completa');
}?></p>



    </div>



</div>

<div class="row">
    <div class="form-group col-sm-4 col-md-2">



        <label>Descripción:</label>



    </div>



    <div class="form-group col-sm-4 col-md-4">



        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descripcion'];
}?></p>



    </div>
    <div class="form-group col-sm-4 col-md-3">



        <label>Tipo de subasta:</label>



    </div>



    <div class="form-group col-sm-4 col-md-2">



        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['tipo_subasta'];
}?></p>



    </div>

</div>



<div class="boxround1" ng-app="app" ng-controller="appcontroller">

    <div class="row">

        <div class="col-md-8">
        <?php if ($_smarty_tpl->tpl_vars['registro']->value['tipo_subasta_id'] == 1) {?> 
            <canvas id="line" class="chart chart-line" chart-data="data" chart-labels="labels" chart-series="series" chart-options="chartPrecioOpcion" chart-dataset-override="chartPrecioEjes" chart-click="onClick"></canvas>
        <?php } else { ?>
        
            <canvas id="line" class="chart chart-line" chart-data="chartPujadata" chart-labels="chartPujalabels" chart-series="chartPujaseries" chart-options="chartPrecioOpcion" chart-dataset-override="chartPrecioEjes" chart-click="onClick"></canvas>
            
        <?php }?>
        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-6">

                    <label>Precio base:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['registro']->value['precio_base'],'2','.',',');?>
</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Valor de reserva:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['registro']->value['precio_reserva'],'2','.',',');?>
</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Ahorro esperado:</label>

                </div>

                <div class="col-md-6">

                    <p>
                        <?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo number_format(($_smarty_tpl->tpl_vars['registro']->value['precio_base']-$_smarty_tpl->tpl_vars['registro']->value['precio_reserva']),'2','.',',');?>
 (<?php echo number_format((($_smarty_tpl->tpl_vars['registro']->value['precio_base']-$_smarty_tpl->tpl_vars['registro']->value['precio_reserva'])*100/$_smarty_tpl->tpl_vars['registro']->value['precio_base']),'2','.',',');?>
%)</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>N° de pujas:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['n_pujas'];?>
 </p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <legend style="color: red; margin-top: 20px; margin-bottom: 10px;">Ganador</legend>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Nombre:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['ganador']['proveedor'];?>
</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Seudónimo:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['ganador']['alias'];?>
</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Puntaje:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['ganador']['puntaje'];?>
</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Valor actual:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['registro']->value['precio_final'],'2','.',',');?>
</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Ahorro actual:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo number_format(($_smarty_tpl->tpl_vars['registro']->value['precio_base']-$_smarty_tpl->tpl_vars['registro']->value['precio_final']),'2','.',',');?>
 (<?php echo number_format((($_smarty_tpl->tpl_vars['registro']->value['precio_base']-$_smarty_tpl->tpl_vars['registro']->value['precio_final'])*100/$_smarty_tpl->tpl_vars['registro']->value['precio_base']),'2','.',',');?>
%)</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Última postura:</label>

                </div>

                <div class="col-md-6">

                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['ganador']['hora_oferta'];?>
</p>

                </div>

            </div>

        </div>

    </div>

</div>







<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/angular.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/angular-chart/chart.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/angular-chart/angular-chart.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
 type="text/javascript">
    var app = angular.module('app', ["chart.js"]);
    app.controller('appcontroller', function($scope, $http, $interval){
        $http.get(base_url + 'general/subasta/estadistica_completa/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').then(function (mydata) {
                    $scope.series = mydata.data[0];
                    $scope.labels = mydata.data[1];
                    $scope.data = mydata.data[2];
                    $scope.chartPrecioseries = mydata.data[0];
                    $scope.chartPreciolabels = mydata.data[1];
                    $scope.chartPreciodata = mydata.data[3];
                    $scope.chartPujaseries = mydata.data[4];
                    $scope.chartPujalabels = mydata.data[6];
                    $scope.chartPujadata = mydata.data[5];
                });
        $scope.onClick = function (points, evt) {
          console.log(points, evt);
        };
        $scope.datasetOverride = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];
        $scope.options = {
          scales: {
            yAxes: [
              {
                id: 'y-axis-1',
                type: 'linear',
                display: true,
                position: 'left'
              },
              {
                id: 'y-axis-2',
                type: 'linear',
                display: false,
                position: 'right'
              }
            ]
          }
        };
        $scope.chartPrecioEjes = [{ yAxisID: 'y-axis-1' }, { yAxisID: 'y-axis-2' }];
        $scope.chartPrecioOpcion = {
            scales: {
                yAxes: [
                    {
                        id: 'y-axis-1',
                        type: 'linear',
                        display: true,
                        position: 'left'
                    },
                    {
                        id: 'y-axis-2',
                        type: 'linear',
                        display: false,
                        position: 'right'
                    }
                ]
            }
        };
    });
<?php echo '</script'; ?>
>

<?php }
}
?>