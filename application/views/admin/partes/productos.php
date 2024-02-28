<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Gestionar <b>Productos</b></h2>
            </div>
            <br>
            <div class="col-sm-6 text-right"> <!-- Agregada la clase text-right para alinear a la derecha -->
                <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Producto</span></a>
            </div>
        </div>
    </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                    </th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Detalles</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#editProductModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#deleteProductModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                        </td>
                    </tr>
                    <!-- Edit Modal HTML 
                    <div id="editProductModal" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url() . 'dashboard/list-products-edit' ?>" method="post" enctype='multipart/form-data'>
                                    <input type="hidden" name="id_pdto" value="" required>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Agregar Articulo</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="">Seleccione la categoria del articulo*</label>
                                            <select class="form-control" name="category" required>
                                                <option hidden selected><?php echo $p->categoria; ?></option>
                                                <option value="Laptop">Laptop</option>
                                                <option value="Accesories">Accesorios</option>
                                                <option value="Smartphone">Smartphones</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Seleccione la marca del articulo*</label>
                                            <select class="form-control" name="brand" required>
                                                <option hidden selected><?php echo $p->marca_pdto; ?></option>
                                                <option value="Apple">Apple</option>
                                                <option value="Asus">Asus</option>
                                                <option value="Dell">Dell</option>
                                                <option value="HP">HP</option>
                                                <option value="MSI">MSI</option>
                                                <option value="MSamsung">Samsung</option>
                                                <option value="Toshiba">Toshiba</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Nombre del articulo*</label>
                                            <input type="text" maxlength="50" class="form-control" name="name" value="<?php echo $p->nom_pdto; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Ingrese el precio del articulo*</label>
                                            <input type="number" maxlength="8" class="form-control" name="price" value="<?php echo $p->precio_pdto; ?>" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                                        </div>
                                        <div class="form-group">
                                            <label class="">Descripcion del articulo</label>
                                            <input type="text" maxlength="255" class="form-control" name="description" value="<?php echo $p->desc_pdto; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="">Cantidad del articulo*</label>
                                            <input type="text" maxlength="50" class="form-control" name="name" value="<?php echo $p->cantidad; ?>" required>
                                        </div>
                                        <div class="form-group custom-file">
                                            <label class="">Cargue imagenes del articulo</label>
                                            <div class="custom-file">
                                                <label class="custom-file-label">Seleccione al menos una imagen</label>
                                                <input type="file" class="form-control custom-file-input" name="image" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                        <input type="submit" class="btn btn-success" value="Aplicar Cambios">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                     Delete Modal HTML 
                    <div id="deleteProductModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="<?php echo base_url() . 'dashboard/list-products-delete' ?>" method="post" enctype='multipart/form-data'>
                                    <input type="hidden" name="id_pdto" value="<?php echo $p->_id; ?>" required>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Eliminar producto</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Estas seguro de querer eliminar este producto:</p>
                                        <h4 class="modal-title"><?php echo $p->nom_pdto; ?></h4>
                                        <p class="text-warning"><small>Esta accion no se puede deshacer.</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-danger" value="Eliminar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    Scripts para modal 
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Mostrando <b></b> de <b>X</b> registros</div>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#">Anterior</a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <!-- <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li> 
                <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Add Modal HTML
<div id="addProductModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url() . 'dashboard/list-products-save' ?>" method="post" enctype='multipart/form-data'>
                <div class="modal-header">
                    <h4 class="modal-title">Agregar Articulo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="">Seleccione la categoria del articulo*</label>
                        <select class="form-control" name="category" required>
                            <option value="Null" hidden></option>
                            <option value="Laptop">Laptop</option>
                            <option value="Accesories">Accesorios</option>
                            <option value="Smartphone">Smartphones</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="">Seleccione la marca del articulo*</label>
                        <select class="form-control" name="brand" required>
                            <option value="Null" hidden></option>
                            <option value="Apple">Apple</option>
                            <option value="Asus">Asus</option>
                            <option value="Dell">Dell</option>
                            <option value="HP">HP</option>
                            <option value="MSI">MSI</option>
                            <option value="MSamsung">Samsung</option>
                            <option value="Toshiba">Toshiba</option>
                            <option value="Toshiba">Xiaomi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="">Nombre del articulo*</label>
                        <input type="text" maxlength="50" class="form-control" name="name" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label class="">Ingrese el precio del articulo*</label>
                        <input type="number" maxlength="8" class="form-control" name="price" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                    </div>
                    <div class="form-group">
                        <label class="">Descripcion del articulo</label>
                        <input type="text" maxlength="255" class="form-control" name="description" required>
                    </div>
                    <div class="form-group">
                        <label class="">Cantidad del articulo</label>
                        <input type="text" maxlength="255" class="form-control" name="description" required>
                    </div>
                    <div class="form-group custom-file">
                        <label class="">Cargue imagenes del articulo</label>
                        <div class="custom-file">
                            <label class="custom-file-label">Seleccione al menos una imagen</label>
                            <input type="file" class="form-control custom-file-input" name="image" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Registrar">
                </div>
            </form>
        </div>
    </div>
<!-- <section>

    <!-- Botón para agregar nuevo producto
    <button onclick="agregarProducto()">Agregar Producto</button> 
    <div class="container">
    <div class="row">
                    <div class="col-xs-11 mx-auto">
						<div class="card">
                             <!-- Tabla de productos 
    <table border="3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Producto A</td>
                <td>$20.00</td>
                <td>
                    <button onclick="editarProducto(1)">Editar</button>
                    <button onclick="borrarProducto(1)">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Producto B</td>
                <td>$25.00</td>
                <td>
                    <button onclick="editarProducto(2)">Editar</button>
                    <button onclick="borrarProducto(2)">Borrar</button>
                </td>
            </tr>
					<div class="card-image">
					  <div id="morris-area-chart"></div>
					</div> 
					</div>	 
                    </div> 
    <!-- Tabla de productos 
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Producto A</td>
                <td>$20.00</td>
                <td>
                    <button onclick="editarProducto(1)">Editar</button>
                    <button onclick="borrarProducto(1)">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Producto B</td>
                <td>$25.00</td>
                <td>
                    <button onclick="editarProducto(2)">Editar</button>
                    <button onclick="borrarProducto(2)">Borrar</button>
                </td>
            </tr>
            <!-- Repite la estructura para cada producto 
        </tbody>
    </table>
</section> -->
</div>