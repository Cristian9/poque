<div class="row">
    <div class="form-group col-sm-4 col-md-4">
        <label>Código:</label>
        <div class="input-group">
            <span class="input-group-addon">
                <b>ID</b>
            </span>
            <input type="text" readonly="readonly" class="form-control" placeholder="" value="{if isset($registro)}{$registro.codigo}{/if}">
        </div>
    </div>
</div>

<div class="boxround1">
    <div class="row">

        <div class="form-group col-sm-4 col-md-4">
            <label>Fecha:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">alarm</i>
                </span>
                <input type="datetime-local" readonly="readonly" class="form-control" name="f_inicio" placeholder="" value="{if isset($registro)}{$registro.f_inicio|formato_fecha:'datetime_local'}{/if}">
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Duración (min):</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">timer</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="{if isset($registro)}{$registro.duracion}{else}20{/if}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-4 col-md-4">
            <label>Categoría:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">bookmark</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="{if isset($registro)}{$registro.categoria}{else}20{/if}">
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Producto / Servicio:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">assignment_turned_in</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="{if isset($registro)}{$registro.producto}{else}20{/if}">
            </div>
        </div>

        <div class="form-group col-sm-6 col-md-4">
            <label>Descripción:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_1</i>
                </span>
                <textarea readonly="readonly" class="form-control" name="descripcion">{if isset($registro)}{$registro.descripcion}{/if}</textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6 col-md-4">
            <label>Moneda:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">local_atm</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="{if isset($registro)}{$registro.moneda}{/if}">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Precio Base:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">monetization_on</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="{if isset($registro)}{$registro.precio_base}{/if}">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Tipo de descuento:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">add_location</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="{if isset($registro)}{$registro.tipo_descuento}{/if}">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Descuento minimo:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icontacto1">
                    <i class="material-icons">contact_phone</i>
                </span>
                <input type="text" readonly="readonly" class="form-control" name="descuento_minimo" placeholder="" value="{if isset($registro)}{$registro.descuento_minimo}{/if}">
            </div>
        </div>
    </div>
</div>
<div class="boxround1">
    <legend>Criterios de la subasta</legend>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <table id="provee" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="150">Proveedor</th>
                        {foreach $s_criterios as $l}
                        <th width="50">{$l.criterio}</th>
                        {/foreach}
                    </tr>
                </thead>
                <tbody>
                    {foreach $s_proveedores as $l}
                    <tr>
                        <td>{$l.proveedor}</td>
                        {foreach $l.criterios as $c}
                        <td>{if isset($c)}{$c.valor}{else}0{/if}</td>
                        {/foreach}
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>
