<div class="row">



    <div class="form-group col-sm-4 col-md-2">



        <label>Código:</label>



    </div>



    <div class="form-group col-sm-4 col-md-4">



        <p>{if isset($registro)}{$registro.codigo}{/if}</p>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <label>Fecha de subasta:</label>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <p>{if isset($registro)}{$registro.f_inicio|formato_fecha:'solo_fecha'}{/if}</p>



    </div>



</div>



<div class="row">



    <div class="form-group col-sm-4 col-md-2">



        <label>Cliente:</label>



    </div>



    <div class="form-group col-sm-4 col-md-4">



        <p>{if isset($registro)}{$registro.cliente}{/if}</p>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <label>Hora de inicio:</label>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <p>{if isset($registro)}{$registro.f_inicio|formato_fecha:'hora_completa'}{/if}</p>



    </div>



</div>



<div class="row">



    <div class="form-group col-sm-4 col-md-2">



        <label>Producto:</label>



    </div>



    <div class="form-group col-sm-4 col-md-4">



        <p>{if isset($registro)}{$registro.producto}{/if}</p>



    </div>



    <div class="form-group col-sm-4 col-md-3">



        <label>Hora de cierre:</label>



    </div>



    <div class="form-group col-sm-4 col-md-2">



        <p>{if isset($registro)}{$registro.hora_cierre|formato_fecha:'hora_completa'}{/if}</p>



    </div>



</div>

<div class="row">
    <div class="form-group col-sm-4 col-md-2">



        <label>Descripción:</label>



    </div>



    <div class="form-group col-sm-4 col-md-4">



        <p>{if isset($registro)}{$registro.descripcion}{/if}</p>



    </div>
    <div class="form-group col-sm-4 col-md-3">



        <label>Tipo de subasta:</label>



    </div>



    <div class="form-group col-sm-4 col-md-2">



        <p>{if isset($registro)}{$registro.tipo_subasta}{/if}</p>



    </div>

</div>



<div class="boxround1" ng-app="app" ng-controller="appcontroller">

    <div class="row">

        <div class="col-md-8">
        {if $registro.tipo_subasta_id == 1} {* Multicriterio *}
            <canvas id="line" class="chart chart-line" chart-data="data" chart-labels="labels" chart-series="series" chart-options="chartPrecioOpcion" chart-dataset-override="chartPrecioEjes" chart-click="onClick"></canvas>
        {else}
        {*
            <canvas id="line" class="chart chart-line" chart-data="chartPreciodata" chart-labels="chartPreciolabels" chart-series="chartPrecioseries" chart-options="chartPrecioOpcion" chart-dataset-override="chartPrecioEjes" chart-click="onClick"></canvas>
        *}
            <canvas id="line" class="chart chart-line" chart-data="chartPujadata" chart-labels="chartPujalabels" chart-series="chartPujaseries" chart-options="chartPrecioOpcion" chart-dataset-override="chartPrecioEjes" chart-click="onClick"></canvas>
            
        {/if}
        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-6">

                    <label>Precio base:</label>

                </div>

                <div class="col-md-6">

                    <p>{$registro.moneda_simbolo} {$registro.precio_base|number_format:'2':'.':','}</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Valor de reserva:</label>

                </div>

                <div class="col-md-6">

                    <p>{$registro.moneda_simbolo} {$registro.precio_reserva|number_format:'2':'.':','}</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Ahorro esperado:</label>

                </div>

                <div class="col-md-6">

                    <p>
                        {$registro.moneda_simbolo} {($registro.precio_base - $registro.precio_reserva)|number_format:'2':'.':','} ({(($registro.precio_base - $registro.precio_reserva) * 100 / $registro.precio_base)|number_format:'2':'.':','}%)</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>N° de pujas:</label>

                </div>

                <div class="col-md-6">

                    <p>{$registro.n_pujas} </p>

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

                    <p>{$registro.ganador.proveedor}</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Seudónimo:</label>

                </div>

                <div class="col-md-6">

                    <p>{$registro.ganador.alias}</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Puntaje:</label>

                </div>

                <div class="col-md-6">

                    <p>{$registro.ganador.puntaje}</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Valor actual:</label>

                </div>

                <div class="col-md-6">

                    <p>{$registro.moneda_simbolo} {$registro.precio_final|number_format:'2':'.':','}</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Ahorro actual:</label>

                </div>

                <div class="col-md-6">

                    <p>{$registro.moneda_simbolo} {($registro.precio_base - $registro.precio_final)|number_format:'2':'.':','} ({(($registro.precio_base - $registro.precio_final) * 100 / $registro.precio_base)|number_format:'2':'.':','}%)</p>

                </div>

            </div>

            <div class="row">

                <div class="col-md-6">

                    <label>Última postura:</label>

                </div>

                <div class="col-md-6">

                    <p>{$registro.ganador.hora_oferta}</p>

                </div>

            </div>

        </div>

    </div>

</div>





{*Angular*}

<script src="{$base_url}public/js/angular.js"></script>

{*Angular Chart*}

<script type="text/javascript" src="{$base_url}public/plugins/angular-chart/chart.js"></script>

<script type="text/javascript" src="{$base_url}public/plugins/angular-chart/angular-chart.js"></script>



<script type="text/javascript">
    var app = angular.module('app', ["chart.js"]);
    app.controller('appcontroller', function($scope, $http, $interval){
        $http.get(base_url + 'general/subasta/estadistica_completa/{$id}').then(function (mydata) {
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
</script>

