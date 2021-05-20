 <div class="modal fade" id="modal-update-category-{{$category->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-default">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Actualizar Sucursal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                    </div>

                                                <form action="{{route('admin.category.update', $category->id)}}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">Sucursal:</label>
                                                            <input type="text" name="name" id="name" value="{{$category->name}}">
                                                        </div>
                                                       <!--  <div class="form-group">
                                                            <label for="office-id">Sucursal</label>
                                                            <select  name="office_id" id="office-id">  
                                                                <option value="">Elegir Sucursal</option>
                                                                @foreach($offices as $office)
                                                                <option value="{{$office->id}}">--{{$office->name}}--</option>
                                                                @endforeach
                                                            </select>
                                                        </div> -->
                    
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