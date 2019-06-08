@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Compra {{ $compra->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/compra') }}" title="Volver a Busqueda"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/compra/' . $compra->id . '/edit') }}" title="Editar Compra"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('compra' . '/' . $compra->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Eliminar Compra" onclick="return confirm(&quot;Seguro deseas eliminar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $compra->id }}</td>
                                    </tr>
                                    <tr><th> Factura </th><td> {{ $compra->factura }} </td></tr><tr><th> Serie </th><td> {{ $compra->serie }} </td></tr><tr><th> Proveedor </th><td> {{ $compra->proveedor }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
