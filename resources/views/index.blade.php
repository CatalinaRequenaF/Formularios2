<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="{{route("post.store")}}">
            <h1>POSTS</h1>
            @csrf
            <h2>@lang('Crea una publicación')</h2>
            <div class="form-group">
                <label for="titulo">{{__('Título de la publicación')}}</label  >
                <input class="form-control" name="titulo" type="text" placeholder="@lang('Ingresa aquí el título de la publicación')" required>
            </div>
            <br>
            <div class="form-group">
                <label for="extracto">{{__('Extracto de publicación')}}</label>
                <input class="form-control" name="extracto" type="text" placeholder="@lang('Ingresa aquí el extracto de la publicación')" required>

            </div>
            <br>
            <div class="form-group">
                <label for="contenido">{{__('Contenido de la publicación')}}</label>
            <input class="form-control" name="contenido" type="text"
                placeholder="@lang('Ingresa aquí el contenido completo de la publicación')" required>

            </div>
            <br>
            <div class="form-group">
                <label for="acceso">{{__('Tipo de acceso')}}</label>
                <select class="form-control" name="acceso" required>
                    <option value="publico">@lang('Acceso público')</option>
                    <option value="privado">{{__('Acceso privado')}}</option>
                </select>
            </div>
            <br> 
            <div class="form-group">               
                <input name="caducable" type="checkbox"> @lang('Caducable') <br>
                <input name="comentable" type="checkbox"> {{__('Comentable')}}<br>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">@lang('Publica') </button>

        </form>
    </div>
</body>

</html>
