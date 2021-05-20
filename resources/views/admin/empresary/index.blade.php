@extends('adminlte::page')

@section('title', 'Stokeate-Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('content')
    

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear nueva Sucursal</div>

                    <div class="card-body">
                       
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            <hr class="my-3">
                        @endif                            
                       
                        <form action="crearsucursal" method="POST">
                            @csrf
                            <div class="row">
                                
                            @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif   
                               
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Sucursal</label>
                                        <input type="text" name="sucursal" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Direccion</label>
                                        <input type="text" name="direccion" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="text" name="telefono" id="" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success btn-block">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>

    </div>

    @stop     
    @section('js')
    <script> console.log('Hi!'); </script>
@stop

<h2>Yo soy la vista De empresas</h2>
    @endsection