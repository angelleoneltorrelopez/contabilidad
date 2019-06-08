@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Producto {{ $producto->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/producto') }}" title="Volver a Busqueda"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/producto/' . $producto->id . '/edit') }}" title="Editar Producto"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('producto' . '/' . $producto->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Producto" onclick="return confirm(&quot;Seguro deseas eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $producto->id }}</td>
                                    </tr>
                                    <tr><th> Producto </th><td> {{ $producto->producto }} </td></tr><tr><th> Generico </th><td> {{ $producto->generico }} </td></tr><tr><th> Cantidad </th><td> {{ $producto->cantidad }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
