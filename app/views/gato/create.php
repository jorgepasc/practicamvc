<!doctype html>
<html lang="es">

<body>

    <h1>Alta de gato</h1>

    <form method="post" action="/gato/store">

    <div class="form-group">
        <label>Id Gato</label>
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