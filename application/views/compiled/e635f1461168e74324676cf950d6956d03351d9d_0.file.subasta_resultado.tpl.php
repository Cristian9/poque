<?php /* Smarty version 3.1.27, created on 2018-02-28 23:04:41
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/subasta_resultado.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12799593685a977bd92b2fb0_64867492%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e635f1461168e74324676cf950d6956d03351d9d' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/subasta_resultado.tpl',
      1 => 1519877079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12799593685a977bd92b2fb0_64867492',
  'variables' => 
  array (
    'registro' => 0,
    'base_url' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a977bd95724e1_96088773',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a977bd95724e1_96088773')) {
function content_5a977bd95724e1_96088773 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12799593685a977bd92b2fb0_64867492';
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
echo formato_fecha($_smarty_tpl->tpl_vars['registro']->value['f_inicio'],'hora');
}?></p>

    </div>

</div>

<div class="row">

    <div class="form-group col-sm-4 col-md-2">

        <label>Producto:</label>

    </div>

    <div class="form-group col-sm-4 col-md-4">

        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['producto'];?>
 - <?php echo $_smarty_tpl->tpl_vars['registro']->value['descripcion'];
}?></p>

    </div>

    <div class="form-group col-sm-4 col-md-3">

        <label>Duración:</label>

    </div>

    <div class="form-group col-sm-4 col-md-2">

        <p><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['duracion'];?>
 minutos<?php }?></p>

    </div>

</div>

<div class="boxround1" ng-app="app" ng-controller="appcontroller">
    <div class="row">
        <div class="col-md-8">
            <canvas id="line" class="chart chart-line" chart-data="chartPreciodata" chart-labels="chartPreciolabels" chart-series="chartPrecioseries" chart-options="chartPrecioOpcion" chart-dataset-override="chartPrecioEjes" chart-click="onClick"></canvas>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <label>Precio base:</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo $_smarty_tpl->tpl_vars['registro']->value['precio_base'];?>
</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Valor de reserva:</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo $_smarty_tpl->tpl_vars['registro']->value['precio_reserva'];?>
</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Valor actual:</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo $_smarty_tpl->tpl_vars['registro']->value['ultima_puja'];?>
</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Beneficio (Ahorro):</label>
                </div>
                <div class="col-md-6">
                    <p><?php echo $_smarty_tpl->tpl_vars['registro']->value['moneda_simbolo'];?>
 <?php echo $_smarty_tpl->tpl_vars['registro']->value['precio_base']-$_smarty_tpl->tpl_vars['registro']->value['ultima_puja'];?>
 (<?php echo ($_smarty_tpl->tpl_vars['registro']->value['precio_base']-$_smarty_tpl->tpl_vars['registro']->value['ultima_puja'])*100/$_smarty_tpl->tpl_vars['registro']->value['precio_base'];?>
%)</p>
                </div>
            </div>
            <div class="row">
                
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