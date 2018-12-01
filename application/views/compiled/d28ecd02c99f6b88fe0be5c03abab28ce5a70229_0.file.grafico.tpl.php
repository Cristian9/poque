<?php /* Smarty version 3.1.27, created on 2018-04-14 18:01:17
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/plantilla/grafico.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10821790915ad2883d56b2a8_81092797%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28ecd02c99f6b88fe0be5c03abab28ce5a70229' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/plantilla/grafico.tpl',
      1 => 1523746874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10821790915ad2883d56b2a8_81092797',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5ad2883d664486_17197283',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5ad2883d664486_17197283')) {
function content_5ad2883d664486_17197283 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10821790915ad2883d56b2a8_81092797';
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
        <div class="box">
            <div class="box-body">
                <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </div>
        </div>
    </section>
</div>
<?php echo '<script'; ?>
 type="text/javascript">

Highcharts.setOptions({
    global: {
        useUTC: false
    }
});

Highcharts.chart('container', {
    chart: {
        type: 'spline',
        animation: Highcharts.svg, // don't animate in old IE
        marginRight: 10,
        events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = Math.random();
                    series.addPoint([x, y], true, true);
                }, 1000);
            }
        }
    },
    title: {
        text: 'Live random data'
    },
    xAxis: {
        type: 'datetime',
        tickPixelInterval: 150
    },
    yAxis: {
        title: {
            text: 'Value'
        },
        plotLines: [{
            value: 0,
            width: 1,
            color: '#808080'
        }]
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                Highcharts.numberFormat(this.y, 2);
        }
    },
    legend: {
        enabled: false
    },
    exporting: {
        enabled: false
    },
    series: [{
        name: 'Random data',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;

            for (i = -19; i <= 0; i += 1) {
                data.push({
                    x: time + i * 1000,
                    y: Math.random()
                });
            }
            return data;
        }())
    }]
});
<?php echo '</script'; ?>
><?php }
}
?>