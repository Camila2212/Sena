<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/099486b956.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
</head>

<body>
    <h1 id="ha" class="text-center">Bienvenido curso</h1>
    

    @if (session('correcto'))
        <div class="alert alert-info">{{ session('correcto') }}</div>
    @endif


    @if (session('incorrecto'))
        <div class="alert alert-danger">{{ session('incorrecto') }}</div>
    @endif

    <script>
      var res=function(){
        var not=confirm("¿Estas seguro de eliminar este curso");
        return not;
      }
    </script>

    <!-- Modal Registar curso-->
    <div class="modal fade" id="modalInsertar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo curso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('curso.create') }}" method="POST">
                        @csrf
                        <div class="mb-0">
                            <input type="hidden" class="form-control" id="id" aria-describedby="emailHelp"
                                name="id">
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre </label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                                name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="idInstructor" class="form-label">idInstructor </label>
                            <input type="number" name="idInstructor" class="form-control" id="idInstructor">
                        </div>
{{-- 
                        <label for="idInstructor">Selecciona un instructor:</label>
                        <select name="idInstructor" id="idInstructor">
                            @foreach($instructores as $idInstructor)
                                <option value="{{ $idInstructor }}">{{ $nombre }}</option>
                            @endforeach
                        </select>
                         --}}

                         
                         
                           
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Insertar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="p-5 table-responsive">
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalInsertar">Registrar
            Curso</button>


        <table class="table table-hover table-striped table-bordered">
            <thead class="bg-info">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">idInstructor</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                    <tr>
                        <th scope="row">{{ $item->idCurso }}</th>
                        <td>{{ $item->nombre }}</td>
                        <td>{{ $item->idInstructor }}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalModificar{{ $item->idCurso }}"><i class="fa-solid fa-user-pen"></i></a>
                            <a href="{{route('curso.delete', $item->idCurso)}}" onclick="return res()" class="btn btn-danger btn-sm"><i class="fa-solid fa-user-minus"></i></a>
                        </td>

                        

                        <!-- Modal Modificar Curso -->
                        <div class="modal fade" id="modalModificar{{ $item->idCurso }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar curso</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('curso.update')}}" method="POST">
                                            @csrf

                                            <div class="mb-0">
                                                <input type="hidden" class="form-control" id="id"
                                                    aria-describedby="emailHelp" name="id" value="{{ $item->idCurso }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre Curso</label>
                                                <input type="text" class="form-control" id="nombre"
                                                    aria-describedby="emailHelp" name="nombre" value="{{ $item->nombre }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="idInstructor" class="form-label">Id instructor</label>
                                                <input type="text" name="idInstructor" class="form-control"
                                                    id="idInstructor" value="{{ $item->idInstructor }}">
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Modificar</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    </div>

</body>

</html>
