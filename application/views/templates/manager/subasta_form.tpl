<div class="row">

    <div class="form-group col-sm-4 col-md-4">

        <label>Código:</label>

        <div class="input-group">

            <span class="input-group-addon">

                <b>ID</b>

            </span>

            {if isset($registro)}

                <input type="text" readonly="readonly" class="form-control" placeholder="" value="{if isset($registro)}{$registro.codigo}{/if}">

            {else}

                <input type="text" class="form-control" name="codigo" placeholder="" value="{if isset($registro)}{$registro.codigo}{/if}">

            {/if}

        </div>

    </div>

</div>



<div class="boxround1">

    <div class="row">

        <div class="form-group col-sm-4 col-md-4">

            <label>Cliente:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icomap1">

                    <i class="material-icons">add_location</i>

                </span>

                <select class="form-control" name="cliente">

                    <option value="" selected="" disabled>Seleccione una opción</option>

                    {foreach $clientes as $o}

                        <option value="{$o.id}" {if isset($registro) && $registro.cliente_id == $o.id}selected="selected"{/if}>{$o.nombre}</option>

                    {/foreach}

                </select>

            </div>

        </div>



        <div class="form-group col-sm-4 col-md-4">

            <label>Fecha:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icomap1">

                    <i class="material-icons">alarm</i>

                </span>

                <input type="datetime-local" class="form-control" name="f_inicio" placeholder="" value="{if isset($registro)}{$registro.f_inicio|formato_fecha:'datetime_local'}{/if}">

            </div>

        </div>



        <div class="form-group col-sm-2 col-md-2">

            <label>Duración (min):</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">timer</i>

                </span>

                <input type="text" class="form-control" name="duracion" placeholder="" value="{if isset($registro)}{$registro.duracion}{else}20{/if}">

            </div>

        </div>



        <div class="form-group col-sm-2 col-md-2">

            <label>Tiempo de extención (min):</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">timer</i>

                </span>

                <input type="text" class="form-control" name="extencion" placeholder="" value="{if isset($registro)}{$registro.extencion}{else}20{/if}">

            </div>

        </div>

    </div>



    <div class="row">

        <div class="form-group col-sm-4 col-md-4">

            <label>Categoría:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icomap1">

                    <i class="material-icons">add_location</i>

                </span>

                <select id="categoria" class="form-control" name="categoria">

                    <option value="" selected="" disabled>Seleccione una opción</option>

                    {foreach $categorias as $o}

                        <option value="{$o.id}" {if isset($registro) && $registro.categoria_id == $o.id}selected="selected"{/if}>{$o.nombre}</option>

                    {/foreach}

                </select>

            </div>

        </div>



        <div class="form-group col-sm-4 col-md-4">

            <label>Producto / Servicio:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icomap1">

                    <i class="material-icons">add_location</i>

                </span>

                <select id="producto" class="form-control" name="producto">

                    <option value="" selected="" disabled>Seleccione una opción</option>

                    {foreach $productos as $o}

                        <option value="{$o.id}" {if isset($registro) && $registro.producto_id == $o.id}selected="selected"{/if}>{$o.nombre}</option>

                    {/foreach}

                </select>

            </div>

        </div>



        <div class="form-group col-sm-6 col-md-4">

            <label>Descripción:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">filter_1</i>

                </span>

                <textarea class="form-control" name="descripcion">{if isset($registro)}{$registro.descripcion}{/if}</textarea>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="form-group col-sm-6 col-md-4">

            <label>Moneda:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icomap1">

                    <i class="material-icons">local_atm</i>

                </span>

                <select class="form-control" name="moneda">

                    <option value="" selected="" disabled>Seleccione una opción</option>

                    {foreach $monedas as $o}

                        <option value="{$o.id}" {if isset($registro) && $registro.moneda_id == $o.id}selected="selected"{/if}>{$o.nombre}</option>

                    {/foreach}

                </select>

            </div>

        </div>

        <div class="form-group col-sm-6 col-md-4">

            <label>Tipo de descuento:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icomap1">

                    <i class="material-icons">add_location</i>

                </span>

                <select class="form-control" name="tipo_descuento">

                    <option value="" selected="" disabled>Seleccione una opción</option>

                    {foreach $tipo_descuentos as $o}

                        <option value="{$o.id}" {if isset($registro) && $registro.tipo_descuento_id == $o.id}selected="selected"{/if}>{$o.nombre}</option>

                    {/foreach}

                </select>

            </div>

        </div>

        <div class="form-group col-sm-6 col-md-4">

            <label>Descuento minimo:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icontacto1">

                    <i class="material-icons">contact_phone</i>

                </span>

                <input type="text" class="form-control" name="descuento_minimo" placeholder="" value="{if isset($registro)}{$registro.descuento_minimo}{/if}">

            </div>

        </div>

        <div class="form-group col-sm-6 col-md-4">

            <label>Precio Base:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">filter_1</i>

                </span>

                <input type="text" class="form-control" name="precio_base" placeholder="" value="{if isset($registro)}{$registro.precio_base}{/if}">

            </div>

        </div>

        <div class="form-group col-sm-6 col-md-4">

            <label>Bases:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icontacto1">

                    <i class="material-icons">contact_phone</i>

                </span>

                <input type="file" class="form-control" name="bases" placeholder="" value="{if isset($registro)}{$registro.bases}{/if}">

            </div>

        </div>

    </div>

</div>
<div class="row">
    
    <div class="col-md-6">
        <div class="boxround1">

            <legend>Proveedores</legend>

            <div class="row">

                <div class="form-group col-sm-6 col-md-6">

                    <label>Proveedor:</label>

                    <div class="input-group">

                        <span class="input-group-addon mat-icomap1">

                            <i class="material-icons">add_location</i>

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

                    <a class="btn btn-primary add-proveedor" data-name="proveedor" data-div="provee" data-select="proveedor">

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

                                    <a class="btn btn-danger delete-item" data-url="{$base_url}manager/subasta/eliminar_proveedor" data-id="{$l.id}">

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

    <div class="col-md-6">

        <div class="boxround1">

            <legend>Criterios</legend>

            <div class="row">

                <div class="form-group col-sm-6 col-md-6">

                    <label>Criterio:</label>

                    <div class="input-group">

                        <span class="input-group-addon mat-icomap1">

                            <i class="material-icons">add_location</i>

                        </span>

                        <select id="criterio" class="form-control">

                            <option value="" selected="" disabled>Seleccione una opción</option>

                            {foreach $criterios as $o}

                                <option value="{$o.id}">{$o.nombre}</option>

                            {/foreach}

                        </select>

                    </div>

                </div>

                <div class="form-group col-sm-4 col-md-4">

                    <label>Valor:</label>

                    <div class="input-group">

                        <span class="input-group-addon mat-icoemail1">

                            <i class="material-icons">filter_1</i>

                        </span>

                        <input id="valor" type="text" class="form-control" name="valor" placeholder="">

                    </div>

                </div>

                <div class="col-sm-2 col-md-2">

                    <a class="btn btn-primary add-criterio">

                        <i class="fa fa-plus"></i>

                    </a>

                </div>

                <div class="col-sm-12 col-md-12">

                    <table id="criterios" class="table table-bordered table-hover">

                        <thead>

                            <tr>

                                <th width="150">Criterio</th>

                                <th width="150">Ponderado (%)</th>

                                <th width="90">Acción</th>

                            </tr>

                        </thead>

                        <tbody>

                            {foreach $s_criterios as $l}

                            <tr>

                                <td>{$l.criterio}</td>

                                <td>{$l.valor}</td>

                                <td class="text-center">

                                    <a class="btn btn-danger delete-item" data-url="{$base_url}manager/subasta/eliminar_criterio" data-id="{$l.id}">

                                        <i class="fa fa-trash"></i>

                                    </a>

                                </td>

                            </tr>

                            {/foreach}

                        </tbody>

                    </table>

                    <div>

                        <input type="hidden" id="total" name="total" value="{$total}">

                        Total

                        <span id="total_text">{$total}%</span>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
{if isset($registro)}
<div class="boxround1">
    <legend>Puntaje de proveedores</legend>
    <div class="row">
        <div class="form-group col-sm-12 col-md-12">
            <table id="criterio_proveedor" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="100">Criterio</th>
                        <th width="100">Ponderado</th>
                        {foreach $s_proveedores as $l}
                        <th width="100">{$l.proveedor}</th>
                        {/foreach}
                    </tr>
                </thead>
                <tbody>
                    {foreach $s_criterios as $l}
                        <tr>
                            <td>{$l.criterio}</td>
                            <td>{$l.valor}</td>
                            {foreach $s_proveedores as $l}
                            <td width="100">{$l.proveedor}</td>
                            {/foreach}
                        </tr>
                    {/foreach}
                </tbody>

            </table>
        </div>
    </div>
</div>
{/if}