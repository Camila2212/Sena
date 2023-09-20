<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendiz</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.css')}}">
    <script src="https://kit.fontawesome.com/099486b956.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 id="ha" class="text-center">Bienvenido Aprendiz</h1>
   <div class="p-5 table-responsive">
    <table class="table table-hover table-striped table-bordered">
        <thead class="bg-info">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($datos as $item)
          
          <tr>
          <th scope="row">{{$item->idAprendiz}}</th>
          <td>{{$item->nombre}}</td>
          <td>{{$item->apellido}}</td>
          <td>
            <a href="" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user-pen"></i></a>
            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-user-minus"></i></a>
          </td>

                  
            <!-- Modal de modificar -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
        </tr>
          @endforeach
          
        </tbody>
      </table>
   </div>
   
</body>
</html>