<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BootStrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<fieldset style="margin: 50px;">
<form>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputTelefone1" class="form-label">Telefone:</label>
    <input type="tel" class="form-control" id="exampleInputTelefone1">
  </div>
  <div class="mb-3">
   <label for="exampleInputOrigem1" class="form-label">Origem:</label>
    <select class="form-select" aria-label="Default select example">
        <option selected>Celular</option>
        <option value="1">Whatsapp</option>
        <option value="2">Email</option>
        <option value="3">Mensagem</option>
    </select>
   </div>
   <div class="mb-3">
        <label for="exampleInputContato1" class="form-label">Data do Contato:</label>
        <input type="date" class="form-control" id="exampleInputData1">
   </div>
   <div class="mb-3">
        <label for="exampleInputObservação1" class="form-label">Observação:</label>
        <input type="text" class="form-control" id="exampleInputObser1">
   </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</fieldset>
</body>