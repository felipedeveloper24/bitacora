<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administración</title>
    <link rel="stylesheet" href={{URL::asset('css/app.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/10a72ae3cd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="main-container">
        <header class="header">
            <div class="title">
                <h1>Bitácora práctica</h1>
            </div>
            <nav class="nav">
                <ul>
                    <li><a href={{URL("/")}}>Inicio</a></li>
                    <li><a href={{URL("/admin")}}>Administración</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary ms-2 mt-4" style="width: 20%" data-bs-toggle="modal" data-bs-target="#myModal">
    Registrar nueva tarea
  </button>
  
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Registrar tarea</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
            <form action="" class="w-100 was-validated">
                <div class="col-12 mb-2">
                    <label for="">Título</label>
                    <input type="text" required name="titulo" class="form-control">
                    <div class="invalid-feedback">
                        Por favor escriba algo.
                    </div>

                </div>
                <div class="col-12 mb-2">
                    <label for="" class="form-label">Descripción</label>
                    <textarea name="descripcion" required id="" cols="20" rows="5" class="form-control"></textarea>
                    <div class="invalid-feedback">
                        Por favor escriba algo.
                    </div>
                </div>
                <div class="col-12 mb-2">
                    <label for="">Categoría</label>
                    <select name="select_categoria" required class="form-control" id="">
                        <option value="">Seleccione una categoría</option>
                        <option value="1">React</option>
                    </select>
                </div>
                <div class="col-12 d-flex mt-2">
                    <input type="submit" value="Subir" class="btn btn-primary w-50 m-auto">
                </div>
            </form>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
  
      </div>
    </div>
  </div>
            <table class="table  table-responsive-md w-100 text-white">
                <thead>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi eos praesentium repellat voluptatem quia, hic totam laborum ad dignissimos dolore repudiandae obcaecati nulla molestias perspiciatis vel laboriosam officia facere a.</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, provident expedita mollitia necessitatibus illum autem sequi voluptates quis eligendi aut porro obcaecati enim ad dicta ab quam itaque quasi dolore!</td>
                        <td>26-09-2022</td>
                        <td>
                            <button class="btn btn-success mb-2">Modificar</button>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</body>
</html>