<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container mt-3">
    <div class="row">
        <div class="col-md-10">
            <h3>Lista de clientes</h3>
        </div>
        <div class="col-md-2">
            <a class="btn btn-success btn-sm" href="{{ route('cliente.create') }}">Crear nuevo cliente</a>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellidos</th>
                  <th scope="col">Fecha de nacimiento</th>
                  <th scope="col">Correo</th>
                  <th scope="col">IP</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Direccion</th>
                  <th scope="col">Estado civil</th>
                  <th scope="col">Sueldo anual</th>
                  <th scope="col" colspan="3">Operaciones</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($clientes as $cliente)
                      <th scope="row">{{$cliente->id}}</th>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->fecha_de_nacimiento}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>{{$cliente->ip}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->estado_civil}}</td>
                        <td>{{$cliente->sueldo_anual}}</td>
                        <!-- Acciones-->
                        <td>
                            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post">
                                @csrf
                                <a class="btn btn-primary btn-sm" href="{{ route('cliente.show', $cliente->id) }}">Ver</a>
                                <a class="btn btn-info btn-sm" href="{{ route('cliente.edit', $cliente->id)}}">Editar</a>
                                @method('DELETE')
                                <input class="btn btn-danger btn-sm" type="submit" name="" value="Borrar"/>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>
