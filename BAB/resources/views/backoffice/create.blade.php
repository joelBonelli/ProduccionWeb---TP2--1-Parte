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
      <form action="/dashboard" method="POST">
        @csrf
        <h1 style="text-align: 5rem; margin-top: 20px; ">Cargar Nuevo Libro</h1>
        <div class="form-group">
          <label for="title">Titulo</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
          <label for="autor">Autor</label>
          <input type="text" class="form-control" id="autor" name="autor">
        </div>
        <div class="form-group">
          <label for="description">Descripcion</label>
          <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" class="form-control" id="price" name="price">
          </div>
          <div class="form-group">
            <label for="released_date">Año</label>
            <input type="date" class="form-control" id="released_date" name="released_date">
          </div>
          <div class="form-group">
            <label for="genre_id">Genero</label>
            <select class="form-control" name="genre_id" id="genre_id">
              <option value="1">Novela</option>
              <option value="2">Cuentos</option>
              <option value="3">Historia</option>
              <option value="4">Poesia</option>
              <option value="5">Biografia</option>
            </select>
          </div>
          <div class="form-group">
            <label for="released_date">Imagen</label>
            <input type="text" class="form-control" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary mt-2" name="submit">Guardar</button>
      </form>


    </div>
    @include('partials/footer');
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>