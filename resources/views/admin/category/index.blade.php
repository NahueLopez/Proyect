
@extends('adminlte::page')

@section('title', 'Stokeate-Admin')




@section('content_header')
<h1>
    Rubros <h4>Bienvenido  {{ auth()->user()->name }}  </h4> 

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-agregar-category">
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
                        <h3 class="card-title">Listado de Rubros</h3> 
                    </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="category" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Rubros</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        @foreach($categories as $category) 
                             <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                               
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-update-category-{{$category->id}}"> Editar</button>                         
                                </td>
                                <td>
                                <form action="{{ route ('admin.category.delete',$category->id)}}" method="Post">
                                    @csrf
                                    @method('delete')    
                                    <button class="btn btn-danger">Borrar</button>
                                </form>
                                </td>                         
                            </tr>

                                <!-- modal Actualizar Sucursal-->
                                   @include('admin.category.modal-update-category')
                                <!-- /.modal -->

                            @endforeach
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                 <th>Id</th>
                                <th>Rubros</th>
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
    <div class="modal fade" id="modal-agregar-category">
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Rubro</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>

                <form action="{{route('admin.category.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Rubro:</label>
                            <input type="text" name="name" id="sucursal">  
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="office-id">Sucursal</label>
                            <select  name="office_id" id="office-id">  
                                <option value="">Elegir Sucursal</option>
                                @foreach($offices as $office)
                                <option value="{{$office->id}}">--{{$office->id}}--</option>
                                @endforeach
                            </select>
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
    $('#$categories').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop
