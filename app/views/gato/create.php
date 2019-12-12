<!doctype html>
<html lang="es">
<style>
body 
  {
    padding-left: 20px;
  }

  button {
    background-color: darkgreen;
    color: white;
    font-weight: bold;
    font-size: 15px;
    padding: 4px;
    margin: 5px;
    border-radius: 10px;
    min-width: 80px;
  }

  button:hover {
    background-color: lightgreen;
    color: gray;    
  }

  label {
    display: block;
    width: 30px;
    margin: 5px;
  }
</style>
<body>

    <h1>Alta de gato</h1>

    <form method="post" action="/gato/store">

    <div class="form-group">
        <label>Id</label>
        <input type="number" name="idGato" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label>Raza</label>
        <input type="text" name="raza" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" class="form-control">
    </div>
    <br>
    <div class="form-group">
        <label>Pelaje</label>
        <input type="text" name="pelaje" class="form-control">
    </div>
    <br>
    <button type="submit" class="btn btn-default">Enviar</button>
    </form>
    <a href="/gato/index">Volver </a> 
</body>

</html>