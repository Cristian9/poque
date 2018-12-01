<div class="row">
{if isset($registro)}
    <div class="form-group col-sm-4 col-md-4">

        <label>Código:</label>

        <div class="input-group">

            <span class="input-group-addon">

                <b>ID</b>

            </span>

                <input type="text" readonly="readonly" class="form-control" placeholder="" value="{if isset($registro)}{$registro.codigo}{/if}">

        </div>

    </div>
    
    <div class="pull-right col-md-3">
        <label>
            Última modificación: {if isset($registro)}{$registro.f_bases}{/if}
        </label>
    </div>
{/if}
</div>

<div class="row">
    <div class="col-sm-12 col-md-5">
        <div class="boxround1">
            <div class="row">
                <div class="form-group col-sm-12 col-md-12">
                    <label>Cliente:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icomap1">
                            <i class="material-icons">account_circle</i>
                        </span>
                        <select class="form-control" name="cliente">
                            <option value="" selected="" disabled>Seleccione una opción</option>
                            {foreach $clientes as $o}
                                <option value="{$o.id}" {if isset($registro) && $registro.cliente_id == $o.id}selected="selected"{/if}>{$o.nombre}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                {*
                <div class="form-group col-sm-12 col-md-12">

                    <label>Fecha:</label>

                    <div class="input-group">

                        <span class="input-group-addon mat-icomap1">

                            <i class="material-icons">alarm</i>

                        </span>

                        <input type="datetime-local" class="form-control" name="f_inicio" placeholder="" value="{if isset($registro)}{$registro.f_inicio|formato_fecha:'datetime_local'}{/if}">

                    </div>

                </div>
                *}
                <div class="form-group col-sm-12 col-md-12">
                    <label>Bases:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icontacto1">
                            <i class="material-icons">assignment</i>
                        </span>
                        <input type="file" class="form-control" name="bases" placeholder="" value="{if isset($registro)}{$registro.bases}{/if}">
                    </div>
                </div>
                <input type="hidden" name="form_bases" value="1">
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="boxround1">
        	<legend>Proveedores</legend>
            <div class="row">
                <div class="form-group col-sm-6 col-md-6">
                    <label>Proveedor:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icomap1">
                            <i class="material-icons">local_shipping</i>
                        </span>
                        <select id="proveedor" class="form-control">
                            <option value="" selected="" disabled>Seleccione una opción</option>
                            {foreach $proveedores as $o}
                                <option value="{$o.id}">{$o.nombre}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>

                <div class="form-group col-sm-4 col-md-4">
                    <label>Alias:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icomap1">
                            <i class="material-icons">person</i>
                        </span>
                        <input id="alias" type="text" class="form-control" name="alias" placeholder="">
                    </div>
                </div>

                <div class="col-sm-2 col-md-2">

                    <a class="btn btn-primary add-proveedor spacmore1" data-name="proveedor" data-div="provee" data-select="proveedor" style="background-color: #9a9c9c; border-color: #9a9c9c">

                        <i class="fa fa-plus"></i>

                    </a>

                </div>

                <div class="col-sm-12 col-md-12">

                	<table id="proveedores" class="table table-bordered table-hover">

        		        <thead>

        					<tr>

                                <th width="100">Proveedor</th>
        						
                                <th width="100">Alias</th>

        						<th width="50">Acción</th>

        					</tr>

        				</thead>

        				<tbody>

        					{foreach $s_proveedores as $l}

        					<tr>

                                <td>{$l.proveedor}</td>

        						<td>{$l.alias}</td>

        						<td class="text-center">

                                    <a class="btn btn-danger delete-item" style="background-color: #f16654 !important; border-color: #f16654 !important" data-url="{$base_url}manager/subasta/eliminar_proveedor" data-id="{$l.id}">

                                        <i class="fa fa-trash"></i>

                                    </a>

                                </td>

        					</tr>

        					{/foreach}

        				</tbody>

                	</table>

                </div>

            </div>

        </div>
    </div>
</div>