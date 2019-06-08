@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Venta {{ $ventum->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/venta') }}" title="Volver a Busqueda"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/venta/' . $ventum->id . '/edit') }}" title="Editar Venta"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('venta/' . $ventum->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Venta" onclick="return confirm(&quot;Seguro deseas eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ventum->id }}</td>
                                    </tr>
                                    <tr><th> Factura </th><td> {{ $ventum->factura }} </td></tr><tr><th> Serie </th><td> {{ $ventum->serie }} </td></tr><tr><th> Cliente </th><td> {{ $ventum->cliente }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
