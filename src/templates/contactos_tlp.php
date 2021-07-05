<div class="row">
  <div class="col-md-12 mb-4">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-muted">Contactos</span>
      <span class="badge badge-secondary badge-pill">{{ $ctrl.contactos.length }}</span>
    </h4>
    <ul class="list-group mb-3">
      <li class="list-group-item d-flex justify-content-between lh-condensed" data-ng-repeat="c in $ctrl.contactos | orderBy:'apellido'" data-ng-class="{'bg-light': $index%2 }">
        <div>
          <h6 class="my-0">{{ c.apellido }}, {{ c.nombre }}</h6>
          <small class="text-muted">{{ c.email }}</small>
        </div>
        <span class="text-nowrap">
                    <button type="button" class="btn btn-sm btn-info" data-ng-click="$ctrl.editar(c.id)" data-ng-disabled="$ctrl.nuevoContacto!=null">Editar</button>
                    <button type="button" class="btn btn-sm btn-danger" data-ng-click="$ctrl.borrar(c.id)" data-ng-disabled="$ctrl.nuevoContacto!=null && $ctrl.nuevoContacto.id==c.id">Borrar</button>
                </span>
      </li>
    </ul>
    <button type="button" class="btn btn-primary" data-ng-click="$ctrl.nuevoContacto={}" data-ng-disabled="$ctrl.nuevoContacto!=null">Agregar nuevo contacto</button>
  </div>
</div>
<hr>
<div class="row" data-ng-if="$ctrl.nuevoContacto">
  <div class="col-md-12">
    <h4 class="mb-3" data-ng-if="$ctrl.nuevoContacto.id">Edición de contacto</h4>
    <h4 class="mb-3" data-ng-if="!$ctrl.nuevoContacto.id">Nuevo contacto</h4>
    <form class="needs-validation" novalidate name="formulario">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" data-ng-class="{'is-invalid': formulario.nombre.$invalid &&  formulario.nombre.$dirty }" name="nombre" id="nombre" data-ng-model="$ctrl.nuevoContacto.nombre" required>
          <div class="invalid-feedback">
            Debe ingresar un nombre
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" data-ng-class="{'is-invalid': formulario.apellido.$invalid &&  formulario.apellido.$dirty }" name="apellido" id="apellido" data-ng-model="$ctrl.nuevoContacto.apellido" required>
          <div class="invalid-feedback">
            Debe ingresar un apellido
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="fechanacimiento">Fecha de nacimiento </label><small class="text-muted"> (Opcional)</small>
        <input type="date" class="form-control" id="fechanacimiento" data-ng-model="$ctrl.nuevoContacto.fecha_de_nacimiento">
      </div>
      <div class="mb-3">
        <label for="domicilio">Domicilio </label><small class="text-muted"> (Opcional)</small>
        <input type="text" class="form-control" id="domicilio" data-ng-model="$ctrl.nuevoContacto.domicilio">
      </div>
      <div class="mb-3">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" data-ng-class="{'is-invalid': formulario.email.$invalid &&  formulario.email.$dirty }" name="email" id="email" data-ng-model="$ctrl.nuevoContacto.email" required>
        <div class="invalid-feedback">
          Ingrese una dirección de e-mail válida
        </div>
      </div>
      <button class="btn btn-primary" type="button" data-ng-disabled="formulario.$invalid" data-ng-click="$ctrl.guardar()">Guardar</button>
      <button class="btn btn-secondary" type="button" data-ng-click="$ctrl.nuevoContacto=null">Descartar</button>
    </form>
  </div>
</div>