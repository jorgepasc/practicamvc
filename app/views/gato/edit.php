<!doctype html>
<html lang="es">
<style>

  body 
  {
    padding-left: 20px;
  }

  button {
    background-color: green;
    color: white;
    font-weight: bold;
    font-size: 12px;
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
    <h1>Modificar datos de gato</h1>

    <form method="post" action="/gato/update">        
    <div>
        <label>Id</label>
        <input type="text" name="id" class="form-control"
        value="<?php echo $gato->getIdGato() ?>" readonly="readonly">
    </div>

    <div class="form-group">
        <label>Raza</label>
        <input type="text" name="raza" class="form-control"
        value="<?php echo $gato->getRaza() ?>">
    </div>
    <div class="form-group">
        <label>Pelaje</label>
        <input type="text" name="pelaje" class="form-control"
        value="<?php echo $gato->getPelaje() ?>">
    </div>
    <div class="form-group">
        <label>Descripcion</label>
        <input type="text" name="descripcion" class="form-control"
        value="<?php echo $gato->getDescripcion() ?>">
    </div>
    <button type="submit">Confirmar</button>
    </form>


</body>

</html>