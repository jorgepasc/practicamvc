<!DOCTYPE html>
<html>
    <style>
    * {
        margin: 2px;
        padding: 4px;
    }

    ul {
        list-style-type: none;        
    }

    nav li {
        display: inline;
    }

    #contenido {
        border: 2px solid gray;
        min-height: 300px;
    }
    </style>
    <body>
        <header>
            <h2>WIKIPEDIA</h2>
        </header>
        <nav>
            <ul>
                <li>Inicio</li>
                <li>Modificar</li>
            </ul>
        </nav>
        <div id="contenido"><!--Se puede meter js usando el DOM con ids o algo asi-->
        <a href="/gato">Gato </a>
        <a href="/tiburon">Tiburon </a>
        <a href="/loro">Loro </a>
        <!-- <?php foreach ($animales as $animal) { ?>
          <tr>
          <td><?php echo $animal["IdAnimal"] ?></td>
          <td><?php echo $animal["Nombre"] ?></td>
          <td><?php echo $animal["Color"] ?></td>
          <td><?php echo $animal["Descripcion"] ?></td>
          <td>
            <!-- <a href="/animal/show/<?php echo $animal->id ?>" class="btn btn-primary">Ver </a>
            <a href="/animal/edit/<?php echo $animal->id ?>" class="btn btn-primary">Editar </a>
            <a href="/animal/delete/<?php echo $animal->id ?>" class="btn btn-primary">Borrar </a> -->
          </td>
          </tr>
        <?php } ?> -->
        </div>
    </body>
</html>