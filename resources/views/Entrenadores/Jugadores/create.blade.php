@extends('layout.app')

@section('content')
    <section class="table">
        <div class="container">
            <div class="row shadow-lg p-3 mb-5 bg-white rounded">
                <form action="{{route('jugadoresCreateSave')}}" method="POST" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="validationCustom01"  required name="nombre">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="validationCustom02"  required name="apellidoM">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="validationCustom02"  required name="apellidoP">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="username">
                          <div class="invalid-feedback">
                            Please choose a username.
                          </div>
                        </div>
                      </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="validationCustom03" required name="password">
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom03" class="form-label">Posicion</label>
                        <input type="text" class="form-control" id="validationCustom03" required name="posicion">
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Equipo</label>
                        <select class="form-select" id="validationCustom04" required name="equipo">
                            <option selected disabled value="">Selecciona un Equipo</option>
                            @foreach ($equipos as $equipo)
                            <option value="{{$equipo->idEquipo}}">{{$equipo->nombre}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
