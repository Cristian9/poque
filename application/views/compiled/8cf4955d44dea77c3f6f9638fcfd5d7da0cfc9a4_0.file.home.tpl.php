<?php /* Smarty version 3.1.27, created on 2018-03-14 21:03:07
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9331869115aa9d45b817cc9_71630065%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf4955d44dea77c3f6f9638fcfd5d7da0cfc9a4' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/home.tpl',
      1 => 1521079386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9331869115aa9d45b817cc9_71630065',
  'variables' => 
  array (
    'pfac_info' => 0,
    'l' => 0,
    'aac_info' => 0,
    'e_client' => 0,
    'e_prov' => 0,
    'e_subasta' => 0,
    'e_subasta_por_mes' => 0,
    'e_subasta_monto_por_mes' => 0,
    'aac_datos' => 0,
    'pfac_datos' => 0,
    'e_subasta_precio_final_por_mes' => 0,
    'e_subasta_ahorro_por_mes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aa9d45bc7e227_26542631',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa9d45bc7e227_26542631')) {
function content_5aa9d45bc7e227_26542631 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9331869115aa9d45b817cc9_71630065';
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
                        <?php
$_from = $_smarty_tpl->tpl_vars['pfac_info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
                        <div class="col-md-3">
                            <?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>
 : <?php echo $_smarty_tpl->tpl_vars['l']->value['total'];?>

                        </div>
                        <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
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
                        <?php
$_from = $_smarty_tpl->tpl_vars['aac_info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>
                        <div class="col-md-3">
                            <?php echo $_smarty_tpl->tpl_vars['l']->value['name'];?>
 : <?php echo $_smarty_tpl->tpl_vars['l']->value['total'];?>

                        </div>
                        <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
                    </div>

                </div>

            </div>

         </div>

         

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







<?php echo '<script'; ?>
 type="text/javascript">



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

                format: '{point.y}'

            }

        }

    },



    tooltip: {

      

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> clientes<br/>'

      

    },



    series: [{

        name: 'Sector',

        colorByPoint: true,

        data: <?php echo $_smarty_tpl->tpl_vars['e_client']->value;?>


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

                format: '{point.y}'

            }

        }

    },



    tooltip: {

      

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> proveedores<br/>'

      

    },



    series: [{

        name: 'Sector',

        colorByPoint: true,

        data: <?php echo $_smarty_tpl->tpl_vars['e_prov']->value;?>


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

                format: '{point.y}'

            }

        }

    },



    tooltip: {

      

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> Subastas<br/>'

      

    },



    series: [{

        name: 'Categoría',

        colorByPoint: true,

        data: <?php echo $_smarty_tpl->tpl_vars['e_subasta']->value;?>


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

        categories: <?php echo $_smarty_tpl->tpl_vars['e_subasta_por_mes']->value;?>
,

        crosshair: true

    },

    yAxis: {

        min: 0,

        title: {

            text: 'Monto'

        }

    },

    tooltip: {

        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +

            '<td style="padding:0"><b>{point.y:.2f}</b></td></tr>',

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

    series: <?php echo $_smarty_tpl->tpl_vars['e_subasta_monto_por_mes']->value;?>


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

        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +

            '<td style="padding:0"><b>{point.y:.2f}</b></td></tr>',

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

    series: <?php echo $_smarty_tpl->tpl_vars['aac_datos']->value;?>


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

        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +

            '<td style="padding:0"><b>{point.y:.2f}</b></td></tr>',

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

    series: <?php echo $_smarty_tpl->tpl_vars['pfac_datos']->value;?>


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

                format: '{point.y}'

            }

        }

    },



    tooltip: {

      

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'

      

    },



    series: [{

        name: 'Subasta',

        colorByPoint: true,

        data: <?php echo $_smarty_tpl->tpl_vars['e_subasta_precio_final_por_mes']->value;?>


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

                format: '{point.y}'

            }

        }

    },



    tooltip: {

      

        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',

        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b><br/>'

      

    },



    series: [{

        name: 'Subasta',

        colorByPoint: true,

        data: <?php echo $_smarty_tpl->tpl_vars['e_subasta_ahorro_por_mes']->value;?>


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



<?php echo '</script'; ?>
><?php }
}
?>