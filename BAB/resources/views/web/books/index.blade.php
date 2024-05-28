<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria BAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        main > .container {
            padding: 20px 30px 0;
        }
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1; /* Hace que el contenido principal ocupe el espacio disponible */
        }
    
    </style>
</head>
<body>
    @include('partials/nav');
    <main class="flex-shrink-0">

        <div class="container">
            <h3 class="container my-3" id="titulo">Listado de Libros</h3>
  
  
            <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Año</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Portada</th>

                    </tr>
                </thead>
  
                <tbody>
                    @foreach ($books as $book)
                    <tr>          
                        <td><a href=" /books/{{ $book->id }} "> {{ $book->title }}</a></td>
                        <td> {{ $book->autor }}</td>
                        <td> {{ $book->description }}</td>
                        <td>{{ $book->price }}</td> 
                        <td>{{ $book->released_date }}</td> 
                        <td>{{ $book->genre_id }}</td>
                        <td><img src="{{ $book->image }}" alt="Portada del libro" class="img-thumbnail" style="max-width: 80px;"></td>


                    </tr>
                        @endforeach
  
                </tbody>
            </table>
        </div>
    </main>

    @include('partials/footer');   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>