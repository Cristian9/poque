<div class="form-group col-sm-12 col-md-12">



    <label>Pregunta:</label>

    <div class="input-group">

    	<span class="input-group-addon">

            <i class="fa fa-database"></i>

        </span>

        <input type="text" class="form-control" name="pregunta" placeholder="" value="{if isset($registro)}{$registro.pregunta}{/if}" disabled="">

    </div>



    <label>Respuesta:</label>

    <div class="input-group">

    	<span class="input-group-addon">

            <i class="fa fa-database"></i>

        </span>

        <textarea class="form-control" name="respuesta" placeholder="" rows="4">{if isset($registro)}{$registro.respuesta}{/if}</textarea>

    </div>
    <input type="hidden" name="id_subasta" value="{if isset($registro)}{$registro.subasta_id}{/if}">



</div>