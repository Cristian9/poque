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
    <div class="box box-danger">
      <div class="box-body">

        <div class="bothab-align1">
          <button type="button" id="habiform" class="btn bothab1" style="background-color: #ffb200; border-color: #f39c12;"><span class="btx1">Editar</span><span class="btx2">Bloquear</span></button>
        </div>
        <form class="bform" action="{$get_url}perfil/editar" method="post">
          <div class="response"></div>
          <div class="boxround1">
              <div class="row">
                  <div class="form-group col-sm-6 col-md-6">
                      <label>RUC:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon">
                              <i class="fa fa-bars"></i>
                          </span>
                          <input type="text" class="form-control" name="ruc" placeholder="" value="{if isset($registro)}{$registro.n_documento}{/if}" >
                      </div>
                  </div>

                  <div class="form-group col-sm-6 col-md-6">
                      <label>Nombre:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-iconame1">
                              <i class="material-icons">person_outline</i>
                          </span>
                          <input type="text" class="form-control" name="nombre" placeholder="" value="{if isset($registro)}{$registro.nombre}{/if}" >
                      </div>
                  </div>

              </div>



              <div class="row">
                  <div class="form-group col-sm-6 col-md-6">
                      <label>Email:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icoemail1">
                              <i class="material-icons">mail_outline</i>
                          </span>
                          <input type="text" class="form-control" name="email" placeholder="" value="{if isset($registro)}{$registro.email}{/if}" >
                      </div>
                  </div>

                  <div class="form-group col-sm-6 col-md-6">
                      <label>Contacto:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icontacto1">
                              <i class="material-icons">contact_phone</i>
                          </span>
                          <input type="text" class="form-control" name="contacto" placeholder="" value="{if isset($registro)}{$registro.contacto}{/if}" >
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-sm-6 col-md-4">
                      <label>Teléfono:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icophone1">
                              <i class="material-icons">phone</i>
                          </span>
                          <input type="text" class="form-control" name="telefono" placeholder="" value="{if isset($registro)}{$registro.telefono}{/if}" >
                      </div>
                  </div>

                  <div class="form-group col-sm-4 col-md-4">
                      <label>Anexos:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icophone1">
                              <i class="material-icons">contacts</i>
                          </span>
                          <input type="text" class="form-control" name="anexo" placeholder="" value="{if isset($registro)}{$registro.anexo}{/if}" >
                      </div>
                  </div>

                  <div class="form-group col-sm-6 col-md-4">
                      <label>Celular:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomobil1">
                              <i class="material-icons">stay_primary_portrait</i>
                          </span>
                          <input type="text" class="form-control" name="celular" placeholder="" value="{if isset($registro)}{$registro.celular}{/if}" >
                      </div>
                  </div>
                  <div class="form-group col-sm-4 col-md-4">
                      <label>Sector:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">business</i>
                          </span>
                          <select id="sector" class="form-control" >
                              <option value="" selected="" disabled>Seleccione una opción</option>
                              {foreach $sectores as $d}
                                  <option value="{$d.id}" {if isset($registro) && $registro.sector_id == $d.id}selected="selected"{/if}>{$d.nombre}</option>
                              {/foreach}
                          </select>
                      </div>
                  </div>
                  <div class="form-group col-sm-4 col-md-4">
                      <label>Rubro:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">shopping_cart</i>
                          </span>
                          <select id="rubro" name="rubro" class="form-control" >
                              <option value="" selected="" disabled>Seleccione una opción</option>
                              {foreach $rubros as $p}
                                  <option value="{$p.id}" {if isset($registro) && $registro.rubro_id == $p.id}selected="selected"{/if}>{$p.nombre}</option>
                              {/foreach}
                          </select>
                      </div>
                  </div>
              </div>
          </div>

          <div class="boxround1">
              <div class="row">
                  <div class="form-group col-sm-4 col-md-4">
                      <label>Departamento:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">add_location</i>
                          </span>
                          <select id="departamento" class="form-control" >
                              <option value="" selected="" disabled>Seleccione una opción</option>
                              {foreach $departamentos as $d}
                                  <option value="{$d.id}" {if isset($registro) && $registro.departamento_id == $d.id}selected="selected"{/if}>{$d.nombre}</option>
                              {/foreach}
                          </select>
                      </div>
                  </div>
                  <div class="form-group col-sm-4 col-md-4">
                      <label>Provincia:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">add_location</i>
                          </span>
                          <select id="provincia" class="form-control" >
                              <option value="" selected="" disabled>Seleccione una opción</option>
                              {foreach $provincias as $p}
                                  <option value="{$p.id}" {if isset($registro) && $registro.provincia_id == $p.id}selected="selected"{/if}>{$p.nombre}</option>
                              {/foreach}
                          </select>
                      </div>
                  </div>
                  <div class="form-group col-sm-4 col-md-4">
                      <label>Distrito:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">add_location</i>
                          </span>
                          <select id="distrito" name="distrito" class="form-control" >
                              <option value="" selected="" disabled>Seleccione una opción</option>
                              {foreach $distritos as $d}
                                  <option value="{$d.id}" {if isset($registro) && $registro.distrito_id == $d.id}selected="selected"{/if}>{$d.nombre}</option>
                              {/foreach}
                          </select>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-sm-12 col-md-12">
                      <label>Dirección:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">place</i>
                          </span>
                          <input type="text" class="form-control" name="direccion" placeholder="" value="{if isset($registro)}{$registro.direccion}{/if}" >
                      </div>
                  </div>
              </div>
          </div>
          {*
          <div class="boxround1">
              <legend>Productos / Servicios</legend>
              <div class="row">
                  <div class="form-group col-sm-6 col-md-3">
                      <label>Categoria:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">add_location</i>
                          </span>
                          <select id="categoria" class="form-control" >
                              <option value="" selected="" disabled>Seleccione una opción</option>
                              {foreach $categorias as $o}
                                  <option value="{$o.id}">{$o.nombre}</option>
                              {/foreach}
                          </select>
                      </div>
                  </div>
                  <div class="form-group col-sm-6 col-md-3">
                      <label>Producto / Servicio:</label>
                      <div class="input-group togform">
                          <span class="input-group-addon mat-icomap1">
                              <i class="material-icons">add_location</i>
                          </span>
                          <select id="producto" class="form-control" >
                              <option value="" selected="" disabled>Seleccione una opción</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-2">
                      <a class="btn btn-primary add-producto">
                          <i class="fa fa-plus"></i>
                      </a>
                  </div>
                  <div class="col-sm-6 col-md-6">
                      <table id="productos" class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th width="150">Categoría</th>
                                  <th width="150">Producto / Servicio</th>
                                  <th width="90">Acción</th>
                              </tr>
                          </thead>
                          <tbody>
                              {foreach $p_productos as $l}
                              <tr>
                                  <td>{$l.categoria}</td>
                                  <td>{$l.producto}</td>
                                  <td class="text-center">
                                      <a class="btn btn-danger delete-item" data-url="{$base_url}manager/cliente/eliminar_producto" data-id="{$l.id}">
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
          *}
          <button type="submit" class="btn btn-danger save">Guardar</button>
        </form>
      </div>
    </div>
  </section>
</div>