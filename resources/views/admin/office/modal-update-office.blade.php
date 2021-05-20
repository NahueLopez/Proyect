 <div class="modal fade" id="modal-update-office-{{$office->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-default">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Actualizar Sucursal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    </div>

                                                <form action="{{route('admin.office.update', $office->id)}}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">Sucursal:</label>
                                                            <input type="text" name="name" id="name" value="{{$office->name}}">
                                                        
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="adress">Direccion:</label>
                                                            <input type="text" name="adress" id="adress" value="{{$office->adress}}">
                                                        
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Telefono:</label>
                                                            <input type="text" name="phone" id="phone" value="{{$office->phone}}">
                                                        
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                                        <button type="submit" class="btn btn-outline-success">Actualizar</button>
                                                    </div>
                                                </form>    
                                            </div>
                                        <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>