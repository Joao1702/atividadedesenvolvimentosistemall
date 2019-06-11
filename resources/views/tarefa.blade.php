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
   
    <title>Tarefa</title>
</head>
  <body id="tarefa">
    <form>
      <div class="form-row">
      <form action="{{route('tarefa.store')}}" method="post">
    @csrf
        <div class="form-group col-md-6">
          <label for="inputTitulo4">Titulo</label>
          <input type="text" class="form-control" id="inputTitulo4" name="titulo">
        </div>
        <div class="form-group col-md-6">
          <label for="inputUsuario Responsavel4">Usuario Responsavel</label>
          <input type="Usuario Responsavel" class="form-control" id="inputUsuario Responsaveld4" name="usuario">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Privacidade</label>
        <select id="inputState" class="form-control">
            <option selected>Escolher...</option>
            <option>Publico</option>
            <option>Privado</option>
          </select>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Descricao</label>
        <input type="text" class="form-control" id="inputAddress2" name="descricao">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Tipo</label>
          <input type="text" class="form-control" id="inputTipo" name="tipo">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Status</label>
          <select id="inputState" class="form-control" name="status">
            <option selected>Escolher...</option>
            <option>Concluido</option>
            <option>Pendente</option>
          </select>
        </div>
          <div class="form-group">
            <label for="inputAddress2">Data de Conclusao</label>
            <input type="date" class="form-control" id="inputAddress2" name="data">
          </div>
      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
  </body>
</html>