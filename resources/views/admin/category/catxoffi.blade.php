

@extends('adminlte::page')

@section('title', 'Stokeate-Admin')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p> 
    </p>



     <!-- /.card-header -->
     <div class="card-body">
                    <table id="office" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Sucursal</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach($category as $categories)
                                    
                             <tr>
                                <td>{{ $categories->id }}</td>
                                <td>{{ $categories->name }}</td>
     
                            
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Id</th>
                                <th>Sucursal</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
@stop