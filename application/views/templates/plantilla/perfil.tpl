<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Modulo
         <small>{$modulo}</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="{$get_url}listar"><i class="fa fa-list"></i> Listar {$modulo}</a></li>
         <li class="active">{$pagina}</li>
      </ol>
    </section>

   <section class="content">
      <form class="bform" action="{$base_url}general/usuario/perfil" method="post">
         <div class="box box-danger">
            <div class="box-body">
               <div class="response"></div>
                  <div class="boxround1">
                     <div class="row">
                        <div class="form-group col-sm-6 col-md-6">
                           <label>Nombre:</label>
                              <div class="input-group">
                                 <span class="input-group-addon mat-iconame1">
                                      <i class="material-icons">person_outline</i>
                                  </span>
                                  <input type="text" class="form-control" name="nombre" placeholder="" value="{if isset($registro)}{$registro.nombre}{/if}">
                              </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                           <label>Usuario:</label>
                              <div class="input-group">
                                 <span class="input-group-addon mat-icoemail1">
                                      <i class="material-icons">mail_outline</i>
                                  </span>
                                  <input type="text" class="form-control" name="usuario" placeholder="" value="{if isset($registro)}{$registro.usuario}{/if}">
                              </div>
                        </div>
                     </div>
                  </div>

                  <div class="boxround1">
                     <div class="row">
                        <div class="form-group col-sm-6 col-md-6">
                           <label>Clave:</label>
                              <div class="input-group">
                                 <span class="input-group-addon mat-icomap1">
                                      <i class="material-icons">lock</i>
                                 </span>
                                 <input type="password" class="form-control" name="clave">
                              </div>
                        </div>
                        <div class="form-group col-sm-6 col-md-6">
                           <label>Repetir Clave:</label>
                              <div class="input-group">
                                 <span class="input-group-addon mat-icomap1">
                                      <i class="material-icons">lock</i>
                                 </span>
                                 <input type="password" class="form-control" name="reclave">
                              </div>
                        </div>
                     </div>
                  </div>
            </div>
            <div class="box-footer">
               <button type="submit" class="btn btn-danger save">Guardar</button>
               <input type="hidden" name="id" value="{if isset($registro)}{$registro.id}{/if}">
            </div>
         </div>
      </form>
   </section>
</div>