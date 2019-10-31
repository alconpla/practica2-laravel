<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <h3>Detalle de {{$cliente->nombre}}</h3>
                <div class="form-group">
                    <p>Nombre: {{$cliente->nombre}}</p>
                    <p>Apellidos: {{$cliente->apellidos}}</p>
                    <p>Fecha de nacimiento: {{$cliente->fecha_de_nacimiento}}</p>
                    <p>Correo: {{$cliente->correo}}</p>
                    <p>IP: {{$cliente->ip}}</p>
                    <p>Telefono: {{$cliente->telefono}}</p>
                    <p>Direccion: {{$cliente->direccion}}</p>
                    <p>Estado civil: {{$cliente->estado_civil}}</p>
                    <p>Sueldo anual: {{$cliente->sueldo_anual}}</p>
                </div>
                </div>
                <a class="btn btn-info" href="{{ route('cliente.index') }}">Volver</a>
            
        </div>
    </div>
</div>