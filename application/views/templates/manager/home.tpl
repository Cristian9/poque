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





      <div class="row">

         <div class="col-xs-12">

            <div class="box">

               <div class="box-body">

                  

               <div id="e_subasta_por_categoria"></div>

               </div>

            </div>

         </div>



         <div class="col-xs-12">

            <div class="box">

                <div class="box-body">

                    <div id="e_subasta_precio_final_ahorro_por_mes"></div>

                </div>

            </div>

         </div>



         <div class="col-xs-12">

            <div class="box">

                <div class="box-body">

                    <div id="e_precio_final_anual_categoria"></div>
                    <div class="col-md-12">
                        <h4>Suma total del percio final por categoría</h4>
                        {foreach $pfac_info as $l}
                        <div class="col-md-3">
                            {$l.name} : {$l.total}
                        </div>
                        {/foreach}
                    </div>

                </div>

            </div>

         </div>



         <div class="col-xs-12">

            <div class="box">

                <div class="box-body">

                    <div id="e_ahorro_anual_categoria"></div>
                    <div class="col-md-12">
                        <h4>Ahorro total por categoría</h4>
                        {foreach $aac_info as $l}
                        <div class="col-md-3">
                            {$l.name} : {$l.total}
                        </div>
                        {/foreach}
                    </div>

                </div>

            </div>

         </div>

         {*

         <div class="col-xs-12">

            <div class="box">

                <div class="box-body">

                    <div id="e_subasta_precio_final_por_mes"></div>

                </div>

            </div>

         </div>



         <div class="col-xs-12">

            <div class="box">

                <div class="box-body">

                    <div id="e_subasta_ahorro_por_mes"></div>

                </div>

            </div>

         </div>

         *}

         <div class="col-xs-12">

            <div class="box">

               <div class="box-body">

                  

               <div id="e_proveedor_por_sector"></div>

               </div>

            </div>

         </div>

         <div class="col-xs-12">

            <div class="box">

               <div class="box-body">

                  

               <div id="e_cliente_por_sector"></div>

               </div>

            </div>

         </div>

      </div>



   </section>

</div>







<script type="text/javascript">



Highcharts.chart('e_cliente_por_sector', {

    chart: {

        type: 'column'

    },

    title: {

        text: 'Clientes por sector'

    },

    subtitle: {

        text: 'CANTIDAD DE CIENTES POR SECTOR'

    },

    xAxis: {

        type: 'category'

    },

    yAxis: {

        title: {

            text: 'Cantidad'

        }



    },

    legend: {

        enabled: false

    },

    credits:{

        enabled: false

    },

    plotOptions: {

        series: {

            borderWidth: 0,

            dataLabels: {

                enabled: true,

                format: {literal}'{point.y}'{/literal}

            }

        }

    },



    tooltip: {

      {literal}

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> clientes<br/>'

      {/literal}

    },



    series: [{

        name: 'Sector',

        colorByPoint: true,

        data: {$e_client}

    }],

    /*

    drilldown: {

        series: [{

            name: 'Microsoft Internet Explorer',

            id: 'Microsoft Internet Explorer',

            data: [

                [

                    'v11.0',

                    24.13

                ]

            ]

        }, {

            name: 'Opera',

            id: 'Opera',

            data: [

                [

                    'v12.x',

                    0.34

                ],

                [

                    'v28',

                    0.24

                ]

            ]

        }]

    }

   */

});



Highcharts.chart('e_proveedor_por_sector', {

    chart: {

        type: 'column'

    },

    title: {

        text: 'Proveedores por sector'

    },

    subtitle: {

        text: 'CANTIDAD DE PROVEEDORES POR SECTOR'

    },

    xAxis: {

        type: 'category'

    },

    yAxis: {

        title: {

            text: 'Cantidad'

        }



    },

    legend: {

        enabled: false

    },

    credits:{

        enabled: false

    },

    plotOptions: {

        series: {

            borderWidth: 0,

            dataLabels: {

                enabled: true,

                format: {literal}'{point.y}'{/literal}

            }

        }

    },



    tooltip: {

      {literal}

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> proveedores<br/>'

      {/literal}

    },



    series: [{

        name: 'Sector',

        colorByPoint: true,

        data: {$e_prov}

    }],

    /*

    drilldown: {

        series: [{

            name: 'Microsoft Internet Explorer',

            id: 'Microsoft Internet Explorer',

            data: [

                [

                    'v11.0',

                    24.13

                ]

            ]

        }, {

            name: 'Opera',

            id: 'Opera',

            data: [

                [

                    'v12.x',

                    0.34

                ],

                [

                    'v28',

                    0.24

                ]

            ]

        }]

    }

   */

});



Highcharts.chart('e_subasta_por_categoria', {

    chart: {

        type: 'column'

    },

    title: {

        text: 'Subastas por categoría'

    },

    subtitle: {

        text: 'CANTIDAD DE SUBASTAS POR CATEGORIA'

    },

    xAxis: {

        type: 'category'

    },

    yAxis: {

        title: {

            text: 'Cantidad'

        }



    },

    legend: {

        enabled: false

    },

    credits:{

        enabled: false

    },

    plotOptions: {

        series: {

            borderWidth: 0,

            dataLabels: {

                enabled: true,

                format: {literal}'{point.y}'{/literal}

            }

        }

    },



    tooltip: {

      {literal}

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> Subastas<br/>'

      {/literal}

    },



    series: [{

        name: 'Categoría',

        colorByPoint: true,

        data: {$e_subasta}

    }],

    /*

    drilldown: {

        series: [{

            name: 'Microsoft Internet Explorer',

            id: 'Microsoft Internet Explorer',

            data: [

                [

                    'v11.0',

                    24.13

                ]

            ]

        }, {

            name: 'Opera',

            id: 'Opera',

            data: [

                [

                    'v12.x',

                    0.34

                ],

                [

                    'v28',

                    0.24

                ]

            ]

        }]

    }

   */

});



Highcharts.chart('e_subasta_precio_final_ahorro_por_mes', {

    chart: {

        type: 'column'

    },

    title: {

        text: 'Subastas del mes actual'

    },

    subtitle: {

        text: 'PRECIO FINAL Y AHORRO'

    },

    xAxis: {

        categories: {$e_subasta_por_mes},

        crosshair: true

    },

    yAxis: {

        min: 0,

        title: {

            text: 'Monto'

        }

    },

    tooltip: {

        headerFormat: {literal}'<span style="font-size:10px">{point.key}</span><table>'{/literal},

        pointFormat: {literal}'<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +

            '<td style="padding:0"><b>{point.y:.2f}</b></td></tr>'{/literal},

        footerFormat: '</table>',

        shared: true,

        useHTML: true

    },

    plotOptions: {

        column: {

            pointPadding: 0.2,

            borderWidth: 0

        }

    },

    series: {$e_subasta_monto_por_mes}

});



Highcharts.chart('e_ahorro_anual_categoria', {

    chart: {

        type: 'column'

    },

    title: {

        text: 'Subastas del año actual'

    },

    subtitle: {

        text: 'AHORRO POR CATEGORIA'

    },

    xAxis: {

        categories: [

            'Ene',

            'Feb',

            'Mar',

            'Abr',

            'May',

            'Jun',

            'Jul',

            'Ago',

            'Sep',

            'Oct',

            'Nov',

            'Dic'

        ],

        crosshair: true

    },

    yAxis: {

        min: 0,

        title: {

            text: 'Monto'

        }

    },

    tooltip: {

        headerFormat: {literal}'<span style="font-size:10px">{point.key}</span><table>'{/literal},

        pointFormat: {literal}'<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +

            '<td style="padding:0"><b>{point.y:.2f}</b></td></tr>'{/literal},

        footerFormat: '</table>',

        shared: true,

        useHTML: true

    },

    plotOptions: {

        column: {

            pointPadding: 0.2,

            borderWidth: 0

        }

    },

    series: {$aac_datos}

});  



Highcharts.chart('e_precio_final_anual_categoria', {

    chart: {

        type: 'column'

    },

    title: {

        text: 'Subastas del año actual'

    },

    subtitle: {

        text: 'PRECIO FINAL POR CATEGORIA'

    },

    xAxis: {

        categories: [

            'Ene',

            'Feb',

            'Mar',

            'Abr',

            'May',

            'Jun',

            'Jul',

            'Ago',

            'Sep',

            'Oct',

            'Nov',

            'Dic'

        ],

        crosshair: true

    },

    yAxis: {

        min: 0,

        title: {

            text: 'Monto'

        }

    },

    tooltip: {

        headerFormat: {literal}'<span style="font-size:10px">{point.key}</span><table>'{/literal},

        pointFormat: {literal}'<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +

            '<td style="padding:0"><b>{point.y:.2f}</b></td></tr>'{/literal},

        footerFormat: '</table>',

        shared: true,

        useHTML: true

    },

    plotOptions: {

        column: {

            pointPadding: 0.2,

            borderWidth: 0

        }

    },

    series: {$pfac_datos}

});    





Highcharts.chart('e_subasta_precio_final_por_mes', {

    chart: {

        type: 'column'

    },

    title: {

        text: 'Subastas del mes actual'

    },

    subtitle: {

        text: 'PRECIO FINAL'

    },

    xAxis: {

        type: 'category'

    },

    yAxis: {

        title: {

            text: 'Precio final'

        }



    },

    legend: {

        enabled: false

    },

    credits:{

        enabled: false

    },

    plotOptions: {

        series: {

            borderWidth: 0,

            dataLabels: {

                enabled: true,

                format: {literal}'{point.y}'{/literal}

            }

        }

    },



    tooltip: {

      {literal}

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'

      {/literal}

    },



    series: [{

        name: 'Subasta',

        colorByPoint: true,

        data: {$e_subasta_precio_final_por_mes}

    }],

    /*

    drilldown: {

        series: [{

            name: 'Microsoft Internet Explorer',

            id: 'Microsoft Internet Explorer',

            data: [

                [

                    'v11.0',

                    24.13

                ]

            ]

        }, {

            name: 'Opera',

            id: 'Opera',

            data: [

                [

                    'v12.x',

                    0.34

                ],

                [

                    'v28',

                    0.24

                ]

            ]

        }]

    }

   */

});  



Highcharts.chart('e_subasta_ahorro_por_mes', {

    chart: {

        type: 'column'

    },

    title: {

        text: 'Subastas del mes actual'

    },

    subtitle: {

        text: 'AHORRO'

    },

    xAxis: {

        type: 'category'

    },

    yAxis: {

        title: {

            text: 'Ahorro'

        }



    },

    legend: {

        enabled: false

    },

    credits:{

        enabled: false

    },

    plotOptions: {

        series: {

            borderWidth: 0,

            dataLabels: {

                enabled: true,

                format: {literal}'{point.y}'{/literal}

            }

        }

    },



    tooltip: {

      {literal}

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'

      {/literal}

    },



    series: [{

        name: 'Subasta',

        colorByPoint: true,

        data: {$e_subasta_ahorro_por_mes}

    }],

    /*

    drilldown: {

        series: [{

            name: 'Microsoft Internet Explorer',

            id: 'Microsoft Internet Explorer',

            data: [

                [

                    'v11.0',

                    24.13

                ]

            ]

        }, {

            name: 'Opera',

            id: 'Opera',

            data: [

                [

                    'v12.x',

                    0.34

                ],

                [

                    'v28',

                    0.24

                ]

            ]

        }]

    }

   */

});



</script>