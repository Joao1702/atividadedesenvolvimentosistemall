<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    <title>Usuario</title>
</head>
  <body id="usuario">
    <form action="{{route('usuarios.store')}}" method="post">
    @csrf
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputTitulo4">telefone</label>
          <input type="text" class="form-control" id="inputTitulo4" name="telefone">
        </div>     
      </div>
      <div class="form-group">
        <label for="sexo">sexo</label>
        <select id="sexo" class="form-control" name="sexo">
            <option selected>Escolher...</option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Outros</option>
          </select>
      </div>
          <div class="form-group">
            <label for="inputAddress2">Data de nascimento</label>
            <input type="date" class="form-control" id="inputAddress2" name="data">
          </div>
      <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
  </body>
</html>