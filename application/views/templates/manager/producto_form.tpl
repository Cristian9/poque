<div class="form-group col-sm-12 col-md-12">
    <label>Categoría:</label>
    <div class="input-group">
        <span class="input-group-addon mat-icomap1">
            <i class="material-icons">bookmark_border</i>
        </span>
        <select name="categoria" class="form-control">
            <option value="" selected="" disabled>Seleccione una opción</option>
            {foreach $categorias as $d}
                <option value="{$d.id}" {if isset($registro) && $registro.categoria_id == $d.id}selected="selected"{/if}>{$d.nombre}</option>
            {/foreach}
        </select>
    </div>
</div>
<div class="form-group col-sm-12 col-md-12">						
    <label>Producto / Servicio:</label>
    <div class="input-group">
    	<span class="input-group-addon mat-icomap1">
            <i class="material-icons">chrome_reader_mode</i>
        </span>
        <input type="text" class="form-control" name="nombre" placeholder="" value="{if isset($registro)}{$registro.nombre}{/if}">
    </div>
</div>