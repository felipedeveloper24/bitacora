<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{URL::asset('css/app.css')}}>
    <title>Bitácora</title>
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
            <div class="buscador">
                <form action="" class=" d-flex justify-content-center row mt-2 m-auto w-75 text-white m-auto">
                    <div class="col-4">
                        <label for="" class="form-label">Categoría <i class="fa-solid fa-code"></i></label>
                        <select name="select_categoria" id="" class="form-control " required>
                            <option value="">Seleccione una categoría</option>
                            <option value="">React</option>
                            <option value="">Laravel</option>
                            <option value="">MYSQL</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="" class="form-label ">Fecha <i class="fa-regular fa-calendar-days"></i></label>
                        <input type="date" required class="form-control">
                    </div>
                    <div class="col-2">
                        <input type="submit" class="btn btn-primary" style="margin-top: 23%" value="Buscar">
                    </div>
                </form>
            </div>
            <h1>Últimas tareas</h1>
            <div class="tareas">
                <div class="tarea">
                    <h1>Hola</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque adipisci repellat iusto voluptate numquam, laudantium porro neque. Dolores, ea sequi dolor repudiandae iste quae, voluptatum eos facere aspernatur soluta modi.</p>
                    <cite>Fecha: 26-09-2022</cite>
                </div>
                <div class="tarea">
                    <h1>Hola</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque adipisci repellat iusto voluptate numquam, laudantium porro neque. Dolores, ea sequi dolor repudiandae iste quae, voluptatum eos facere aspernatur soluta modi.</p>
                    <cite>Fecha: 26-09-2022</cite>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>