<div class="form-group col-sm-12 col-md-12">
    <label>Pregunta:</label>
    <div class="input-group">
    	<span class="input-group-addon mat-icomap1">
            <i class="material-icons">help_outline</i>
        </span>
        <input type="text" class="form-control" name="pregunta" placeholder="" value="{if isset($registro)}{$registro.pregunta}{/if}">
    </div>
    <label>Respuesta:</label>
    <div class="input-group">
    	<span class="input-group-addon mat-icomap1">
            <i class="material-icons">question_answer</i>
        </span>
        <textarea class="form-control" name="respuesta" placeholder="" rows="4">{if isset($registro)}{$registro.respuesta}{/if}</textarea>
    </div>
</div>