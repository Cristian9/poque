<?php /* Smarty version 3.1.27, created on 2018-02-01 23:44:34
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10036968525a73ecb29fb997_85343745%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69786e86da09d0ee7f6e8d7cbdc0903447f804d' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/home.tpl',
      1 => 1516574170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10036968525a73ecb29fb997_85343745',
  'variables' => 
  array (
    'e_client' => 0,
    'e_prov' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a73ecb2c02fe2_00704008',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a73ecb2c02fe2_00704008')) {
function content_5a73ecb2c02fe2_00704008 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10036968525a73ecb29fb997_85343745';
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
        text: ''
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
        text: ''
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
        

<?php echo '</script'; ?>
><?php }
}
?>