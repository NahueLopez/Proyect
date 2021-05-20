
@extends('adminlte::page')

@section('title', 'Stokeate-Admin')



@section('content_header')
<h1>
    Sucursales <h4>Bienvenido . {{ auth()->user()->name }} </h4> <!-- De esta manera podemos traer al usuario logueado -->

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-agregar-office">
        Crear
    </button>
</h1>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('content')
    

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Listado de Sucursales</h3>
                    </div>
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
                           
                            @foreach($offices as $office)
                            
                             <tr>
                                <td>{{ $office->id }}</td>
                                <td>{{ $office->name }}</td>
                                <td>{{ $office->adress }}</td>
                                <td>{{ $office->phone }}</td>
                                
                                <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.category.catxoffi', $office->id)}}">Ver categorias</a>
                                               
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-update-office-{{$office->id}}"> Editar</button>                         
                                </td>
                                <td>
                                <form action="{{ route ('admin.office.delete',$office->id)}}" method="Post">
                                    @csrf
                                    @method('delete')    
                                    <button class="btn btn-danger">Borrar</button>
                                </form>
                                </td>                         
                            </tr>

                                <!-- modal Actualizar Sucursal-->
                                   @include('admin.office.modal-update-office')
                                <!-- /.modal -->
                            
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

    <!-- modal Crear Sucursal  -->
    <div class="modal fade" id="modal-agregar-office">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Sucursal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>

                <form action="{{route('admin.office.store', auth()->user()->name)}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Sucursal:</label>
                            <input type="text" name="name" id="sucursal">
                        
                        </div>
                        <div class="form-group">
                            <label for="adress">Direccion:</label>
                            <input type="text" name="adress" id="sucursal">
                        
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefono:</label>
                            <input type="text" name="phone" id="sucursal">
                        
                        </div>
                    </div>
                    
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-success">Agregar</button>
                    </div>
                </form>    
            </div>
        <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

      

@stop 

 @section('js')
 <script>
$(document).ready(function() {
    $('#office').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop
