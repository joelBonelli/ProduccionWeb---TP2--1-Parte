<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libreria BAB</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
  @include('partials/nav');
    <div class="container">   
      <h1 style="text-align: 5rem">Editar Libro</h1>
      
      <form action="/dashboard/{{ $book->id }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Titulo</label>
          <input value="{{ $book->title }}" type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
          <label for="autor">Autor</label>
          <input value="{{ $book->autor }}" type="text" class="form-control" id="autor" name="autor">
        </div>
        <div class="form-group">
          <label for="description">Descripcion</label>
          <input value="{{ $book->description }}" type="text" class="form-control" id="description" name="description">
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input value="{{ $book->price }}" type="number" class="form-control" id="price" name="price">
          </div>
          <div class="form-group">
            <label for="released_date">Año</label>
            <input value="{{ $book->released_date }}" type="date" class="form-control" id="released_date" name="released_date">
          </div>
          <div class="form-group">
            <label for="genre_id">Genero</label>
            <select class="form-control" name="genre_id" id="genre_id">
              <option @selected($book->genre_id == 1) value="1">Novela</option>
              <option @selected($book->genre_id == 2) value="2">Cuentos</option>
              <option @selected($book->genre_id == 3) value="3">Historia</option>
              <option @selected($book->genre_id == 4) value="4">Poesia</option>
              <option @selected($book->genre_id == 5) value="5">Biografia</option>
            </select>
            {{-- <input value="{{ $book->genre_id }}" type="text" class="form-control" id="genre_id" name="genre_id"> --}}
          </div>
          <div class="form-group">
            <label for="released_date">Imagen</label>
            <input value="{{ $book->image }} type="text" class="form-control" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary mt-2" class="form-control">Guardar</button>
      </form>


    </div>
    @include('partials/footer');
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>