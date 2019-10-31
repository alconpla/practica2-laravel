<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <h3>Añadir cliente</h3>
            <form action="{{ route('cliente.store') }}" method post>
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="apellidos" placeholder="Introduce tus apellidos">
                </div>
                <div class="form-group">
                    <label for="fecha_de_nacimiento">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_de_nacimiento">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" placeholder="Introduce tu correo">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="telefono" placeholder="Introduce tu telefono">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="direccion" placeholder="Introduce tu direccion">
                </div>
                 <div class="form-group">
                    <input type="text" class="form-control" id="estado_civil" placeholder="Introduce tu estado civil">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="sueldo_anual" placeholder="Introduce tu sueldo anual">
                </div>
                <a class="btn btn-info btn-sm" href="{{ route('cliente.index') }}">Volver</a>
                <input type="submit" class="btn btn-primary" value="Crear cliente">
            </form>
            
        </div>
    </div>
</div>